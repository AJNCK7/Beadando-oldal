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
		//I. FÉLÉV
		case 'Ifelev': IsUserLoggedIn() ?  require_once PROTECTED_DIR.'felevek/I.felevnavlinks.php' : header('Location: index.php'); break;
			case 'Magprogea1': IsUserLoggedIn() ?  require_once I_FELEV.'/Magprogea.php' : header('Location: index.php'); break;
				case 'Magprogea2': IsUserLoggedIn() ?  require_once I_FELEV.'/MagprogeaIIo.php' : header('Location: index.php'); break;

			case 'Logikaea': IsUserLoggedIn() ?  require_once I_FELEV.'/Logikaea.php' : header('Location: index.php'); break;
			case 'Bevinfoea': IsUserLoggedIn() ?  require_once I_FELEV.'/Bevinfoea.php' : header('Location: index.php'); break;

		//II. FÉLÉV
		case 'IIfelev': IsUserLoggedIn() ? require_once PROTECTED_DIR.'felevek/II.felevnavlinks.php': header('Location: index.php'); break;
			case 'Magprogea2-1': IsUserLoggedIn() ?  require_once II_FELEV.'/Magprogea.php' : header('Location: index.php'); break;

		case 'IIIfelev': IsUserLoggedIn() ? require_once PROTECTED_DIR.'felevek/III.felevnavlinks.php': header('Location: index.php'); break;
		default: require_once PROTECTED_DIR.'normal/404.php'; break;
	}

?>
</div>