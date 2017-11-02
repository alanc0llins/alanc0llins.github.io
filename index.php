<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Whatsapp</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
<?php include("./header.php"); ?>
<div class="grupos">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php
        for ($i=0; $i < 4; $i++) {
          echo '<div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-grupo img-responsive img-circle" src="./img/steves2.jpg" alt="...">
              <div class="caption">
                <h4 class="g-titulo text-center">Programadores Anonimos</h4>
                <p class="g-subtitulo text-center">Um grupos para desenvolvedores de todas as linguagens ferpz</p>
                <p class="text-center"><a href="./grupo.php" class="btn btn-primary w-button" role="button">Entrar</a></p>
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

	<script type="text/javascript" src="./js/bootstrap.js"></script>
</body>
</html>
