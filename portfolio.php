<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfólio - NANPE Engenharia</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./icones-icomoon/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheeet" href="./css/navbar.css">
	<link rel="stylesheet" href="../bruno/js/javascript.js">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/navbar.css">
	<link rel="stylesheet" href="./css/portfolio-completo.css">
	<link rel="stylesheet" href="./icomoon/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<style>
		.sessao-1-portfolio {
			background: #ededed;
			position: relative;
			height: auto;
			padding: 10%;
		}

		.sessao-1-portfolio span {
			text-align: center;
			color: rgb(0, 0, 0);
			display: block;
			font-size: 40px;
			font-weight: 100;
			text-align: center;
		}

		.sessao-1-portfolio h3 {
			color: orangered;
			font-size: 70px;
			font-weight: 800;
			line-height: 1;
			text-align: center;
			display: block;
		}
	</style>
</head>

<body>

	<?php include './include/nav-menu.php' ?>
	<div class="sessao-1-portfolio container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<span>Portfólio</span>
				<h3>Nossos Serviços</h3>
			</div>
		</div>
	</div>


	

	<!-- Sessão de pré footer -->
	<?php
	include './include/pre-footer.php'
	?>


	<!-- Sessão footer -->

	<?php include './include/footer.php'
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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