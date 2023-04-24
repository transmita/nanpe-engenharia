<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="./imagens/fav.ico" />
<title>Portfólio</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include './include/head.php' ?>
  <style>
    .imagens-do-portfolio {
      max-width: 100%;
      margin: auto;
      height: 70vh;
    }


    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
      font-family: Arial;
    }

    img {
      max-width: 100%;
    }

    p {
      text-align: center;
      line-height: 1;
    }

    .carousel-inner {
      position: inherit;
      width: auto;
      height: auto !important;
      margin-top: 20px;
      overflow: hidden;
    }
    .imagens-do-portfolio {
    max-width:  auto;
    min-height: auto;
    }

    /* Center website */
    .main {
      max-width: 1200px;
      margin: auto;
      margin-top: 40px;
      margin-bottom: 40px;
    }


    h4 {
      text-align: center;
    }

    div#myBtnContainer {
      margin-bottom: 30px;
      display: none;
    }

    h4 {
      font-size: calc(1.275rem + .3vw);
      font-weight: 800;
      color: orangered;
      padding: 10px 0px;
    }


    .btn.active {
      background-color: #000000 !important;
    }

    button.btn.btn-primary {
      background: orangered !important;
      color: white;
      transition: .5s;
    }

    .carousel-item {
      height: auto !important;
    }

    button.btn.btn-primary:hover {
      background-color: #d33d06 !important;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      display: none;
      /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: black;
      padding: 0px 0px 10px;
      margin-bottom: 30px;
      border-radius: 10px;
      text-align: center;
    }

    .content:hover {
      box-shadow: 0px 0px 10px #00000020;
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #666;
      color: white;
    }

    button.btn-close {
      background: none;
      color: white;
      font-weight: bold;
    }

    .modal-dialog {
      margin-top: 7%;
    }

    .modal-dialog {
      height: 75vh;
    }

    .content {
      cursor: pointer;
    }

    button.btn.btnVerFoto {
      background: red;
      color: white;

      top: 50%;
      left: 22%;
    }

    .modal-header {
      border-bottom: none;
      background-color: orangered;
      color: white;
    }

    .modal-content {
      background-color: transparent;
      border: none;
      height: 100% !important;
    }

    .texto-do-card {
      color: white;
      font-family: 'Poppins';
      font-weight: normal;
      font-size: 15px;
      padding-top: 20px;
    }

    .texto-do-card:hover, .texto-do-card-pizzaria:hover {
      color: orangered;
    }

    .texto-do-card-pizzaria {
      color: white;
      font-family: 'Poppins';
      font-weight: normal;
      font-size: 13px;
      padding-top: 20px;
    }
    

    .modal.show .modal-dialog{
      max-width: 90%;
      max-height: 80vh;
    }

    .modal-header{
      margin:auto;
    }

    @media screen and (max-width: 475px) {
      .imagens-do-portfolio {
    max-width: 100%;
    margin: auto;
    height: auto !important;
}
    }

  </style>
</head>

