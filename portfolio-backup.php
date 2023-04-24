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

	<div id="top"></div>
<section class="gallery">
	<div class="row">
		<ul>
			<a href="#" class="close"></a>
			<li>
				<a href="#item02">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/3981307/lorena2.png" alt="">
				</a>
			</li>

			<li>
				<a href="#item02">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/3892302/contact.png" alt="">
				</a>
			</li>

			<li>
				<a href="#item02">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/4154721/dive--001.png" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/4356121/darko--dr.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item02">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/3695553/news.png" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/4360101/liberosis_--_12.png" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/3148799/technical-book.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="https://cdn.dribbble.com/users/545884/screenshots/2883479/cover.jpg" alt="">
				</a>
			</li>
		</ul>
	</div> <!-- / row -->

	<!-- Item 01 -->
	<div id="item01" class="port">
	
		<div class="row">
			<div class="description">
				<h1>Item 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
			</div>

				<img src="https://cdn.dribbble.com/users/545884/screenshots/3981307/lorena2.png" alt="">
			</div>
		</div> <!-- / row -->

	</div> <!-- / Item 02 -->

	<!-- Item 02 -->
	<div id="item02" class="port">
	
		<div class="row">
			<div class="description">
				<h1>Item 02</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
			</div>
			<img src="https://cdn.dribbble.com/users/545884/screenshots/2883479/cover.jpg" alt="">
		</div> <!-- / row -->

	</div> <!-- / Item 02 -->

</section> <!-- / projects -->


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