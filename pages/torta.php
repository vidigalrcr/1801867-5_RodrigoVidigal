
	<!-- Corpo do site -->
	
	<div id="principal-e">
		
		<section>
			<article class="conteudo-prod">
					
				<h1><?= $produtos["torta"]["titulo"]; ?></h1>

				<img src="images/produto2.png" width="400" class="img-prod">

				<p><?= $produtos["torta"]["info"]; ?></p>

				<p class="textohome1">R$ <?= number_format($produtos["torta"]["valor"], 2, ',', '.'); ?> a fatia</p>

			</article>
		</section>
		
	</div>
	<br />
	<br />
