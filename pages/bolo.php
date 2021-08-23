
	<!-- Corpo do site -->
	
	<div id="principal-e">
		
		<section>
			<article class="conteudo-prod">
					
				<h1><?= $produtos["bolo"]["titulo"]; ?></h1>

				<img src="images/bolo.png" width="400" class="img-prod">

				<p><?= $produtos["bolo"]["info"]; ?></p>

				<p class="textohome1">R$ <?= number_format($produtos["bolo"]["valor"], 2, ',', '.'); ?> o kilo</p>

			</article>
		</section>
		
	</div>
	<br />
	<br />
