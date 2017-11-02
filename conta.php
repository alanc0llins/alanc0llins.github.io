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
	  <li role="presentation" class="active"><a href="#">Conta</a></li>
	  <li role="presentation"><a href="./contaGrupos.php">Grupos</a></li>
	</ul>
</div>
<div class="container pagina">
  <div class="col-md-10 col-md-offset-1">

    <div class="col-md-11">
      <div class="input-group bottom">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-address-card-o  fa-fw"></i></span>
        <input type="text" class="form-control" placeholder="Alan Collins" aria-describedby="basic-addon1">
      </div>
      <div class="input-group bottom">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o  fa-fw"></i></span>
        <input type="email" class="form-control" placeholder="meu@email.com" aria-describedby="basic-addon1">
      </div>
      <div class="input-group bottom">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-o  fa-fw"></i></span>
        <input type="text" class="form-control" placeholder="alanc0llins" aria-describedby="basic-addon1">
      </div>
      <div class="input-group bottom">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock  fa-fw"></i></span>
        <input type="password" class="form-control" placeholder="********" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-default btn-lg bottom w-button wp-button">
          <span class="glyphicon glyphicon-ok wp-button" aria-hidden="true"></span> Salvar Dados
        </button>
        <button type="button" class="btn btn-default btn-lg bottom w-button wp-button wp-button-v">
          <span class="glyphicon glyphicon-remove wp-button" aria-hidden="true"></span> Deletar
        </button>

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
