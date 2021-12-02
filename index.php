<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<title>Teste InCicle</title>
	<meta name="author" content="incicle">
	<meta name="description" content="incicle dashboard releases manager">
	<link rel="stylesheet" href="_assets/_css/style.css">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>

	<!-- header section begin -->
	<section class="header">
		<div class="container">
			<!-- logo -->
			<img src="_assets/_images/logo.png" class="logo">
		</div>
	</section>
	<!-- header section end -->

	<section class="body">
		<div class="container">	
			<div class="content">
				<div class="content_header" >
					<h2 class="title">Endomarketing</h2>
					<form method="post" action="#" >
						<select name="release_type">
							<option selected disabled>Tipo</option>
							<option value="release">Comunicado</option>
							<option value="event">Evento</option>
							<option value="publication">Publicação</option>
						</select>
						<button type="submit" name="create">Criar <i class="bi bi-plus-lg"></i></button>
					</form>
					<div class="clear"></div>

					<div id="release"></div>
				</div>
			</div>

			<div class="side_content">
				<div class="infobox">
					<h3>Endomarketing</h3>
					<p class="infobox_content">Endomarketing está relacionado às ações de treinamento ou qualificação dos colaboradores da empresa visando um melhor serviço para o cliente. Marketing interno, devido ao nome, é usualmente confundido com Endomarketing mesmo sendo conceitos diferentes.</p>
					<a href="#">Dispensar</a>
				</div>
				<div class="card">
					<h3>Quadros de Gestão à Vista</h3>
					<div class="box">
						<p>Demonstrativo Comercial</p>
						<img src="_assets/_images/globo.png">
						<div class="clear"></div>
						<div class="social_images">
							<img src="_assets/_images/image1.png">
							<img src="_assets/_images/image2.png">
							<img src="_assets/_images/image3.png">
							<img src="_assets/_images/image4.png">
						</div>
						<div class="clear"></div>
					</div>
					<div class="box">
						<p>Demonstrativo Comercial</p>
						<img src="_assets/_images/globo.png">
						<div class="clear"></div>
						<div class="social_images">
							<img src="_assets/_images/image1.png">
							<img src="_assets/_images/image2.png">
							<img src="_assets/_images/image3.png">
							<img src="_assets/_images/image4.png">
						</div>
						<div class="clear"></div>
					</div>
					<div class="box">
						<p>Demonstrativo Comercial</p>
						<img src="_assets/_images/globo.png">
						<div class="clear"></div>
						<div class="social_images">
							<img src="_assets/_images/image1.png">
							<img src="_assets/_images/image2.png">
							<img src="_assets/_images/image3.png">
							<img src="_assets/_images/image4.png">
						</div>
						<div class="clear"></div>
					</div>					
				</div>

			</div>
			<div class="clear"></div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="_assets/_js/functions.js"></script>
</body>
</html>