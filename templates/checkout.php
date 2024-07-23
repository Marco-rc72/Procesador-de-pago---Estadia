<main>
    <div class="column-container">
        <div class="column">
            <h2>Elige tu forma de pago</h2>
            
            <!-- PayPal Button Script -->
            <script
                src="https://www.paypal.com/sdk/js?client-id=AVkyClmvCi9M--IWwr_EblUfgeiK-DETv7_zNc19B6GXOe42FJJ81Fvpzqka9rNz9GikcZmsZZ5DEsB_&currency=MXN" 
                data-sdk-integration-source="developer-studio">
            </script>
            <div id="paypal-button-container" class="img-container"></div>
            <script>
paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill',
        label: 'pay'
    },
    createOrder: function(data, actions) {
        const packageData = JSON.parse(localStorage.getItem('selectedPackage'));
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: packageData.price
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(detalles) {
            return fetch('class/captura.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    detalles: detalles,
                    namePackage: JSON.parse(localStorage.getItem('selectedPackage')).name // Enviar el nombre del paquete
                })
            })
            .then(response => response.json())
            .then(result => {
                if (result.status === 'success') {
                    window.location.href = "paquetes.php";
                } else {
                    console.error('Error al insertar datos:', result.message);
                }
            })
            .catch(error => {
                console.error('Error al enviar datos:', error);
            });
        });
    },
    onCancel: function(data) {
        alert("Pago cancelado");
        console.log(data);
    }
}).render('#paypal-button-container');


            </script>
            
            <!-- Payment Methods -->
            <div class="img-container">
                <a href="datos_tarjeta.php">
                    <img src="assets/img/images.png" alt="Image">
                </a>
            </div>
            <div class="img-container">
                <a href="datos_tarjeta.php">
                    <img src="assets/img/banamex.png" alt="Banamex">
                </a>
            </div>
        </div>
        
        <div id="summary" class="column">
            <h2>Resumen de Compra</h2>
            <div class="line"></div>
            <h3>Paquete: <span id="packageName"></span></h3>
            <div class="line"></div>
            <h3>Precio: <span id="packagePrice"></span></h3>
            <div class="line"></div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Recuperar los datos del paquete seleccionado
        const packageData = JSON.parse(localStorage.getItem('selectedPackage'));
        if (packageData) {
            document.getElementById('packageName').innerText = packageData.name;
            document.getElementById('packagePrice').innerText = '$' + parseFloat(packageData.price).toFixed(2);
        }
    });
    </script>
</main>
