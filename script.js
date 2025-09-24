const video1 = document.querySelector('#video1');
const video2 = document.querySelector('#video2');
const video3 = document.querySelector('#video3');
const mascara = document.querySelector('.mascara')


video1.addEventListener('click', () => {
    video1.style.width = '600px';
    video1.style.height = '1000px';
    mascara.style.visibility = 'visible'
    video1.style.position = 'static'
    mascara.style.zIndex = '0'
    video1.style.zIndex = '100'
    video1.style.transform = 'translateX(70%)'
})
mascara.addEventListener('click', () => {
    mascara.style.visibility = 'hidden'
    video1.style.width = '500px'
    video1.style.height = '600px'
    video1.style.position = 'static'
    video1.style.transform = 'translateX(0)'
})