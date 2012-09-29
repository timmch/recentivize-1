<?php
	$developer		= 'NICK';
	
	// Use correct directory depending on developer
	switch($developer){
		case 'KEN':
			defined('DS') ? null 		: define('DS',			DIRECTORY_SEPARATOR);
			
//			defined('SITE_ROOT') ? null : define('SITE_ROOT',	DS.'Library'.DS.'WebServer'.DS.'Documents'.DS.'Spestle'.DS.'Live'.DS);
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://localhost/recentivize'.DS);
			break;
		case 'TIM':
			defined('DS') ? null 		: define('DS',			DIRECTORY_SEPARATOR);
			
//			defined('SITE_ROOT') ? null : define('SITE_ROOT',	DS.'Library'.DS.'WebServer'.DS.'Documents'.DS.'Spestle'.DS.'Live'.DS);
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://localhost/recentivize'.DS);
			break;
		
		case 'NICK':
			defined('DS') ? null 		: define('DS',			DIRECTORY_SEPARATOR);
			
//			defined('SITE_ROOT') ? null : define('SITE_ROOT',	DS.'Library'.DS.'WebServer'.DS.'Documents'.DS.'Spestle'.DS.'Live'.DS);
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://10.66.66.105/recentivize'.DS);
			break;
	}
?>