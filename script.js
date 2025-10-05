/* script.js - versão melhorada para responsividade e animações */

// Seleções
const video1 = document.querySelector('#video1');
const video2 = document.querySelector('#video2');
const video3 = document.querySelector('#video3');
const mascara = document.querySelector('.mascara');
const videos = [video1, video2, video3];

function solicitarOrcamento() {
  window.location.href = 'https://api.whatsapp.com/send?phone=5582996652730&text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento%20com%20voc%C3%AAs.';
}

/* Função para ampliar vídeo usando classes (responsivo) */
function ampliarVideo(videoEl) {
  // remover estado anterior
  videos.forEach(v => {
    v.pause();
    v.removeAttribute('controls');
    v.parentElement.classList.remove('video-ampliado');
    v.parentElement.classList.remove('video-oculto');
  });

  // aplicar máscara
  mascara.classList.add('visible');

  // Em telas grandes aplicamos um deslocamento se necessário, em mobile centralizamos
  const parent = videoEl.parentElement;
  parent.classList.add('video-ampliado');

  // ocultar os outros suavemente
  videos.forEach(v => {
    if (v !== videoEl) v.parentElement.classList.add('video-oculto');
  });

  // mostrar controles e play
  videoEl.setAttribute('controls', '');
  videoEl.play().catch(() => { /* autoplay pode falhar em mobile, sem problemas */ });
}

/* Restaurar estado original */
function fecharVideos() {
  mascara.classList.remove('visible');
  videos.forEach(v => {
    v.parentElement.classList.remove('video-ampliado');
    v.parentElement.classList.remove('video-oculto');
    v.removeAttribute('controls');
    v.pause();
    v.currentTime = 0;
    // tentar reativar loop autoplayed behavior (muted loop remains)
    try { v.play().catch(() => { }); } catch (e) { }
  });
}

/* Event listeners nos vídeos */
videos.forEach(v => {
  if (!v) return;
  v.addEventListener('click', (e) => {
    ampliarVideo(v);
  });
});

/* fechar ao clicar na máscara */
mascara.addEventListener('click', fecharVideos);

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
      observer.unobserve(entry.target);
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
