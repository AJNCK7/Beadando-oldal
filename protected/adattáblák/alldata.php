<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>A jogosultsági szint nem megfelelő</h1>
<?php else : ?>
<h1> Felhasználók tábla</h1>
	<?php 
		if(array_key_exists('du', $_GET) && !empty($_GET['dz'])) {
			$query = "DELETE FROM users WHERE id = :id";
			$params = [':id' => $_GET['d']];
			require_once DATABASE_CONTROLLER;
			executeDML($query, $params);
		}

		if(array_key_exists('ds', $_GET) && !empty($_GET['ds'])) {
			$query = "DELETE FROM search WHERE id = :id";
			$params = [':id' => $_GET['ds']];
			require_once DATABASE_CONTROLLER;
			executeDML($query, $params);
		}			
	?>
<?php 
	$query = "SELECT id, first_name, last_name, email FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
?>	
	<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Keresztnév</th>
					<th scope="col">Vezetéknév</th>
					<th scope="col">Email</th>
					<th scope="col">Változtatás</th>
					<th scope="col">Törlés</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<td><?=$u['first_name'] ?></td>
						<td><?=$u['last_name'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><a href="?P=alldatas_usersedit&id=<?=$u['id']?>">Szerkesztés</a></td>
						<td><a href="?P=alldatas&du=<?=$u['id']?>">Törlés</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>

<h1> Keresés tábla</h1> <h4><a href="index.php?P=addkereseskeyword">Hozzáadás</a></h4>

<?php 
	$query = "SELECT * FROM search ";
	require_once DATABASE_CONTROLLER;
	$search = getList($query);
?>	
	<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Cím</th>
					<th scope="col">Leírás</th>
					<th scope="col">Kulcsszavak</th>
					<th scope="col">Szerkesztés</th>
					<th scope="col">Törlés</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($search as $s) : ?>
					<?php $i++; ?>
					<tr>
						<td><?=$s['title'] ?></td>
						<td><?=$s['description'] ?></td>
						<td><?=$s['keywords'] ?></td>
						<td><a href="?P=alldatas_searchedit&id=<?=$s['id']?>">Szerkesztés</a></td>
						<td><a href="?P=alldatas&ds=<?=$s['id']?>">Törlés</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
<?php endif; ?>

