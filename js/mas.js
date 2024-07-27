const showMoreButtons = document.querySelectorAll('.show-more');

showMoreButtons.forEach(button => {
    const tabla = button.closest('.tabla');
    const elementosFlex = tabla.querySelectorAll('.contenedor-flex');

    if (elementosFlex.length < 3) {
        button.style.display = 'none';
    } else {
        button.addEventListener('click', (event) => {
            tabla.classList.toggle('hidden');

            if (tabla.classList.contains('hidden')) {
                tabla.style.maxHeight = '60%';
            } else {
                tabla.style.maxHeight = '100%';
            }

            button.textContent = tabla.classList.contains('hidden') ? 'Ver más' : 'Ver menos';
        });
    }
});
