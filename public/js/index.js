const openModalBtn = document.getElementById("openModal");
const modal = document.getElementById("myModal");
const closeModalBtn = document.getElementsByClassName("close")[0];

openModalBtn.addEventListener("click", () => {
  modal.style.display = "flex";
});

closeModalBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

// Adicione animações ou interações com JavaScript aqui, por exemplo:
const card = document.getElementById('card');

// Exemplo de animação de fade in/out ao clicar no card
card.addEventListener('click', () => {
  card.classList.toggle('fade');
});
