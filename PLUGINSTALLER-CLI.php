<?php
	// array of sites to iterate through...
$aliaie=array('@orgbiz','@gov','@glo','@orgbizes','@tp','@tpau','@vape');
	
foreach ($aliaie as $alias){
	echo 'At site ' . $alias;
	// commands to send...
			// update all plugs
	
	
	// others....

		// wp db export
		//wp db import backup.sql
		//wp search-replace 'dev.example.com' 'public_html.example.com'
			//wp search-replace --dry-run 'dev.example.com' 'public_html.example.com'
		// install a plug?	
			// try typing plugin = 'A PLUGIN' to install
		$plugins=array('rocketcss.zip',
				'rocketfoot.zip',
				'preloader.zip',
				'youtube-live.zip',
				'youtube-embed-plus-pro.zip',
				'wptouch.zip',
				'wprock.zip',
				'worker.zip',
				'theme.zip',
				'redirection.zip',
				'preloader.zip',
				' update --all'
				);
		//if (isset($_GET['plugin'])){
		//$input[5]=('wp plugin install ' . $_GET['plugin']);	
	//	}
	// install theme?
	//              wp theme activate twentysixteen
//	$input[4]=('theme install /home/organ151/themeN.zip');
		
		foreach ($plugins as $plug){	
		
	$input='plugin install --activate /home/organ151/Scripts/plug/' . $plug;
	// do it for this 'alias'
		$cmd = 'wp ' . $alias . ' ' . $input;
		echo exec($cmd)."\n";
		}
			
	}
		
	echo 'done';
?>