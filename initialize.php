<?php
	$developer		= 'TIM';
	
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
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://localhost/recentivize'.DS);
			break;
		
		case 'PROD':
			defined('DS') ? null 		: define('DS',			DIRECTORY_SEPARATOR);
			
//			defined('SITE_ROOT') ? null : define('SITE_ROOT',	DS.'Library'.DS.'WebServer'.DS.'Documents'.DS.'Spestle'.DS.'Live'.DS);
			defined('WEB_URL') ? null 	: define('WEB_URL',		'http://timothymchugh.com/recentivize'.DS);
			break;
	}
?>
