
let name = document.querySelector('.name')
let funcao = document.querySelector('.funcao')

let fotosgaleria = document.querySelector('.fotosgaleria')


const fotos = [
    {src: './assets/img/1.jpg', name: 'foto1'},
    {src: './assets/img/2.jpg', name: 'foto2'},
    {src: './assets/img/3.jpg', name: 'foto3'},
    {src: './assets/img/4.jpg', name: 'foto4'},
    {src: './assets/img/5.jpg', name: 'foto5'},
    {src: './assets/img/6.jpg', name: 'foto6'},
]

fotos.forEach(foto => {
    const img = document.createElement('img');
    img.src = foto.src;
    img.alt = foto.name;
    fotosgaleria.appendChild(img);
});





// const users = [
//     {name: 'Geovane', email: 'geosoares121994@gmail.com', src: './assets/img/Geovane-Soares.webp', funcao:'Capoteiro'},
//     {name: 'Adriano', email: 'adrianomota@gmail.com', src: './assets/img/Adriano-Mota.webp', funcao:'Motorista'},
//     {name: 'Paulo', email: 'paulo@gmail.com', src: './assets/img/Paulo-Santos.webp', funcao:'Capoteiro'},
//     {name: 'Henrique', email: 'henrique@gmail.com', src: './assets/img/Carlos-Henrique.webp', funcao:'Capoteiro'},
//     {name: 'Beto Eloi', email: 'betoeloi@gmail.com', src: './assets/img/Beto-Eloi.webp', funcao:'Dono'},
//     {name: 'Victor Eloi', email: 'victoreloi@gmail.com', src: './assets/img/Victor-Eloi.webp', funcao:'Gerente'},
//     {name: 'David Fernando', email: 'davidfernando@gmail.com', src: './assets/img/David-Fernando.webp', funcao:'Ajudante'},
//     {name: 'José Roberto', email: 'jose.roberto@gmail.com', src: './assets/img/José-Roberto.webp', funcao:'Ajudante'},
//     {name: 'José Ricardo', email: 'jose.ricardo@gmail.com', src: './assets/img/José-Ricardo.webp', funcao:'Marceneiro'}

// ];



// const equipeContainer = document.querySelector('.membros-equipe');

// users.forEach(user => {
//     const memberDiv = document.createElement('div');
//     memberDiv.classList.add('membro');
//    memberDiv.innerHTML = `
//        <img src="${user.src}" alt="${user.name}" />
//        <h2>${user.name}</h2>
//        <p>${user.funcao}</p>
//    `;


//    equipeContainer.appendChild(memberDiv);
   
//    name.innerHTML = user.name;
//    funcao.innerHTML = user.funcao;
// });