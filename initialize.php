<?php
	$developer		= 'CARSON';
	
	// Use correct directory depending on developer
	switch($developer){
		case 'CARSON':
			defined('DS') ? null 		: define('DS',			DIRECTORY_SEPARATOR);
			
			defined('SITE_ROOT') ? null : define('SITE_ROOT',	DS.'Library'.DS.'WebServer'.DS.'Documents'.DS.'Spestle'.DS.'Live'.DS);
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://localhost/recentivize'.DS);
			break;
	}
?>