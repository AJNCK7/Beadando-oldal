
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addReport'])) {
		$postData = [
			'text' => $_POST['text'],
		];

		if(empty($postData['text'])){
			echo "Hiányzó szöveg!";
		}
		else if(strlen($postData['text']) < 15) 
		{
			echo "A hiba jelentés túl rövid!(min 15 karakter)";
		} 
		else
		{
			$query = "INSERT INTO bugreports (text) VALUES (:text)";
			$params = [
				':text' => $postData['text']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
	}
	?>
	<form method="post">
	<div class="form-group">
    <label for="bugreports">Hiba részletes leírása</label>
    <textarea class="form-control" id="bugreports" name="text" rows="5" placeholder="Hol található? Mi a pontos hiba? Milyen gyakran fordul elő?"></textarea>
  	</div>
		<button type="submit" class="btn btn-primary" name="addReport">Jelentés</button>
	</form>