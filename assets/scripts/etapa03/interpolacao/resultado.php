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
				<?php include "../../../../pages/includes/menuTopo.php"; ?>

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
	  				<b>ATIVIDADE 01 - INTERPOLAÇÃO NEWTON</b>
				</div>

				<div id="forms">
					<?php

						$DEBUG = 0;

						$exec = "./INTERP_NEWTON.py" ;

						$option = $_REQUEST['option'];

						$precisao = $_REQUEST['precisao'];

						$xInicial = $_REQUEST['limlower'];

						$xFinal = $_REQUEST['limupper'];

						$passo = $_REQUEST['passo'];

						if ($DEBUG) {

							switch ($option) {

							case 1:
								echo $exec . " x_inst_" . $option . ".txt y_inst_" . $option . ".txt " . $precisao . " " . $xInicial . " " . $xFinal . " " . $passo . "<br><br>";
								break;

							case 2:
								echo $exec . " x_inst_" . $option . ".txt y_inst_" . $option . ".txt " . $precisao . " " . $xInicial . " " . $xFinal . " " . $passo . "<br><br>";
								break;

							case 3:
								echo $exec . " x_inst_" . $option . ".txt y_inst_" . $option . ".txt " . $precisao . " " . $xInicial . " " . $xFinal . " " . $passo . "<br><br>";
								break;

							case 4:
								echo $exec . " x_inst_" . $option . ".txt y_inst_" . $option . ".txt " . $precisao . " " . $xInicial . " " . $xFinal . " " . $passo . "<br><br>";
								break;

							}

							echo "Option: " . $option . "<br>";
							echo "Precisao: " . $precisao . "<br>";
							echo "Xinicial: " . $xInicial . "<br>";
							echo "Xfinal: " . $xFinal . "<br><br>";
						}
						
						// EXECUTION C PROGRAM
						exec($exec . " x_inst_" . $option . ".txt y_inst_" . $option . ".txt " . $precisao . " " . $xInicial . " " . $xFinal . " " . $passo);

					?>

					<div class="alert alert-primary" role="alert">
	  					
	  					<b>P(x) GENÉRICO:</b>
	  					
	  					<?php 
							$f = fopen("./arquivo_saida_expressao_generalizada_IN.txt", "r") or exit("Unable to open file!");
							// read file line by line until the end of file (feof)
							while(!feof($f)) {
							  echo fgets($f)."<br />";
							}

							fclose($f);
						?>

					</div>

					<div class="alert alert-primary" role="alert">
	  					<b>GRÁFICO:</b>
	  					<img src="./img.png">
					</div>

					<div class="alert alert-primary" role="alert">
	  					
	  					<b>P(x) com valores:</b>
	  					
	  					<?php 
							$f = fopen("./arquivo_saida_expressao_IN.txt", "r") or exit("Unable to open file!");
							// read file line by line until the end of file (feof)
							while(!feof($f)) {
							  echo fgets($f)."<br />";
							}

							fclose($f);
						?>

					</div>

				</div>

			<a href="/pages/etapa03/atividade01" class="btn">VOLTAR</a>

			</div>

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
