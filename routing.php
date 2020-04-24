<div id="content">
<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';
	
switch ($_GET['P']) 
	{
		case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
		case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;
		case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
		case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

		//félévek
		case 'Ifelev': IsUserLoggedIn() ?  require_once PROTECTED_DIR.'felevek/Ifelev.php' : header('Location: index.php'); break;
		case 'IIfelev': IsUserLoggedIn() ? require_once PROTECTED_DIR.'felevek/IIfelev.php': header('Location: index.php'); break;
		case 'IIIfelev': IsUserLoggedIn() ? require_once PROTECTED_DIR.'felevek/IIIfelev.php': header('Location: index.php'); break;

		default: require_once PROTECTED_DIR.'normal/404.php'; break;
	}
?>
</div>