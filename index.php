<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Home</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <style>
  
    button.btn.btn-dark.btn-sm {
      margin-left: 50%;
      transform: translate(-50%, 0);
      padding: 10px 50px;
      margin-top: 10px;
    }

    .portfolio-rapido {
      padding-top: 60px;
      max-width: 95%;
      margin: auto;
    }

    .logo-projetos {
      max-width: 50%;
      margin: auto;
      text-align: center;
      margin-top: 40%;
      margin-left: 50%;
      transform: translate(-50%, -40%);

    }
    
    /* Slider rápido*/
    .portfolio-rapido p {
  opacity: 1;
  position: absolute;
    top: 0px;
    left: 0px;
    background-color: orangered;
    color: white;
    padding: 5px;
}



  .portfolio-rapido .carousel-control-prev-icon, .portfolio-rapido .carousel-control-next-icon  {
    position: relative;
    top:0px;
    right:350px;
    opacity: 1.5;
   padding: 20px;
     background-color: orangered;
  }

     .carousel-control-next, .carousel-control-prev {
       opacity: 1 !important;
     }

     @media screen and (max-width: 1300px) { 
      .portfolio-rapido .carousel-control-prev-icon, .portfolio-rapido .carousel-control-next-icon  {
    position: relative;
    top:-3px;
    right:-10px;
    opacity: 1.5;
   padding: 20px;
     background-color: orangered;

     .carousel-control-next, .carousel-control-prev {
       opacity: 1 !important;
     }
        }


        @media screen and (max-width: 475px) {
          .carousel .slide img{
              max-width: auto !important;
              max-height: auto !important;
          }

          .carousel-item img {
            max-width: 100% !important;
            max-height: auto !important;
          }

          button.btn.btn-dark.btn-sm {
          margin-bottom: 60px;
}
        }

     
  </style>


</head>
<?php include './include/head.php' ?>

<body>
  <!-- MENU -->
  <?php include './include/nav-menu.php' ?>
  <!--SESSÃO 1-->
  <?php include './include/slider.php' ?>
  <!-- Sessão 2-->
  <div class="sessao-2 container">
    <div class="row">
      <div class="col-lg-6 sm-12">
        <h2>Conheça</h2>
        <h3>A Nanpe</h3>
        <p>A Nanpe Engenharia é uma empresa especializada em soluções para sistemas elétricos,
          hidráulicos, incêndio e Infraestrutura em empreendimentos comerciais, residenciais,
          institucionais hotéis, shopping centers e obras públicas. Aproveitando a experiência de
          seus fundadores que passaram pelos escritórios mais bem-conceituados do ramo que
          juntos somam mais de 3.000.000 metros quadrados de projetos aprovados.</p>
        <a class="botao-line" href="./quem-somos.php">saiba mais</a>
      </div>
<div class="col-lg-6 sm-12">
        <img src="./imagens/15anos.png" class="img-fluid img-sessao-2 d-flex align-items-center px-5 pt-5 animate__animated animate__slideInRight" loading="lazy">
      </div>
    </div>
  </div>


  <div class="contador container-fluid">
  <div class="row">
 
      <div class="counter-box col-lg-3">  <i class="contador-icon fas fa-hard-hat"></i> <span class="counter">612</span>
          <p>Obras concluídas</p>
      </div>

      <div class="counter-box col-lg-3">  <i class="contador-icon fas fa-user-friends"></i> <span class="counter">62</span>
          <p>Clientes Atendidos</p>
      </div>

      <div class="counter-box col-lg-3">  <i class="contador-icon fas fa-globe-europe"></i><span class="counter">3000000</span>
        <p> m2 de área construída </p>
      </div>

      <div class="counter-box col-lg-3">  <i class="contador-icon fas fa-heart"></i> <span class="counter">17</span>
          <p>Anos de atuação</p>
      </div>
  
  </div>

  </div>
</div>
  </div>




  <!-- Sessão de projetos -->
  <div class="container-fluid sessao-3-home">
    <div class="row">
      <div class="col-lg-4 margin-alguns">
        <img src="./svg/logo-projetos.svg" class="logo-projetos"></img>
        <h2 class="h2-sessao-3-home text-center">Alguns de</h2>
        <h3 class="h3-sessao-3-home text-center">nossos projetos</h3>
        <button class="btn btn-dark btn-sm">ver mais</button>
      </div>

      <div class="col-lg-8">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="portfolio-rapido">
          <div class="carousel-inner animated__animated animate__flipInY">
            <div class="carousel-item carouselIndex active" data-bs-interval="10000">
            <img src="./imagens/home/thumb/1.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Versa Brooklyn</p>
            </div>
            <div class="carousel-item carouselIndex" data-bs-interval="2000">
              <img src="./imagens/home/thumb/2.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Versa Brooklyn</p>
            </div>
            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/3.jpg" class="d-block w-70" alt="...">
              <p class="text-center">White Rebouças</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/4.jpg" class="d-block w-70" alt="...">
              <p class="text-center">White Rebouças</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/5.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Hotel Ibís Budget- Suzano</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/6.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Edifício São Judas</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/7.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Edifício São Judas </p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/19.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Edifício Magnólia</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/8.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Piscina Magnólia</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/9.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Terraço Lila - Magnólia</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/10.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Residencial Olympo</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/11.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Residencial Olympo</p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/12.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Câmara municipal de Poá </p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/13.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Câmara municipal de Poá </p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/14.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Câmara municipal de Poá </p>
            </div>


            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/15.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Cozinha - Aeroporto de Salvador</p>
            </div>


            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/16.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Edifício 360 <br>Degree - São Paulo</p>
            </div>


            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/17.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Walmart Assís </p>
            </div>

            <div class="carousel-item carouselIndex">
              <img src="./imagens/home/thumb/18.jpg" class="d-block w-70" alt="...">
              <p class="text-center">Pizza Hut </p>
            </div>
            

           

           



          </div>
          <button class="carousel-control-prev servicos-btn-carousel" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon servicos-btn-carousel" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next servicos-btn-carousel" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon servicos-btn-carouseld" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
</div>
    </div>
  </div>


  <!--Scripts -->
  <script>
    jQuery(document).ready(function($) {

      $('#checkbox').change(function() {
        setInterval(function() {
          moveRight();
        }, 3000);
      });

      var slideCount = $('#slider ul li').length;
      var slideWidth = $('#slider ul li').width();
      var slideHeight = $('#slider ul li').height();
      var sliderUlWidth = slideCount * slideWidth;

      $('#slider').css({
        width: slideWidth,
        height: slideHeight
      });

      $('#slider ul').css({
        width: sliderUlWidth,
        marginLeft: -slideWidth
      });

      $('#slider ul li:last-child').prependTo('#slider ul');

      function moveLeft() {
        $('#slider ul').animate({
          left: +slideWidth
        }, 200, function() {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
        });
      };

      function moveRight() {
        $('#slider ul').animate({
          left: -slideWidth
        }, 200, function() {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
        });
      };

      $('a.control_prev').click(function() {
        moveLeft();
      });

      $('a.control_next').click(function() {
        moveRight();
      });

    });
  </script>

  <!-- Sessão de pré footer -->
  <?php include './include/pre-footer.php' ?>
  <!-- Sessão footer -->
  <?php include './include/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
    </script>

  </body>

</html>