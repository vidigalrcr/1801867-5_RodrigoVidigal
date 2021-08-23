
	<!-- Corpo do site -->
	
	<div id="principal-e">
		
		<section>
			<article class="conteudo-prod">
					
				<h1><?= $produtos["cupcake"]["titulo"]; ?></h1>

				<img src="images/cupcakes.png" width="400" class="img-prod">

				<p><?= $produtos["cupcake"]["info"]; ?></p>

				<p class="textohome1">R$ <?= number_format($produtos["cupcake"]["valor"], 2, ',', '.'); ?> cada</p>

			</article>
		</section>
		
	</div>
	<br />
	<br />