<body>
  <?php include './include/nav-menu.php' ?>

  <!-- MAIN (Center website) -->
  <div class="container-fluid">
  <div class="main">


    <!--Para adicionar um item a filtragem, liste ele no javascript e depois adicione column + nome da filtragem-->


    <!-- Portfolio Gallery Grid -->
    <div class="row">

    <!-- Item portfolio-->
    <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#whitereboucas">
            <img src="./imagens/portfolio/miniaturas/32.jpg" style="width:100%">
            <h4 class="texto-do-card">White Rebouças</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="whitereboucas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">White Rebouças</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselwhitereboucas" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\white-reboucas-1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\white-reboucas-2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselwhitereboucas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselwhitereboucas" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

        <!-- Item portfolio-->
   <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#versabrooklyn">
            <img src="./imagens/portfolio/miniaturas/31.jpg" style="width:100%">
            <h4 class="texto-do-card">Versa Brooklyn</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="versabrooklyn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Versa Brooklyn</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselversabrooklyn" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\versa-brooklyn.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\versa-brooklyn-2.jpg" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\versa-brooklyn-1.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselversabrooklyn" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselversabrooklyn" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

        <!-- Item portfolio-->
        <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#ibisbudget">
            <img src="./imagens/portfolio/miniaturas/29.jpg" style="width:100%">
            <h4 class="texto-do-card">Ibis Budget Suzano</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="ibisbudget" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ibis Budget Suzano</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselibisbudget" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\ibisburgetsuzano.jpg" alt="...">
                        </div>
                      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselibisbudget" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselibisbudget" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#edsaojudas">
            <img src="./imagens/portfolio/miniaturas/28.jpg" style="width:100%">
            <h4 class="texto-do-card">Ed. São Judas</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="edsaojudas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ed. São Judas</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouseledsaojudas" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificio-saojudas1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificio-saojudas2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouseledsaojudas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouseledsaojudas" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


       <!-- Item portfolio-->
       <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#magnoliacostaverde">
            <img src="./imagens/portfolio/miniaturas/3.png" style="width:100%">
            <h4 class="texto-do-card">Ed. Magnólia Costa Verde</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="magnoliacostaverde" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ed. Magnólia Costa Verde</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselmagnoliacostaverde" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencial\edificiomagnoliacostaverdecaragua\edificiomagnoliacostaverdecaragua1.jpeg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencial\edificiomagnoliacostaverdecaragua\edificiomagnoliacostaverdecaragua2.jpeg" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\terraco-magnolia.jpg" alt="...">
                        </div>
      
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselmagnoliacostaverde" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselmagnoliacostaverde" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


          <!-- Item portfolio-->
          <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#residencialolympo">
            <img src="./imagens/portfolio/miniaturas/30.jpg" style="width:100%">
            <h4 class="texto-do-card">Residencial Olympo</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="residencialolympo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Residencial Olympo</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselresidencialolympo" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\residencialolympo1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\residencialolympo (1).jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselresidencialolympo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselresidencialolympo" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

 <!-- Item portfolio-->
 <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#camarapoa">
            <img src="./imagens/portfolio/miniaturas/8.png" style="width:100%">
            <h4 class="texto-do-card">Câmara Municipal de Poá</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="camarapoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Câmara Municipal de Poá</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselcamarapoa" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\camaramunicipaldepoa\camaramunicipaldepoa1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\camaramunicipaldepoa\camaramunicipaldepoa2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\camaramunicipaldepoa\camaramunicipaldepoa3.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselcamarapoa" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselcamarapoa" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#aeroportosalvador">
            <img src="./imagens/portfolio/miniaturas/5.png" style="width:100%">
            <h4 class="texto-do-card">Cozinha Aero. Salvador</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="aeroportosalvador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cozinha Aeroporto De Salvador</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselaeroportosalvador" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\CozinhaindustrialdoAeroportoInternacionaldeSalvador\CozinhaindustrialdoAeroportoInternacionaldeSalvador1.jpg" alt="...">
                        </div>
                     
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselaeroportosalvador" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselaeroportosalvador" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


        <!-- Item portfolio-->
        <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#degree">
            <img src="./imagens/portfolio/miniaturas/4.png" style="width:100%">
            <h4 class="texto-do-card">Edifício 360 Degree</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="degree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edifício 360 Degree</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouseldegree" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencial\edificio360degree\edificio360degree1.jpg" alt="...">
                        </div>
                     
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouseldegree" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouseldegree" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- Item portfolio-->
<div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#Walmart-Assis">
            <img src="./imagens/portfolio/miniaturas/23.png" style="width:100%">
            <h4 class="texto-do-card">Walmart Assís</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="Walmart-Assis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Walmart Assís</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselWalmart-Assis" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\supermercados\Walmart-Assis\Walmart-Assis1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\supermercados\Walmart-Assis\Walmart-Assis2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselWalmart-Assis" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselWalmart-Assis" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
 <!-- Item portfolio-->
 <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#pizzahut">
            <img src="./imagens/portfolio/miniaturas/22.png" style="width:100%">
            <h4 class="texto-do-card">Pizza Hut</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="pizzahut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pizza Hut</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselpizzahut" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\pizzahut\pizzahut1.jpg" alt="...">
                        </div>
                       
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselpizzahut" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselpizzahut" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


      <!-- Item portfolio-->
      <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#itaup">
            <img src="./imagens/portfolio/miniaturas/26.png" style="width:100%">
            <h4 class="texto-do-card">Itaú Personalite</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="itaup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banco Itau</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselItau" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\bancos\itau1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./\imagens\portfolio\bancos\itau2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselItau" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselItau" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


   <!-- Item portfolio-->
   <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#bancodobrasil">
            <img src="./imagens/portfolio/miniaturas/27.png" style="width:100%">
            <h4 class="texto-do-card">Banco do Brasil</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="bancodobrasil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banco do Brasil</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselbancodobrasil" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\bancos\bancodobrasil-1.JPG" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./\imagens\portfolio\bancos\bancodobrasil-2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselbancodobrasil" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselbancodobrasil" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#floraparkpaineiras">
            <img src="./imagens/portfolio/miniaturas/2.png" style="width:100%">
            <h4 class="texto-do-card">Res. Flora Park Paineiras</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="floraparkpaineiras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Res. Flora Park Paineiras</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselfloraparkpaineiras" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencial\edificiopaineiras\edificiopaineiras1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencial\edificiopaineiras\edificiopaineiras2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselfloraparkpaineiras" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselfloraparkpaineiras" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#ibisvitoria">
            <img src="./imagens/portfolio/miniaturas/1.png" style="width:100%">
            <h4 class="texto-do-card">Hotel Ibis Vitória</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="ibisvitoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hotel Ibis Vitória</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselibisvitoria" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencialcomcentrocomercial\hotelibisvitoria\hotelibisvitoria1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\edificioresidencialcomcentrocomercial\hotelibisvitoria\hotelibisvitoria2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselibisvitoria" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselibisvitoria" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


       

      

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#ouricuri">
            <img src="./imagens/portfolio/miniaturas/6.png" style="width:100%">
            <h4 class="texto-do-card">Conj. Hab. Ouri Curi - PE</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="ouricuri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conj. Hab. Ouri Curi - PE</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselouricuri" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\conjuntohabitacionalouricuriPE\conjuntohabitacionalouricuriPE.jpg" alt="...">
                        </div>
                        
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselouricuri" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselouricuri" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#conjhabcajamar">
            <img src="./imagens/portfolio/miniaturas/7.png" style="width:100%">
            <h4 class="texto-do-card">Conj. Hab. Cajamar</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="conjhabcajamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conj. Hab. Cajamar</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselconjhabcajamar" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\conjuntohabitacionalcajamar\conjuntohabitacionalcajamar1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\conjuntohabitacionalcajamar\conjuntohabitacionalcajamar2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\conjuntohabitacionalcajamar\conjuntohabitacionalcajamar3.jpg" alt="...">
                        </div>
                        
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselconjhabcajamar" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselconjhabcajamar" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        
         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#decathlonmorumbi">
            <img src="./imagens/portfolio/miniaturas/9.png" style="width:100%">
            <h4 class="texto-do-card">Decathlon Morumbi</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="decathlonmorumbi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Decathlon Morumbi</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouseldecathlonmorumbi" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\lojacomercial\decathlonmorumbi\decathlonmorumbi1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\lojacomercial\decathlonmorumbi\decathlonmorumbi2.jpg" alt="...">
                        </div>
                       
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouseldecathlonmorumbi" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouseldecathlonmorumbi" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#galpoesisidro">
            <img src="./imagens/portfolio/miniaturas/10.png" style="width:100%">
            <h4 class="texto-do-card">Galpão Sidro</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="galpoesisidro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Galpão Sidro</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselgalpoesisidro" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\galpoes\galpoesisidro\galpoesisidro1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\galpoes\galpoesisidro\galpoesisidro2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\galpoes\galpoesisidro\galpoesisidro3.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\galpoes\galpoesisidro\galpoesisidro4.jpg" alt="...">
                        </div>
                        
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselgalpoesisidro" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselgalpoesisidro" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#macdonalds">
            <img src="./imagens/portfolio/miniaturas/11.png" style="width:100%">
            <h4 class="texto-do-card">McDonald's</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="macdonalds" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">McDonald's</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselmacdonalds" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\mcdonalds\mcdonalds1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./\imagens\portfolio\restaurante\mcdonalds\mcdonalds2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselmacdonalds" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselmacdonalds" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#burgerking">
            <img src="./imagens/portfolio/miniaturas/12.png" style="width:100%">
            <h4 class="texto-do-card">Burger King</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="burgerking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Burger King</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselburgerking" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\burgerking\burgerking1.jpg" alt="...">
                        </div>
                       
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\burgerking\burgerking2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselburgerking" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselburgerking" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#monotrilho">
            <img src="./imagens/portfolio/miniaturas/13.png" style="width:100%">
            <h4 class="texto-do-card">Monotrilho Morumbi</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="monotrilho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Monotrilho Morumbi</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselmonotrilho" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\monotrilhomorumbi\MonotrilhoMorumbi1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\monotrilhomorumbi\MonotrilhoMorumbi3.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselmonotrilho" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselmonotrilho" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#MetroSabóia">
            <img src="./imagens/portfolio/miniaturas/14.png" style="width:100%">
            <h4 class="texto-do-card">Metro Sabóia</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="MetroSabóia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Metro Sabóia</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselMetroSabóia" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\MetroSabóia\MetroSabóia1.jpg" alt="...">
                        </div>
                       
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMetroSabóia" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselMetroSabóia" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#Memorial17deJulho">
            <img src="./imagens/portfolio/miniaturas/15.png" style="width:100%">
            <h4 class="texto-do-card">Memorial 17 de Julho</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="Memorial17deJulho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Memorial 17 de Julho</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselMemorial17deJulho" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\Memorial17deJulho\Memorial17deJulho1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\Memorial17deJulho\Memorial17deJulho2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\Memorial17deJulho\Memorial17deJulho3.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\Memorial17deJulho\Memorial17deJulho4.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMemorial17deJulho" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselMemorial17deJulho" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#LargosdoPelourinho">
            <img src="./imagens/portfolio/miniaturas/16.png" style="width:100%">
            <h4 class="texto-do-card">Largos do Pelourinho</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="LargosdoPelourinho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Largos do Pelourinho</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselLargosdoPelourinho" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\LargosdoPelourinho\LargosdoPelourinho1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\LargosdoPelourinho\LargosdoPelourinho2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\LargosdoPelourinho\LargosdoPelourinho3.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\obraspublicas\LargosdoPelourinho\LargosdoPelourinho4.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselLargosdoPelourinho" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselLargosdoPelourinho" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#MamboMooca">
            <img src="./imagens/portfolio/miniaturas/17.png" style="width:100%">
            <h4 class="texto-do-card">Supermercado Mambo</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="MamboMooca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supermercado Mambo</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselMamboMooca" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\supermercados\MamboMooca\MamboMooca1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\supermercados\MamboMooca\MamboMooca2.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMamboMooca" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselMamboMooca" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#Extracuiaba">
            <img src="./imagens/portfolio/miniaturas/18.png" style="width:100%">
            <h4 class="texto-do-card">Extra Cuiabá</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="Extracuiaba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Extra Cuiabá</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExtracuiaba" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\supermercados\Extracuiaba\Extra1.jpg" alt="...">
                        </div>
                       
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExtracuiaba" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExtracuiaba" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#vivendadocamarao">
            <img src="./imagens/portfolio/miniaturas/19.png" style="width:100%">
            <h4 class="texto-do-card">Vivenda do Camarão</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="vivendadocamarao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vivenda do Camarão</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselvivendadocamarao" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\vivendadocamarao\vivendadocamarao1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\vivendadocamarao\vivendadocamarao2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\vivendadocamarao\vivendadocamarao3.jpg" alt="...">
                        </div>
                  
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselvivendadocamarao" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselvivendadocamarao" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#RestauranteFrontera">
            <img src="./imagens/portfolio/miniaturas/20.png" style="width:100%">
            <h4 class="texto-do-card">Restaurante Frontera</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="RestauranteFrontera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Restaurante Frontera</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselRestauranteFrontera" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\RestauranteFrontera\RestauranteFrontera1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\RestauranteFrontera\RestauranteFrontera2.jpg" alt="...">
                        </div>
                      
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\RestauranteFrontera\RestauranteFrontera5.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\RestauranteFrontera\RestauranteFrontera6.jpg" alt="...">
                        </div>

      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselRestauranteFrontera" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselRestauranteFrontera" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Item portfolio-->
         <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#PizzariaRusticaMammaJamma">
            <img src="./imagens/portfolio/miniaturas/21.png" style="width:100%">
            <h4 class="texto-do-card-pizzaria">Pizzaria Rústica Mamma Jamma</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="PizzariaRusticaMammaJamma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pizzaria Rustica Mamma Jamma</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselPizzariaRusticaMammaJamma" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\restaurante\PizzariaRusticaMammaJamma\PizzariaRusticaMammaJamma1.jpg" alt="...">
                        </div>
                     
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPizzariaRusticaMammaJamma" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselPizzariaRusticaMammaJamma" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        


  

        <!-- Item portfolio-->
        <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#senacregistrosp">
            <img src="./imagens/portfolio/miniaturas/24.png" style="width:100%">
            <h4 class="texto-do-card">Senai Registro</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="senacregistrosp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Senai Registro</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselsenacregistrosp" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\escolas\senacregistrosp\senacregistrosp1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\escolas\senacregistrosp\senacregistrosp2.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\escolas\senacregistrosp\senacregistrosp3.jpg" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselsenacregistrosp" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselsenacregistrosp" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


        <!-- Item portfolio-->
        <div class="column bancos col-sm-12 col-md-6 col-lg-3">
        <div class="content">
          <a data-bs-toggle="modal" data-bs-target="#senai">
            <img src="./imagens/portfolio/miniaturas/25.png" style="width:100%">
            <h4 class="texto-do-card">Senai</h4>
          </a>
          <div class="ModalOpen">
            <!-- Button trigger modal -->

            <!--Alterar o valor de data-bs-target para o nome pra chamar no modal-->
            <!-- Modal -->

            <div class="modal fade" id="senai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Senai</h5>
                    <!--Alterar o valor da ID para o nome pra igual do data-bs-target-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><strong>X</strong></button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselsenai" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\escolas\senai\senai1.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img class="img-fluid imagens-do-portfolio" src="./imagens\portfolio\escolas\senai\senai2.png" alt="...">
                        </div>
      
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselsenai" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselsenai" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

     






















































































      <!-- END GRID -->
    </div>

    <!-- END MAIN -->
  </div>

  </div>


  <!-- Sessão de pré footer -->
  <?php
  include './include/pre-footer.php'
  ?>


  <!-- Sessão footer -->

  <?php include './include/footer.php'
  ?>

  <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>

</body>

</html>