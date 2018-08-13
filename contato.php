<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt">
<head>
	<?php include_once 'head.php'; ?>
	<title>Contato | Fardas Guará</title>
	<meta name="title" content="Contato | Fardas Guará">
	<meta name="description" content="Contato | Fardas Guará - Encomende Fardas, Uniformes, Dólmãs e Aventais Sob Medida">
    <meta name="keywords" content="Contato | Fardas Guará, farda, uniforme, avental, dólmã, farda sob medida, uniforme sob medida, avental sob medida, dólmã sob medida, farda customizada, uniforme customizado, avental customizado, dólmã customizada, farda personalizada, uniforme personalizado, avental personalizado, dólmã personalizada">
</head>
	<?php include_once 'header.php'; ?>
	<main class="container-fluid">
		<!-- BANNER -->
		<section class="banner-container row">
			<article class="contato-banner col-12">
				<!-- <video autoplay="autoplay" loop="loop" muted nodownload preload="auto" playsinline id="myVideo">
					<source src="video/bg-dolma.mp4" type="video/mp4">
					<source src="video/bg-dolma.mov" type="video/mov">
					<source src="video/bg-dolma.webm" type="video/webm">
					<source src="video/bg-dolma.ogv" type="video/ogg">
					 <source src="img/fardas-guara-categoria-dolmas.jpg" type="image/jpg"> -->
					<!--<object>
					    <embed src="video/bg-dolma.mp4" type="application/x-shockwave-flash" allowscriptaccess="always">  		
					</object>
				</video> -->
				<!-- <script async>
					//document.getElementById('myvideo').play();
				</script>-->
				<!-- <a href="#"> -->
					<div class="banner-info">
						<img src="img/logo.png" alt="" width="67" height="auto">
						<h1 class="banner-title">Contato | Fardas Guará</h1>
						<h3 class="banner-description">Encomende Fardas, Uniformes, Dólmãs e Aventais Sob Medida</h3>
					</div>
				<!-- </a> -->
			</article>
		</section>
		<!-- DETALHES CATEGORIA DE PRODUTO -->
		<section class="contato row">
			<h2 class="col-12"><strong>Entre em Contato e Solicite Sua Cotação</strong></h2>
			<article class="contato-det contato-cotacao col-12 offset-md-2 col-md-5">
				<h4 id="cotacao-online-form">Cotação Online</h4>
					<div class="contato-form-div">
						<form action="mensagem-enviada.php" method="post">
							<small>Envie seus dados e retornamos em breve!</small>
							<br/>
							<label for="nome">Nome*</label>
							<br/>
							<input type="text" placeholder=" Insira seu nome" value="nome" name="nome" required>
							<br/>
							<label for="email">email*</label>
							<br/>
							<input type="email" placeholder=" Insira seu email" value="email" name="email" required>
							<br/>
							<label for="tel">Telefone</label>
							<br/>
							<input type="number" placeholder=" Insira seu DDD + telefone" value="tel" name="tel">
							<br/>
							<label for="mensagem">Mensagem</label>
							<br/>
							<textarea value="mensagem" name="mensagem" id="mensagem" resize="vertical" cols="30" rows="10" placeholder=" Insira sua mensagem"></textarea>
							<br/>
							<input type="submit" value="Enviar">
						</form>
					</div>
			</article>
			<article class="contato-det contato-dir col-12 col-md-4">
				<h4>Entre em contato</h4>
					<div class="contatos">
						<a href="tel:+5511982218144"><i class="fab fa-whatsapp"></i>  11 98221 8144</a>
						<br/>
						<a href="mailto:contato@fardasguara.com.br?Subject=Contato%20via%20site"><i class="fas fa-envelope"></i>  contato@fardasguara.com.br</a>
					</div>
				<h4>Siga @fardasguara</h4>
				<div>
					<a href="https://www.instagram.com/fardasguara/" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://facebook.com/pg/fardasguara/" target="_blank"><i class="fab fa-facebook-square"></i></a>
				</div>
			</article>
			<span class="clearfix"></span>
		</section>
		<!-- VITRINE (CATEGORIAS PEQ) -->
		<section class="display row">
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="dolmas">
				<a href="dolma.php">
					<div class="card-info">
						<h2 class="card-title">Dólmãs</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="aventais">
				<a href="aventais-sob-medida.php">
					<div class="card-info">
						<h2 class="card-title">Aventais</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="bar-e-restaurante">
				<a href="bar-e-restaurante.php">
					<div class="card-info">
						<h2 class="card-title">Bar e Restaurante</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="parrilleros">
				<a href="avental-de-parrillero.php">
					<div class="card-info">
						<h2 class="card-title">Parrilleros</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="infantil">
				<a href="infantil.php">
					<div class="card-info">
						<h2 class="card-title">Infantil</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<article class="card-sm col-6 col-md-4 col-lg-2" id="casual">
				<a href="casual.php">
					<div class="card-info">
						<h2 class="card-title">Casual</h2>
					</div>
				</a>
			</article>
			<!-- CATEGORIA PEQ-->
			<!-- <article class="card-sm col-6 col-md-4 col-lg-2" id="pet">
				<a href="#">
					<div class="card-info">
						<h2 class="card-title">Linha Pet</h2>
					</div>
				</a>
			</article> -->
		</section>
	</main>
<?php include_once 'footer.php'; ?>