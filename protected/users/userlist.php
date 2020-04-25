<?php 
	$query = "SELECT first_name, last_name, email FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
?>	
	<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Keresztnév</th>
					<th scope="col">Vezetéknév</th>
					<th scope="col">Email</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<td><a><?=$u['first_name'] ?></a></td>
						<td><?=$u['last_name'] ?></td>
						<td><?=$u['email'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>