const video1 = document.querySelector('#video1');
const video2 = document.querySelector('#video2');
const video3 = document.querySelector('#video3');
const mascara = document.querySelector('.mascara')


video1.addEventListener('click', () => {
    video1.style.width = '600px';
    video1.style.height = '900px';
    mascara.style.visibility = 'visible'
    video1.style.position = 'static'
    mascara.style.zIndex = '0'
    video1.style.zIndex = '100'
    video1.style.transform = 'translateX(80%)'
    video2.style.display = 'none'
    video3.style.display = 'none'    
    video1.controls = true;
})
video2.addEventListener('click', () => {
    video2.style.width = '600px';
    video2.style.height = '900px';
    mascara.style.visibility = 'visible'
    video2.style.position = 'static'
    mascara.style.zIndex = '0'
    video2.style.zIndex = '100'
    video2.style.transform = 'translateX(0%)'
    video1.style.display = 'none'
    video3.style.display = 'none'   
    video2.controls = true; 
})
video3.addEventListener('click', () => {
    video3.style.width = '600px';
    video3.style.height = '900px';
    mascara.style.visibility = 'visible'
    video3.style.position = 'static'
    mascara.style.zIndex = '0'
    video3.style.zIndex = '100'
    video3.style.transform = 'translateX(-80%)'
    video1.style.display = 'none'
    video2.style.display = 'none'
    video3.controls = true;
})
mascara.addEventListener('click', () => {
    mascara.style.visibility = 'hidden'
    video1.style.width = '500px'
    video1.style.height = '600px'
    video1.style.position = 'static'
    video1.style.transform = 'translateX(0)'
    video2.style.width = '500px'
    video2.style.height = '600px'
    video2.style.position = 'static'
    video2.style.transform = 'translateX(0)'
    video3.style.width = '500px'
    video3.style.height = '600px'
    video3.style.position = 'static'
    video3.style.transform = 'translateX(0)'
    video1.style.display = 'block'
    video2.style.display = 'block'
    video3.style.display = 'block'
    video1.controls = false;
    video2.controls = false;
    video3.controls = false;
    video1.autoplay = true;
    video2.autoplay = true;
    video3.autoplay = true;
    
})