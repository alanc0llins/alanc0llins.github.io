<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Whatsapp</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body class="b-pagina">
<?php include("./header.php"); ?>
<div class="p-titulo">
  <p class="titulo text-center"><i class="fa fa-user fa-fw"></i>minha conta</p>
</div>
<div class="container pagina">
	<ul class="nav nav-pills nav-justified">
	  <li role="presentation"><a href="./conta.php">Conta</a></li>
	  <li role="presentation" class="active"><a href="#">Grupos</a></li>
	</ul>
</div>
<div class="container pagina">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php
				for ($i=0; $i < 6; $i++) {
					echo '<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<img class="img-grupo img-responsive img-circle" src="./img/steves2.jpg" alt="...">
							<div class="caption">
								<h4 class="g-titulo text-center">Programadores Anonimos</h4>
								<p class="g-subtitulo text-center">Um grupos para desenvolvedores de todas as linguagens ferpz</p>
								<p class="text-center"><a href="./grupo.php" class="btn btn-primary w-button wp-button-v" role="button">Deletar</a></p>
							</div>
						</div>
					</div>';
				}

				 ?>

			</div>
		</div>
	</div>

</div>

<?php include("./footer.php"); ?>
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.js"></script>
</body>
</html>
