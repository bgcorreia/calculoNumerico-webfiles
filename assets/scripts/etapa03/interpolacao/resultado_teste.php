					<?php

						$DEBUG = 0;

						$exec = "./INTERP_NEWTON.py" ;

						/*
						$option = $_REQUEST['option'];

						$precisao = $_REQUEST['precisao'];

						$xInicial = $_REQUEST['limlower'];

						$xFinal = $_REQUEST['limupper'];

						$passo = $_REQUEST['passo'];
						*/

						$option = 1;

						$precisao = 5;

						$xInicial = -1;

						$xFinal = 3;

						$passo = 0.2;

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