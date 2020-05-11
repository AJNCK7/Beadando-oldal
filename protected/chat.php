	<?php
	$query = "SELECT id, knév, message FROM chatmessages ORDER BY id ";
	require_once DATABASE_CONTROLLER;
	$messages = getList($query);
	?>
	
	<div id="chat">
			<?php $i = 0; ?>
			<?php foreach ($messages as $m) :?>
				<?php $i++; ?>
				<p><?=$m['knév'] ?>
				<?=$m['message'] ?> </p>
			<?php endforeach; ?>
	</div>

	<?php
		$Knev = $_SESSION['fname'];
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addMessage'])) {
		$postData = [
			'message' => $_POST['message']
		];

		if(empty($postData['message'])){
			echo "Hiányzó szöveg!";
		}
		else
		{
			$query = "INSERT INTO chatmessages (message, knév) VALUES (:message, :Knev)";
			$params = [
				':message' => $postData['message'],
				':Knev' => $Knev
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php?P=chat');
		}
	}
	?>
	<form method="post">
			<div class="form-group">
		    	<textarea class="form-control" id="chatMessage" name="message" rows="2" placeholder="Üzenet..."></textarea>
		  	</div>
		<button type="submit" class="btn btn-primary" name="addMessage">Küldés</button>
	</form>