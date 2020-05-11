<!DOCTYPE html>
<html>
<head>
	<title>Keresés</title>
</head>
<body>
	<div id=search>
		<form action="./index.php?P=keresesresult" method="post">
			<input type="text" name='keresesresult'>
			<input type="submit" value="Keresés">
		</form>
		<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
			<!-- nem szabad megjelennie !-->
		<?php else : ?>
			<a href = "index.php?P=addkereseskeyword"> Kulcsszavak hozzáadása </a>
		<?php endif; ?>
	</div>
	</body>
</html>