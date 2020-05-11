<?php 
	$ID = $_SESSION['uid'];

	$query = "SELECT id, first_name, last_name, email FROM users WHERE id = $ID";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>	
	<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Keresztnév</th>
					<th scope="col">Vezetéknév</th>
					<th scope="col">Email</th>
					<th scope="col">Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<td><a><?=$u['last_name'] ?></a></td>
						<td><?=$u['first_name'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><a href="?P=edit_userdatas">Edit</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>


