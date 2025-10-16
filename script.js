
const video = document.querySelector('#video1, #video2, #video3');
// const video2 = document.querySelector('#video2');
// const video3 = document.querySelector('#video3');
const mascara = document.querySelector('.mascara');



function solicitarOrcamento() {
  window.location.href = 'https://api.whatsapp.com/send?phone=5582996652730&text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento%20com%20voc%C3%AAs.';
}



/* MENU HAMBURGUER */
const menuBtn = document.querySelector('.menu-toggle');
const mainNav = document.querySelector('.cabeçalho');
menuBtn.addEventListener('click', () => {
  const isOpen = mainNav.classList.toggle('show');
  menuBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
});

/* Animações: IntersectionObserver para fade-up e zoom-in */
const observerOptions = { root: null, rootMargin: '0px', threshold: 0.12 };
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate');
      // se quiser que a animação ocorra apenas 1 vez, descomente a linha abaixo:
      // observer.unobserve(entry.target);
    }
  });
}, observerOptions);

document.querySelectorAll('.fade-up, .zoom-in').forEach(el => observer.observe(el));

/* Melhorias: fechar menu ao redimensionar para desktop */
window.addEventListener('resize', () => {
  if (window.innerWidth > 768) {
    mainNav.classList.remove('show');
    menuBtn.setAttribute('aria-expanded', 'false');
  }
});
