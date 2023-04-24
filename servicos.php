<!DOCTYPE html>
<html lang="pt-br">
<?php include './include/head.php' ?>
<head>
<title>Serviços</title>
     <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <style>
       .cardFlip {
      width: 100%;
      height: 200px;
      perspective: 1000px;
      margin-bottom: 26px;
      text-align: center;
      
    }

    .card-title {
      margin-top: 10%;
      margin-bottom: 0px;
      text-align: center;
      margin:auto;
    }
    .flip {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      text-align: center;
      
    }

    .cardFlip:hover .flip {
      transform: rotateY(180deg);
    }

    .front:nth-child(odd) {
      background: white;
    }

    .front,
    .back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      text-align: center;
    }

    .front {}

    .back {
      transform: rotateY(180deg);
      background: orangered;
      text-align: center;
    }

    .card.text-white.mb-3 {
    background: orangered;
      margin: auto;
  }


      .sessao-1-servicos,
      .sessao-2-servicos,
      .sessao-3-servicos {
        background: #ededed;
        position: relative;
        height: auto;
        padding: 4% 20%;
      }

      .sessao-1-servicos span {
        text-align: center;
        color: orangered;
        font-size: 30px;
        font-weight: 800;
        line-height: 1;
       
      }


      .sessao-1-servicos h3 {
        color: orangered;
        font-size: 50px;
        font-weight: 800;
        text-align: center;
        margin-bottom: 30px;
      
        line-height: 1;
      }

      .sessao-3-servicos {
        position: relative;
        text-align: center;
      }


      .icones-servicos {
        max-width: 30%;
        margin: auto;
        display: block;
      }

      .card {
      border: 0px solid transparent;
      }


      .botao-servicos {
        color: orangered;
        padding: 5px;
        background-color: white;
        border-radius: 50px;
        font-size: 12px;
      }

      a{
        text-decoration: none;
      }

      a:hover {
    color: #f9fafb;
    text-decoration: none;
}

.h2, h2 {
    font-size: 22px;
}
      /*Portfolio*/

      @media screen and (max-width: 475px) {
        .pre-footer {
          height: 250px;
          margin-top: 200px;
        }

        body {
          background: #ededed;
        }

        .sessao-1-servicos h3:last-child {
          line-height: 1;
          top: 150px;
        }

      }


      @media screen and (max-width: 750px) {
        .linha {
          margin-top: 3em;
        }

        .sessao-1-servicos {
          height: auto;
        }

      }

      .icones {
        font-size: 50px;
        color: orangered;
        margin-top: 10%;
      }

      .icones2 {
        font-size: 50px;
        color: orangered;
        margin-top: 10%;
        padding-bottom: 22px;
      }

      .front h2 {
        color: black;
        font-family: 'Poppins';
        font-weight: 900;
      }

      .botao-servicos {
        color: white;
        background: black;
      }

      .card-text {
        font-size: 12px;
      }

      .front.h2:last-child {
        padding-top: 30px;
      }
    </style>
  </head>

<body>

  <!-- MENU -->


  <?php
  include './include/nav-menu.php'
  ?>

  <!-- Sessão 1-->

  <div class="sessao-1-servicos container-fluid text-center">
    <div class="row text-center">
      <div class="col-lg-12 text-center">
        <span>Serviços</span>
        <h3>prestados</h3>

        <!--nova coluna dentro de sessao-1-servicos-->

        <div class="linha container-flex text-center">
          <div class="row text-center">
          <div class="col-lg-4">
           <div class="cardFlip">
             <a href="./servico-hidraulica.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-faucet icones"></i>
      <h2>Projeto de<br>instalações Hidráulicas
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Hidráulica</h5>
            <p class="card-text">As instalações prediais hidráulico-sanitárias têm como finalidade fazer a distribuição de água, em quantidade suficiente e sob pressão adequada a todos as peças de utilização e aparelhos sanitários da edificação, promover a coleta e o afastamento...</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
    </a>
    </div>

    <div class="col-lg-4">
           <div class="cardFlip">
           <a href="./servico-eletrica.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-bolt icones"></i>
      <h2>Projeto de<br> instalações Elétricas
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Elétrica</h5>
            <p class="card-text">Um Projeto Elétrico tem como objetivo previsão escrita da instalação, com todos os seus detalhes, localização dos pontos de utilização da energia elétrica, comandos, trajeto dos condutores, divisão em circuitos, seção dos condutores, dispositivos...</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
  </a>
    </div>

    <div class="col-lg-4">
           <div class="cardFlip">
           <a href="./servico-gas.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-burn icones"></i>
      <h2>Projeto de<br> instalações de Gás
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Projeto de Gás</h5>
            <p class="card-text">As instalações prediais para suprimento de gás combustível em residências têm por objetivo a alimentação de fogões domésticos e aquecedores de água e, mais raramente, algum outro equipamento que porventura o necessite. Existem duas formas do gás...</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
  </a>
    </div>

    <div class="col-lg-4">
           <div class="cardFlip">
           <a href="./servico-incendio.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-fire-extinguisher icones"></i>
      <h2>Projeto de instalações<br> de Combate a Incêndio
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Projeto de Combate a Incêndio</h5>
            <p class="card-text">O Projeto de Prevenção e Combate a Incêndio e Pânico (PPCI) é o projeto que visa evitar que um princípio de incêndio se propague por toda a edificação.

Este tipo de projeto consiste no planejamento...</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
  </a>
    </div>

    <div class="col-lg-4">
           <div class="cardFlip">
           <a href="./servico-infraestrutura.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-water icones"></i>
      <h2>Projeto de instalações<br> de Drenagem Urbana
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Projeto de Drenagem Urbana</h5>
            <p class="card-text">O sistema de drenagem e manejo de águas pluviais urbanas se apresenta como o conjunto de obras, equipamentos e serviços projetados para receber o escoamento superficial das águas de chuva que caem nas....</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
  </a>
    </div>
    


    <div class="col-lg-4">
           <div class="cardFlip">
           <a href="./servico-climatizacao.php">
    <div class="flip">
      <div class="front">
      <i class="fas fa-fan icones2"></i>
      <h2>Projeto de instalações<br> de Climatização
</h2>
      </div>
      <div class="back">
        <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Projeto de Climatização</h5>
            <p class="card-text">No plano da Engenharia Mecânica e Climatização, a nossa empresa elabora estudos, projetos e consultoria no âmbito das instalações e equipamentos mecânicos de produção, transporte e distribuição de energia térmica em geral, energias renováveis...</p>
           
          </div>
        </div>
      </div>  
    </div>
  </div>
  </a>
    </div>
    

   
   </div>
    </div>




    </div>
        </div> <!-- Fim da linha row-->
      </div> <!-- Fim da linha Col-->
    </div> <!-- Fim da div sessao-1-servicos-->
       


  <?php
  include './include/pre-footer.php'
  ?>

  <footer>
    <?php
    include './include/footer.php'
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>
    // portfolio
    $('.gallery ul li a').click(function() {
      var itemID = $(this).attr('href');
      $('.gallery ul').addClass('item_open');
      $(itemID).addClass('item_open');
      return false;
    });
    $('.close').click(function() {
      $('.port, .gallery ul').removeClass('item_open');
      return false;
    });

    $(".gallery ul li a").click(function() {
      $('html, body').animate({
        scrollTop: parseInt($("#top").offset().top)
      }, 400);
    });
  </script>
</body>

</html>