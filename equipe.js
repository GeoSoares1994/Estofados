
let name = document.querySelector('.name')
let funcao = document.querySelector('.funcao')
let fotosgaleria = document.querySelector('.fotosgaleria')
const bntadd = document.querySelector('.bnt-add');
let mensagem = document.querySelector(".t-mensagem")


// bntadd.addEventListener('click', () => {
//     const novoMembro = document.createElement('div');
//     novoMembro.classList.add('membro');

//     const nameInput = document.getElementById('nameInput');
//     const funcaoInput = document.getElementById('funcaoInput');

//     if (nameInput.value.trim() === '' || funcaoInput.value.trim() === '') {
//         mensagem.innerHTML = 'Por favor, preencha todos os campos antes de adicionar um novo membro.';
//         mensagem.style.color = 'red';
//         setTimeout(() => {
//             mensagem.innerHTML = '';
//         }, 7000);
//         return;
//     }


   

//     novoMembro.innerHTML = `
        
//         <h2>${nameInput.value || 'Sem nome'}</h2>
//         <p>${funcaoInput.value || 'Função não adicionada'}</p>
//     `;

//     mensagem.innerHTML = 'Membro adicionado com sucesso!';
//     mensagem.style.color = 'green';
//     setTimeout(() => {
//         mensagem.innerHTML = '';
//     }, 7000);
//     equipeContainer.appendChild(novoMembro);

//     nameInput.value = '';
//     funcaoInput.value = '';
// });

const fotos = [
    { src: './assets/img/1.png', name: 'foto1' },
    { src: './assets/img/2.png', name: 'foto2' },
    { src: './assets/img/3.png', name: 'foto3' },
    { src: './assets/img/4.png', name: 'foto4' },
    { src: './assets/img/5.png', name: 'foto5' }
]

fotos.forEach(foto => {
    const img = document.createElement('img');
    img.src = foto.src;
    img.alt = foto.name;
    fotosgaleria.appendChild(img);
});



// const users = [
//     { name: 'Geovane', email: 'geosoares121994@gmail.com', src: './assets/img/equipe/Geovane-Soares.webp', funcao: 'Capoteiro' }
//     { name: 'Adriano', email: 'adrianomota@gmail.com', src: './assets/img/equipe/Adriano-Mota.webp', funcao: 'Motorista' },
//     { name: 'Paulo', email: 'paulo@gmail.com', src: './assets/img/equipe/Paulo-Santos.webp', funcao: 'Capoteiro' },
//     { name: 'Henrique', email: 'henrique@gmail.com', src: './assets/img/equipe/Carlos-Henrique.webp', funcao: 'Capoteiro' },
//     { name: 'Beto Eloi', email: 'betoeloi@gmail.com', src: './assets/img/equipe/Beto-Eloi.webp', funcao: 'Dono' },
//     { name: 'Victor Eloi', email: 'victoreloi@gmail.com', src: './assets/img/equipe/Victor-Eloi.webp', funcao: 'Gerente' },
//     { name: 'David Fernando', email: 'davidfernando@gmail.com', src: './assets/img/equipe/David-Fernando.webp', funcao: 'Ajudante' },
//     { name: 'José Roberto', email: 'jose.roberto@gmail.com', src: './assets/img/equipe/José-Roberto.webp', funcao: 'Ajudante' },
//     { name: 'José Ricardo', email: 'jose.ricardo@gmail.com', src: './assets/img/equipe/José-Ricardo.webp', funcao: 'Marceneiro' },

// ];



const equipeContainer = document.querySelector('.membros-equipe');

users.forEach(user => {
    const memberDiv = document.createElement('div');
    memberDiv.classList.add('membro');
    memberDiv.innerHTML = `
       <img src="${user.src}" alt="${user.name}" />
       <h2>${user.name}</h2>
       <p>${user.funcao}</p>
   `;


    equipeContainer.appendChild(memberDiv);

    name.innerHTML = user.name;
    funcao.innerHTML = user.funcao;
});