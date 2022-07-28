<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

	<style>

		header{
			position:relative;
			margin:auto;
			text-align:center;
			padding: 6px;	
		}
		
		nav{
			position:relative;
			margin:auto;
			width:100%;
			height:auto;
			background:black;
		}

		nav ul{
			position:center;
			margin:auto;
			width:60%;
			text-align: center 5px;
		}

		nav ul li{
			display:inline-flexbox;
			width:100%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color:white;
			text-decoration: Georgia, 'Times New Roman', Times, serif;
		}

		section{
			position:relative;
			padding:20px;
		}
	
	</style>
</head>
<body><style>
            body {
              background-image: url('http://localhost/segundo/ecuador/imag/fondo');
              background-size: cover;
            }
            </style>

<header>
		<h1>REGIONES DEL ECUADOR</h1>
</header>

<?php 
	include "modules/navegacion.php";
?>

<section>

<?php

$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>
	
</section>

</body>
</html>