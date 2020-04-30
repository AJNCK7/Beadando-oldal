<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Page access is forbidden!</h1>
<?php else : ?>

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
			$query = "UPDATE search SET title = :title, description = :description, keywords = :keywords, link = :link WHERE id= :id";
			$params = [
				'id' => $_POST['id'],
				':title' => $postData['title'],
				':description' => $postData['description'],
				':keywords' => $postData['keywords'],
				':link' => $postData['link']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php?P=alldatas');
		}
	}
	?>
	<?php 
	$query2 = "SELECT * FROM search WHERE id = :id";
	$params2 = [':id' => $_GET['id']];
	require_once DATABASE_CONTROLLER;
	$search = getList($query2,$params2);
	?>	


<?php foreach ($search as $s) : ?>
	<form method="post">
		<input type="hidden" name = "id" value="<?=$s['id']?>">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="searchTitle">Cím</label>
				<input type="text" class="form-control" id="searchTitle" name="title" value = "<?=$s['title']?>">
			</div>
			<div class="form-group col-md-6">
				<label for="searchKeywords">Kulcs szavak</label>
				<input type="text" class="form-control" id="searchKeywords" name="keywords" value = "<?=$s['keywords']?>">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="searchDescription">Leírás</label>
				<input type="text" class="form-control" id="searchDescription" name="description" value = "<?=$s['description']?>">
			</div>

		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
		    	<label for="searchLink">Link</label>
		    	<select class="form-control" id="searchLink" name="link" >
		      		<option value="http://localhost:8080/beadando/index.php"
		      		 	<?=$s['link'] == "http://localhost:8080/beadando/index.php" ? 'selected' : '' ?> >Home</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=Ifelev"
		      		 	<?=$s['link'] == "http://localhost:8080/beadando/index.php?P=Ifelev" ? 'selected' : '' ?>>I félev</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=IIfelev"
		      			<?=$s['link'] == "http://localhost:8080/beadando/index.php?P=IIfelev" ? 'selected' : '' ?>>II félév</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=userlist"
		      			<?=$s['link'] == "http://localhost:8080/beadando/index.php?P=userlist" ? 'selected' : '' ?>>Felhasználó lista</option>
		      		<option value="http://localhost:8080/beadando/index.php?P=Magprogea1"
		      			<?=$s['link'] == "http://localhost:8080/beadando/index.php?P=Magprogea1" ? 'selected' : '' ?>>I félév- Magprog I. tétel</option>
		    	</select>
		  	</div>
		</div>


		<button type="submit" class="btn btn-primary" name="addSearch">Hozzáadás</button>
	</form>
	<?php endforeach;?>
<?php endif; ?>