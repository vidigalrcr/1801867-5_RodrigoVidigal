<?php
	include("dados/dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/estilo.css" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Pacifico&family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 
	<title>DOCE SABOR - Para adoçar o seu dia</title>
</head>
<body>
	<header>
		<div class="img_topo"></div>		<!-- barra de menu -->
		<nav>
			<div id="menu">
				<ul>
					
					<li><a href="index.php">Home</a></li>
					<li class="line"></li>
					<li><a href="index.php?pages=pages/quemsomos.php">Quem Somos</a></li>
					<li class="line"></li>
					<li><a href="index.php?pages=pages/contatos.php">Contato</a></li>
					<li style="float:right"><a href="index.php?pages=pages/localizacao.php">Localização</a></li>
				</ul>
			</div>
		</nav>
	</header>
	
	<!-- Corpo do site -->
	<main>
		<?php
			if(isset($_GET["pages"]) && !empty($_GET["pages"])){
				$pages = $_GET["pages"];
				include ($pages);		
			}else{
				include ("pages/home.php");
			}
		?>
	</main>
	

<?php
	include("pages/footer.php");
?>
