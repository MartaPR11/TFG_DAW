/* codigo del pop up del contacto */
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('btn-cerrar');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});