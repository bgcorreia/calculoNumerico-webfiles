<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CN - UFPB - 2017.2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/global.css">
	<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
</head>
<body>
	<div id="main">
	<div class="container">
		<div id="base">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<a class="navbar-brand" href="/"><img src="/assets/images/logo.png" width="150" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</button>
				
				<!-- MENU TOPO -->
				<?php include "../includes/menuTopo.php"; ?>

				<div class="groups">
					<a href="https://www.facebook.com/yanffernandes" target="_blank">
						<img src="/assets/images/yan-nav.png" class="img-responsive nossosLogos" title="Yan Ferreira" alt="Yan Ferreira" style="float: right;">
					</a>
					<a href="https://www.facebook.com/jose.olivio.5" target="_blank">
						<img src="/assets/images/olivio-nav.png" class="img-responsive nossosLogos" title="José Olívio" alt="José Olívio" style="float: right;">
					</a>
					<a href="https://www.facebook.com/icaro.targino.a" target="_blank">
						<img src="/assets/images/icaro-nav.png" class="img-responsive nossosLogos" title="Ícaro Targino" alt="Ícaro Targino" style="float: right;">
					</a>
					<a href="https://www.facebook.com/brunocorr" target="_blank">
						<img src="/assets/images/bruno-nav.png" class="img-responsive nossosLogos" title="Bruno Correia" alt="Bruno Correia" style="float: right;">
					</a>
					<a href="https://www.facebook.com/arthur.curty" target="_blank">
						<img src="/assets/images/arthur-nav.png" class="img-responsive nossosLogos" title="Arthur Curty" alt="Arthur Curty" style="float: right;">
					</a>
				</div>				
			</nav>

			<div id="slide">
				<h1>CÁLCULO NUMÉRICO</h1>
			</div>
			
			<div id="forms">
				<div class="alert alert-primary" role="alert">
	  				<b>ATIVIDADE 01 - INTERPOLAÇÃO DE NEWTON</b>
				</div>

				<form name="FormParameters" method="POST" action="/assets/scripts/etapa03/interpolacao/resultado">

					<!--
					<?php $GLOBALS['DIR_RANDOM'] = md5(date('Y-m-d H:i:s.') . gettimeofday()['usec']) ; ?>
					<input type="hidden" name="exec" value="<?php echo $DIR_RANDOM ?>">
					-->

					<div class="dropdown-divider"></div>

					<h3><i class="fa fa-list" aria-hidden="true"></i> Parametros</h3>

					<div class="dropdown-divider"></div>

					<div class="form-group">
						<label for="option">Opção</label>
						<select class="form-control" name="option" id="option">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						<small id="optionSmall" class="form-text text-muted">Entre com uma das opções.</small>
					</div>

					<div class="form-group">
						<label for="precisao">Precisão</label>
						<select class="form-control" name="precisao" id="precisao">
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
						<small id="precisaoSmall" class="form-text text-muted">Entre com a precisão.</small>
					</div>
					
					<div class="form-group">
						<label for="limlower">X Inicial</label>
						<select class="form-control" name="limlower" id="limlower">
							<option>-10</option>
							<option>-9</option>
							<option>-8</option>
							<option>-7</option>
							<option>-6</option>
							<option>-5</option>
							<option>-4</option>
							<option>-3</option>
							<option>-2</option>
							<option selected>-1</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						<small id="limlowerSmall" class="form-text text-muted">Entre com o X inicial.</small>
					</div>						
					
					<div class="form-group">
						<label for="limupper">X Final</label>
						<select class="form-control" name="limupper" id="limupper">
							<option>-10</option>
							<option>-9</option>
							<option>-8</option>
							<option>-7</option>
							<option>-6</option>
							<option>-5</option>
							<option>-4</option>
							<option>-3</option>
							<option>-2</option>
							<option>-1</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option selected>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						<small id="limupperSmall" class="form-text text-muted">Entre com o X final.</small>
					</div>

					<div class="form-group">
						<label for="passo">Passo</label>
						<select class="form-control" name="passo" id="passo">
							<option selected>0.1</option>
							<option>0.2</option>
							<option>0.5</option>
							<option>1</option>
							<option>1.5</option>
							<option>2</option>
						</select>
						<small id="passoSmall" class="form-text text-muted">Entre com o Passo.</small>
					</div>

					<input type="submit" class="btn btn-primary upload" value="Gerar Expressão/Gráfico" id="gerarGrafico">

				</form>

			</div>
			
	</div>
	</div>
	<div class="container">
		<div id="forms">
			<div class="alert alert-primary" role="alert">
				<div class="footer">
					<a href="http://ufpb.br" target="_blank">
						<img src="/assets/images/ufpb.png" width="90" title="Universidade Federal da Paraíba" alt="UFPB">
					</a>
					<a href="http://ci.ufpb.br" target="_blank">
						<img src="/assets/images/ci.png" width="90" title="Centro de Informática" alt="CI">
					</a>
				</div>
			</div>
		</div>
	</div>	
</body>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>
