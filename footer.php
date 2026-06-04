
<?php

$anoatual = date('Y');

?>

<footer class="footer">
      <div class="footer-container">
        <div class="footer-about">
          <img src="./assets/img/logo.PNG" alt="Logo Beto Estofados" />
          <p>
            Transformando estofados há mais de 20 anos, a <strong>Beto Estofados</strong> é líder em reformas e na
            construção de sonhos em Maceió. Nosso diferencial está no profissionalismo e na atenção aos detalhes.
          </p>
        </div>

        <div id="contato" class="footer-contact">
          <h3>Contato</h3>
          <p><strong>📍 Endereço:</strong> Rua Oscalina Maria Silva, 85 Vergel do Lago - Maceió/AL</p>
          <p><strong>📞 Whatsapp:</strong> (82) 99981-8788</p>
          <p><strong>✉️ Email:</strong> contato@betoestofados.com</p>
        </div>

        <div class="footer-social">
          <h3>Fale conosco</h3>
          <div class="social-icons">
            <a
              href="https://api.whatsapp.com/send?phone=5582999818788&text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento%20com%20voc%C3%AAs."><img
                src="./assets/img/whatsapp.png" alt="Whatsapp" /></a>
            <a href="https://www.instagram.com/betoestofadosmcz/"><img src="assets/img/Instagram.png"
                alt="Instagram" /></a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2000 - <?php echo $anoatual;?> Beto Estofados - Todos os direitos reservados. </p> <p>Hoje: <?php echo $hoje;?></p> <p>Hora: <?php echo $hora;?></p>
      </div>
    </footer>