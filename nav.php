<div id="nav">
<a href="index.php">Home</a>
<?php if (IsUserLoggedIn()): ?>
		<div class="evfolyamoknav">
    	<button class="evfolyam_gomb">Évfolyamok</button>
    	<div class="evfolyam_tartalom">
    		<a href="index.php?P=Ifelev">I. félév</a>
    		<a href="index.php?P=IIfelev">II. félév</a>
   			<!--<a href="index.php?P=IIIfelev">III. félév</a>!-->
        <a href="#">III. félév</a>
    </div>
  </div>
  <a href="index.php?P=logout">Kijelentkezés</a>
<?php else : ?>	
	<a  href="index.php?P=login">Bejelentkezés</a>
	<a  href="index.php?P=register">Regisztrálás</a>
<?php endif ?>

</div>
