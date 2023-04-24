<!DOCTYPE html>
<html lang="pt-br">
  <?php include './include/head.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icomoon/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../bruno/js/javascript.js">
    <link rel="stylesheet" type="text/css" href="./css/missaovisao.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style> 
  .sessao-2 p {
   
    font-size: 14px;
    text-align: justify;
    margin-top: 30px;
}
</style>

</head>
<body>
      <!-- MENU -->
            
    <?php
    include './include/nav-menu.php'
    ?>

    <!-- Sessão 2-->
<div class="sessao-2 container pt-5">
    <div class="row">
      <div class="col-lg-6 sm-12">
        <h2>Conheça</h2>
          <h3>A Nanpe.</h3>
          <p class="texto-quem-somos-overflow">Nanpe Engenharia é uma empresa especializada em soluções para sistemas elétricos, hidráulicos, incêndio e Infraestrutura para empreendimentos comerciais, residenciais, institucionais, hotéis, shoppings centers e obras públicas. Aproveitando a experiência de seus fundadores que passaram pelos escritórios mais bem-conceituados do ramo que juntos somam mais de 3.000.000 de metros quadrados em projetos.
          <br><br>
Sempre agindo com transparência e seriedade a empresa conta com o que há de mais inovador no mercado partindo de equipamentos, softwares, conceitos para soluções de projetos e agilidade em comunicação.
  <br><br>
Localizado na Vila Mariana - SP, mas com projetos espalhados por todo Brasil.

       


      </div>
      <div class="col-lg-6 sm-12">
        <img src="./imagens/15anos.png" class="img-fluid img-sessao-2 d-flex align-items-center px-5 pt-5"> </div>
      </div>
    </div>
  </div>

    <div class="missao-visao-valores container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <img src="./svg/icone-pico.svg" class="icones-quem-somos">
                <h3 class="missao-title">Missão</h3>
                <p class="missao-paragrafo">Oferecer as <b>soluções viáveis </b>para cada cliente satisfazendo assim suas expectativas, priorizando sempre a<b> ética, técnica e eficácia, </b>proporcionando com isso qualidade, viabilidade e economia em cada trabalho concluído, contribuindo significativamente para o sucesso de cada empreendimento e a sociedade como um todo.</p>
            </div>

            <div class="col-lg-4">
                <img src="./svg/icone-binoculos.svg" class="icones-quem-somos2"><br>
                <h3 class="missao-title2">Visão</h3>
                <p class="missao-paragrafo2">Ser <b>referência</b> no segmento de projeto de instalações prediais no mercado brasileiro, por meio de soluções técnicas completas, fortalecendo parcerias, colaboradores e o ganho econômico e social.</p>
            </div>

            <div class="col-lg-4">
                <img src="./svg/icone-coracao.svg" class="icones-quem-somos">
                <h3 class="missao-title">Valores</h3>
                <p class="missao-paragrafo">Integridade, Valorização Humana, Superação de Resultados, Melhoria contínua, Inovação, Sustentabilidade</p>
            </div>
        </div>
</div>

</div>  
      <?php
             include './include/pre-footer.php'
      ?>


  <footer>
        <?php 
            include './include/footer.php'
        ?>
  </footer>

</body>
</html>