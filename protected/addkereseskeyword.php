<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addSearch'])) {
		$postData = [
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'keywords' => $_POST['keywords'],
			'link' => $_POST['link']
		];

		if(empty($postData['title']) || empty($postData['description']) || empty($postData['keywords']) || empty($postData['link'])) {
			echo "Hiányzó adat(ok)!";
		} else {
			$query = "INSERT INTO search (title,description,keywords,link) VALUES (:title,:description,:keywords,:link)";
			$params = [
				':title' => $postData['title'],
				':description' => $postData['description'],
				':keywords' => $postData['keywords'],
				':link' => $postData['link']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
	}
	?>

	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="searchTitle">Cím</label>
				<input type="text" class="form-control" id="searchTitle" name="title">
			</div>
			<div class="form-group col-md-6">
				<label for="searchKeywords">Kulcs szavak</label>
				<input type="text" class="form-control" id="searchKeywords" name="keywords">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="searchDescription">Leírás</label>
				<input type="text" class="form-control" id="searchDescription" name="description">
			</div>

		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
		    	<label for="searchLink">Link</label>
		    	<select class="form-control" id="searchLink" name="link">
		      		<option value="http://localhost:8080/beadando/index.php">Home</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=Ifelev">I félev</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=IIfelev">II félév</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=userlist">Felhasználó lista</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=Magprogea1">I félév- Magprog I. tétel</option>
		    	</select>
		  	</div>
		</div>


		<button type="submit" class="btn btn-primary" name="addSearch">Hozzáadás</button>
	</form>
