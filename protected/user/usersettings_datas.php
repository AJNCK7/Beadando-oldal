	<?php
		$ID = $_SESSION['uid'];
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editUser'])) {
		$postData = [
			'id' => $_POST['id'],
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email'],
		];

		if(empty($postData['first_name']) || empty($postData['last_name']) || empty($postData['email'])) {
			echo "Hiányzó adat(ok)!";
		} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
			echo "Hibás email formátum!";
		} else {
			$query = "UPDATE users SET first_name = :first_name, last_name = :last_name, email= :email WHERE id = $ID";
			$params = [
				':first_name' => $postData['first_name'],
				':last_name' => $postData['last_name'],
				':email' => $postData['email'],
				];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
	}
	$query2 = "SELECT id, first_name, last_name, email FROM users WHERE id = :id ";
	$params2 = [':id' => $ID];
	require_once DATABASE_CONTROLLER;
	$users = getList($query2, $params2);
	?>
	
<?php foreach ($users as $u) : ?>
	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="userFirstName">Keresztnév</label>
				<input type="text" class="form-control" id="userFirstName" name="first_name" value = "<?=$u['first_name']?>">
			</div>
			<div class="form-group col-md-6">
				<label for="userLastName">Vezetéknév</label>
				<input type="text" class="form-control" id="userLastName" name="last_name" value="<?=$u['last_name']?>">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="userEmail">Email</label>
				<input type="email" class="form-control" id="userEmail" name="email" value="<?=$u['email']?>">
			</div>
		</div>
		
		<button type="submit" class="btn btn-primary" name="editUser">Módosítás mentése</button>
	</form>
	<?php endforeach;?>