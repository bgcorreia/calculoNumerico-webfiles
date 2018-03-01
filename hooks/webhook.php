<?php
	$exec = shell_exec("cd ../ && git pull origin master 2>&1");
	echo $exec;
?>
