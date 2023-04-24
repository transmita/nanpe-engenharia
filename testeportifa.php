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
      height: 100%;
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
      max-width: 1000px;
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
      background-color: white;
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


    #Gallery {
  margin-top: 30px;
  max-width: 1500px;
  margin-left: auto;
  margin-right: auto;
}
.gallery-item { 
  float: left;
  position: relative;
  width: 20%;
  padding-bottom: 14%;
}
.gallery-item a {
  position: absolute;
  left: 10px;
  right: 10px;
  top: 10px;
  bottom: 10px;
  overflow: hidden;
}
.gallery-item a img {
  width: 100%;
}

@media only screen and (max-width:480px) { 
    /* Smartphone view: 1 tile */
    .gallery-item {
        width: 100%;
        padding-bottom: 100%;
    }
}
@media only screen and (max-width:650px) and (min-width:481px) { 
    /* Tablet view: 2 tiles */
    .gallery-item {
        width: 50%;
        padding-bottom: 33.3%;
    }
}
@media only screen and (max-width:1050px) and (min-width:651px) { 
    /* Small desktop / ipad view: 3 tiles */
    .gallery-item {
        width: 33.3%;
        padding-bottom: 23%;
    }
}
@media only screen and (max-width:1290px) and (min-width:1051px) { 
    /* Medium desktop: 4 tiles */
    .gallery-item {
        width: 25%;
        padding-bottom: 17%;
    }
}



/* Directly from:
http://photoswipe.com/latest/photoswipe.css
*/
body.ps-active 
{
	-webkit-text-size-adjust: none;
}
body.ps-active * 
{ 
	-webkit-tap-highlight-color:  rgba(255, 255, 255, 0); 
}
body.ps-active *:focus 
{ 
	outline: 0; 
}


/* Document overlay */
div.ps-document-overlay 
{
	background: #000;
}


/* Viewport */
div.ps-viewport 
{
	background: #000;
	cursor: pointer;
}


/* Zoom/pan/rotate layer */
div.ps-zoom-pan-rotate{
	background: #000;
}


/* Slider */
div.ps-slider-item-loading 
{ 
	background: url(http://abvichico.com/images/photoswipe/photoswipe-loader.gif) no-repeat center center; 
}


/* Caption */
div.ps-caption
{ 
	background: #000000;
	background: -moz-linear-gradient(top, #303130 0%, #000101 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#303130), color-stop(100%,#000101));
	border-bottom: 1px solid #42403f;
	color: #ffffff;
	font-size: 13px;
	font-family: "Lucida Grande", Helvetica, Arial,Verdana, sans-serif;
	text-align: center;
}

div.ps-caption-bottom
{ 
	border-top: 1px solid #42403f;
	border-bottom: none;
}

div.ps-caption-content
{
	padding: 13px;
}


/* Toolbar */
div.ps-toolbar
{ 
	background: #000000;
	background: -moz-linear-gradient(top, #303130 0%, #000101 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#303130), color-stop(100%,#000101));
	border-top: 1px solid #42403f;
	color: #ffffff;
	font-size: 13px;
	font-family: "Lucida Grande", Helvetica, Arial,Verdana, sans-serif;
	text-align: center;
	height: 44px;
	display: table;
	table-layout: fixed;
}

div.ps-toolbar-top 
{
	border-bottom: 1px solid #42403f;
	border-top: none;
}

div.ps-toolbar-close, div.ps-toolbar-previous, div.ps-toolbar-next, div.ps-toolbar-play
{
	cursor: pointer;
	display: table-cell;
}

div.ps-toolbar div div.ps-toolbar-content
{
	width: 44px;
	height: 44px;
	margin: 0 auto 0;
	background-image: url(http://abvichico.com/images/photoswipe/photoswipe-icons.png);
	background-repeat: no-repeat;
}

div.ps-toolbar-close div.ps-toolbar-content
{
	background-position: 0 0;
}

div.ps-toolbar-previous div.ps-toolbar-content
{
	background-position: -44px 0;
}

div.ps-toolbar-previous-disabled div.ps-toolbar-content
{
	background-position: -44px -44px;
}

div.ps-toolbar-next div.ps-toolbar-content
{
	background-position: -132px 0;
}

div.ps-toolbar-next-disabled div.ps-toolbar-content
{
	background-position: -132px -44px;
}

div.ps-toolbar-play div.ps-toolbar-content
{
	background-position: -88px 0;
}

/* Hi-res retina display */
@media only screen and (-webkit-min-device-pixel-ratio: 2)
{
	div.ps-toolbar div div.ps-toolbar-content
	{
		-webkit-background-size: 176px 88px;
		background-image: url(http://abvichico.com/images/photoswipe/photoswipe-icons@2x.png);
	}
}
  </style>
</head>

<body>
  <?php include './include/nav-menu.php' ?>
  <div id="Gallery">
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Exterior2.jpg"><img src="http://abvichico.com/images/thumb/Exterior2.jpg" alt="Exterior"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Lobby1.jpg"><img src="http://abvichico.com/images/thumb/Lobby1.jpg" alt="Lobby"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room2.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room2.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room4.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room4.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room6.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room6.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room8.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room8.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room9.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room9.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Room5.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room5.jpg" alt="Guest Room"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Guest%20Bathroom2.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Bathroom2.jpg" alt="Guest Bathroom"/></a>
  </div>
  <div class="gallery-item">
    <a href="http://abvichico.com/images/full/Pool3.jpg"><img src="http://abvichico.com/images/thumb/Pool3.jpg" alt="Pool"/></a>
  </div>
</div><!--end #Gallery-->

  <!-- Sessão de pré footer -->
  <?php
  include './include/pre-footer.php'
  ?>


  <!-- Sessão footer -->

  <?php include './include/footer.php'
  ?>

  <script>
   document.addEventListener('DOMContentLoaded', function(){
  Code.photoSwipe('a', '#Gallery', { captionAndToolbarHideOnSwipe: false } );
}, false);

  </script>

</body>

</html>