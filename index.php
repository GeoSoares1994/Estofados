

<?php

$anoatual = date('Y');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/img/logo-ico.ico" type="image/x-icon" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>Beto Estofados Mcz</title>
</head>

<body>
  <div class="mascara" aria-hidden="true"></div>

  <main>
    <nav class="nav">
      <img class="logo" src="./assets/img/logo.PNG" alt="Logo Beto Estofados" />
      <button class="menu-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">☰</button>
      <div id="main-nav" class="cabeçalho">
        <a href="#sobre">Sobre</a>
        <a href="#serviços">Serviços</a>
        <a href="#galeria">Galeria</a>
        <a href="#videos">Videos</a>
        <a href="#contato">Contato</a>
        <a href="registro.php">Registro</a>
      </div>
    </nav>


    <div class="aviso">
      <h1>💡 Aviso Importante!</h1>
      <p>

        Este site é apenas uma demonstração criada para apresentar meu trabalho como desenvolvedor Front-end.
        Atualmente, não estamos oferecendo serviços reais nesta página, mas você pode conhecer meu trabalho e entrar em
        contato para
        projetos, parcerias ou desenvolvimento de sites personalizados.<br>

        📩 Entre em contato: LinkedIn: <a target="_blank" href="https://www.linkedin.com/in/geo-soares/">Geovane
          Soares</a></p>
      📩 Entre em contato: GitHub: <a target="_blank" href="https://github.com/GeoSoares1994">Geovane Soares</a></p>
      <button class="button-aviso">Fechar</button>
    </div>



    <section class="container2 fade-up">
      <div class="textos zoom-in">
        <h1>Seja Bem-Vindo(a) A Beto Estofados Mcz</h1>
        <h2>Líder em Reforma e Projeto de Fabricação de sofá</h2>
        <p>
          Transformando estofados há mais de 20 anos, somos líder de reformas e construção de sonhos
          por toda Maceió. Profissionalismo e atenção quase obsessiva aos detalhes. Deixe-nos transformar
          sua casa em um espaço confortável e aconchegante.
        </p>
      </div>

      <div class="button-orçamento-div">
        <button onclick="solicitarOrcamento()" class="button-orçamento">Solicite um Orçamento</button>
      </div>
    </section>

    <section id="sobre" class="container3 fade-up">
      <div class="textos">
        <h1>Por Que Escolher A Beto Estofados?</h1>
        <p>
          A <strong>Beto Estofados</strong> nasceu com o propósito de transformar ideias em soluções criativas
          e funcionais. Desde o início, buscamos unir qualidade, inovação e dedicação em cada projeto,
          sempre colocando nossos clientes no centro de tudo o que fazemos.
        </p>
      </div>
    </section>

    <section class="container4 fade-up">
      <div class="textos zoom-in">
        <h1>Projetos Personalizados</h1>
        <h2>Feito Sob Medida Para Você</h2>
        <p>
          Nossos projetos são feitos sob medida para atender às suas necessidades e preferências.
          Trabalhamos com uma variedade de estilos, tecidos e acabamentos para garantir que cada
          peça seja única e reflita sua personalidade.
        </p>
        <img src="./assets/img/fabricação-sob-medida.png" alt="Projeto personalizado" />
      </div>

      <div class="imagem">
        <h1>Imagem de Projetos Personalizados</h1>
        <p>Veja alguns exemplos de nossos projetos personalizados.</p>
        <img src="./assets/img/personalizado.png" alt="Exemplos de projetos" />
      </div>
    </section>

    <section id="serviços" class="container5 fade-up">
      <h1>Como Podemos Ajudar?</h1>

      <div class="imagens-serviços">
        <div class="serviço1 zoom-in">
          <h2>Reforma de Estofados</h2>
          <p>Renove seus móveis antigos com nossa reforma de estofados. Dê uma nova vida ao seu sofá, poltrona ou
            cadeira com tecidos modernos e confortáveis.</p>
          <img src="./assets/img/sofareformado.png" alt="Reforma de estofados" />
        </div>

        <div class="serviço1 zoom-in">
          <h2>Modificação de Estofados</h2>
          <p>Renove seus móveis com nossa modificação de estofados. Dê uma nova vida ao seu sofá, poltrona ou cadeira
            com tecidos modernos e confortáveis.</p>
          <img src="./assets/img/modificado.png" alt="Modificação de estofados" />
        </div>

        <div class="serviço1 zoom-in">
          <h2>Fabricação do seu Estofado</h2>
          <p>Fabrique seus móveis de acordo com suas necessidades. Deixe seu ambiente renovado com tecidos modernos e
            confortáveis.</p>
          <img src="./assets/img/Captura de tela 2025-10-27 205833.png" alt="Fabricação de estofado" />
        </div>
      </div>
    </section>

    <section id="videos" id="serviços" class="container6-videos fade-up">
      <h1>Alguns de Nossos Trabalhos</h1>

      <div class="content-video">
        <div class="video1 video-item">
          <video onclick="ControlarVideo()" id="video1" autoplay muted loop playsinline preload="metadata">
            <source src="./assets/video/video1.mp4" type="video/mp4" />
            Seu navegador não suporta o elemento de vídeo.
          </video>
        </div>

        <div class="video1 video-item">
          <video onclick="ControlarVideo()" id="video2" autoplay muted loop playsinline preload="metadata">
            <source src="./assets/video/video2.mp4" type="video/mp4" />
            Seu navegador não suporta o elemento de vídeo.
          </video>
        </div>

        <div class="video1 video-item">
          <video onclick="ControlarVideo()" id="video3" autoplay muted loop playsinline preload="metadata">
            <source src="./assets/video/video3.mp4" type="video/mp4" />
            Seu navegador não suporta o elemento de vídeo.
          </video>
        </div>
      </div>


    </section>

    <div id="galeria" class="galeria fade-up">
      <h1>Galeria de Fotos</h1>

      <div class="fotos-galeria">
        <ul class="fotosgaleria">


        </ul>
      </div>
    </div>

    <section class="container8 fade-up">
      <div class="preços-iniciais">
        <div class="preços-iniciais-textos">
          <h1>Entre em contato</h1>
          <p>Clique no botão abaixo para ter uma ideia aproximada de quanto seu projeto pode custar.
            Nossa empresa de reformas residenciais fornece orçamentos precisos e contínuos durante todo o processo.</p>
          <button onclick="solicitarOrcamento()" class="button-orçamento">Solicite um Orçamento</button>
        </div>

        <div class="preços-iniciais-imagem"><img src="./assets/img/sofá-contato.png" alt="Preços iniciais" /></div>
      </div>
    </section>

    <!-- <section class="equipe">
      <h1 id="equipe">Nossa Equipe</h1>
      <div class="membros-equipe fade-up">
        <div class="membro zoom-in">
          <img src="" alt="" />
          <h2 class="name"></h2>
          <p class="funcao"></p>
        </div>
        <form class="form-membro">

          <h2 class="h2-membro">Adicione um novo membro</h2>

          <input type="text" id="nameInput" placeholder="Nome do membro">
          <input type="text" id="funcaoInput" placeholder="Função do membro">
         <select >
            <option value="" disabled selected>Selecione o sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>

          <button type="button" class="bnt-add">Adicionar Membro</button>
          <p class="t-mensagem"></p>
        </form>
      </div>

    </section> -->


  </main>

  <!-- Font Awesome (apenas para ícones se desejar) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="./equipe.js"></script>
</body>

</html>
<?php
require 'footer.php';

?>