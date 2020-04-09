<?php 

if(!array_key_exists('M', $_GET) || empty($_GET['M']))
	$_GET['M'] = 'normal';

if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

if($_GET['M'] == 'user') {
	switch ($_GET['P']) {
		case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;
		case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
		case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;
		default: require_once PROTECTED_DIR.'normal/404.php'; break;
	}
} else {
	switch ($_GET['P']) {
		case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
		default: require_once PROTECTED_DIR.'normal/404.php'; break;
	}
}

?>