
	<!-- Corpo do site -->
	
	<div id="principal-e">
		
		<section>
			<article class="conteudo-prod">
					
				<h1><?= $produtos["brigadeiro"]["titulo"]; ?></h1>

				<img src="images/brigadeiro.png" width="400" class="img-prod">

				<p><?= $produtos["brigadeiro"]["info"]; ?></p>

				<p class="textohome1">R$ <?= number_format($produtos["brigadeiro"]["valor"], 2, ',', '.'); ?> cada</p>

			</article>
		</section>
		
	</div>
	<br />
	<br />
