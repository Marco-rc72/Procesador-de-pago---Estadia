<main>
    <div class="column-container">
        <div class="column">
            <h2>Elige tu forma de pago</h2>
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
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: 100
                                }
                            }]
                        });
                    },

                    onApprove: function(data,actions){
                        actions.order.capture().then(function(detalles){
                            alert("Gracias por su pago!")
                            window.location.href="paquetes.php"
                        });
                    },

                    onCancel: function(data){
                        alert("Pago cancelado")
                        console.log(data);
                    }
                }).render('#paypal-button-container');
            </script>
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
        <div class="column">
            <h2>Resumen de tu compra</h2>
            <hr class="separacion">
            <h3 class="precio">Basico plus $199.99</h3>
            <hr class="separacion">
            <h3 class="precio">Pagaras $199.99</h3>
        </div>
    </div>
</main>
