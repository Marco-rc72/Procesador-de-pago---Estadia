const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal_close');

document.addEventListener('click', (e) => {
    if (e.target.classList.contains('boton')) {
        e.preventDefault();
        modal.classList.add('modal-show');
    }
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal-show');
});
