<div id="nav">

<a href="index.php">Home</a>
<?php if (IsUserLoggedIn()): ?>
	<a href="index.php?P=logout">Logout</a>

<?php else : ?>	
	<a href="index.php?M=users$P=register">Register</a>
	<a href="index.php?M=users$P=login">Login</a>
	<?php endif ?>

</div>