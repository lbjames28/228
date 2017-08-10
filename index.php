<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/jquery-ui.css">
	 <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	 <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <style media="screen">
    img{
			width:100%;
    }
    .bg{
      background-image:url(footerBackground.jpg);
      height:80px;
    }
    .wh{
      color:white;
      top:20px;
    }
		.gh{
			color:white;
      top:10px;
		  font-size: 25px;

		}
    .imgh{
			position: relative;
			top:5px;
    }
    .gallery-1{
      background-image:url(lamp.jpg);
			width:100%;
			height:100%;
    }
		.gallery-2{
			background-image:url(lamp.jpg);
			width: 100%;
			height:100%;
		}
		.invis{
			display:none;
		}
		.vis{
			display:inline;
		}
		body{
			background-color: green;
			background-image:url(siteBackground.jpg);
			font-family: 'Playfair Display', serif;
		}
		.imgg{
			positiion:relatve;
			right:30px;
			top:20px;
		}
		div{
			border-radius:6px;
-webkit-border-radius:6px;
-moz-border-radius:5px;
-khtml-border-radius:10px;
		}

  </style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
  <script>
		$(document).ready(function(){
		$("#button1").button();
		$("#button2").button();
		$("#button1").click( function() {
			$( "#dialog" ).dialog();
		});
		$("#button2").click( function() {
			$( "#dialog" ).dialog();
		});
		$("#button3").click( function() {
			$( "#dialog" ).dialog();
		});
		$("#button4").click( function() {
			$( "#dialog" ).dialog();
		});
		$("#button5").click( function() {
			$( "#dialog" ).dialog();
		});
		$("#button6").click( function() {
			$( "#dialog" ).dialog();
		});
		$('#accordion').accordion({
		});
		$( function() {
		    var spinner = $( "#spinner" ).spinner();
				var spinner = $( "#spinner2" ).spinner();
				var spinner = $( "#spinner3" ).spinner();
				var spinner = $( "#spinner4" ).spinner();
				var spinner = $( "#spinner5" ).spinner();
				var spinner = $( "#spinner6" ).spinner();
		  })
		});

	</script>
	</head>

  <body>
		<div id="dialog" class="invis" title="Заявка">
			<p>Для покупки свяжитесь с продавцом удобным для вас способом:</p>
			<p><a href="https://vk.com/northwestdoesntsleep">Группа Vk</a></p>
			<p>Telegram: @azik</p>
			<p> Спасибо! Ждем вас!</p>
		</div>
		<div class="container">
      <div class="row">
      <div class="col-xs-12 bg">
				<h1 style="color:white; text-align:center; font-family: 'Indie Flower', cursive;">Grower's shop</h1>
      </div>
    </div>
    <div class="row">
			<div class="col-xs-12" style="background-image:url(footerBackground.jpg);">
				<img src="easytogrow.jpg" alt="" style="position:realtive; width:100%; height:100px;">
				<h1 style="position:absolute; text-align:center; top:20%; left:27%; color:white;"></h1>
			</div>
		</div>
    <div class="row">
		<div class="col-xs-12" style="background-image:url(footerBackground.jpg);">
			<h2 style="color:white; text-align:center;">Гроубоксы</h1>
		</div>
		</div>
		<div class="row" style="background-image:url(footerBackground.jpg)">
			<div class="col-xs-4">
				<h4 style="color:white;">Маленький гроубокс</h4>
				<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
			</div>
			<div class="col-xs-4">
				<h4 style="color:white;">Средний гроубокс</h4>
				<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
			</div>
			<div class="col-xs-4">
				<h4 style="color:white;">Большой гроубокс</h4>
				<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h2 style="color:white; text-align:center;">Лампы</h2>
					<div class="col-xs-4">
						<h4 style="color:white;">Лампа1</h4>
						<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
					</div>
					<div class="col-xs-4">
						<h4 style="color:white;">лампа2</h4>
						<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
					</div>
					<div class="col-xs-4">
						<h4 style="color:white;">Лампа3</h4>
						<img src="lamp.jpg" style="width:80%; height:80%; top:50px;">
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="background-color:Gainsboro;">
			<div class="col-xs-12">
				<h2>Покупка</h2>

				<div id="accordion">
			  <h4>Маленький гроубокс</h4>
			  <div>
			    <p>
						<img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
						<label for="spinner">Little</label>
	          <input id="spinner" name="value">
	          <button type="button" id="button1" name="button">Купить</button>
			    </p>
			  </div>
			  <h4>Гроубокс среднего размера</h4>
			  <div>
			    <p>
						<img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
						<label for="spinner2">Medium</label>
						<input id="spinner2" name="value">
						<button type="button" id="button2" name="button">Купить</button>
			    </p>
			  </div>
			  <h4>Большой гроубокс</h4>
			  <div>
					<p><img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
			    <label for="spinner3">Big</label>
					<input id="spinner3" name="value">
					<button type="button" id="button3" name="button">Купить</button></p>
			  </div>
				 <h4>Лампа1</h4>
				<div>
					<p><img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
					<label for="spinner4">Lamp1</label>
					<input id="spinner4" name="value">
					<button type="button" id="button4" name="button">Купить</button></p>
				</div>
				 <h4>Лампа2</h4>
				<div>
					<p><img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
					<label for="spinner5">Lamp2</label>
					<input id="spinner5" name="value">
					<button type="button" id="button5" name="button">Купить</button></p>
				</div>
				 <h4>Лампа3</h4>
				<div>
					<p><img src="lamp.jpg" style="width:100px;height:100px;top:20px;left:50px;">
					<label for="spinner6">Lamp3</label>
					<input id="spinner6" name="value">
					<button type="button" id="button6" name="button">Купить</button></p>
				</div>
				</div>
				<br>
				<br>
			</div>
		</div>
		<div class="row" style="background-image:url(footerBackground.jpg);">
				<div class="col-xs-9" style="color:white;">
				<h3>Контакты</h6>
				<p><a href="https://vk.com/northwestdoesntsleep">Группа Vk</a></p>
				<p>Telegram: @azik</p>
			</div>

			</div>
		</div>
  </div>
	<?php
	if ($_POST['']);
	$file=fopen('mes.txt','a+');
	fputs($file,$_POST['name']);
	fputs($file,$_POST['email']);
	fputs($file,$_POST['mes']);
	fclose($file);
	echo 'Данные записаны в файл!'; //можно удалить
	?>

  </body>
</html>
