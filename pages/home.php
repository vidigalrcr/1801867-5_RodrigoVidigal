		<section id="principal">
			<head>
				<h1><?= $home["titulo"]; ?></h1>
			</head>

			<article>
				<a href="index.php?pages=pages/cupcake.php"><img src="images/produto1.png" width="40%"></a>
				<p class="textohome1"><?= $home[0]["titulo"]; ?></p>
				<p><?= $home[0]["info"]; ?></p>	
			</article>

			<article>
				<a href="index.php?pages=pages/torta.php"><img src="images/produto2.png" width="40%"></a>
				<p class="textohome1"><?= $home[1]["titulo"]; ?></<p>
				<p><?= $home[1]["info"]; ?></p>
			</article>

			<article>
				<a href="index.php?pages=pages/brigadeiro.php"><img src="images/produto3.png" width="40%"></a>
				<p class="textohome1"><?= $home[2]["titulo"]; ?></p>
				<p><?= $home[2]["info"]; ?></p>
			</article>

			<article>
				<a href="index.php?pages=pages/bolo.php"><img src="images/produto4.png" width="40%"></a>
				<p class="textohome1"><?= $home[3]["titulo"]; ?></p>
				<p><?= $home[3]["info"]; ?></p>
			</article>

		</section>