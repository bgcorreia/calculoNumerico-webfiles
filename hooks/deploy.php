<?php
	/**
	 * GIT DEPLOYMENT SCRIPT
	 */
/*
	// The commands
	$commands = array(
		'git pull',
		'git submodule sync',
		'git submodule update',
		'git submodule status',
	);
*/

	// The commands
	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
		'git submodule sync',
		'git submodule update',
		'git submodule status',
	);

	// Run the commands for output
	foreach($commands AS $command){
		// Run it
		shell_exec($command);
	}

}
