<?php 
	$output = '';
	if (isset($_POST['keresesresult']) && $_POST['keresesresult'] !== ' ') 
		{
		$search = $_POST['keresesresult'];

		$query = "SELECT * FROM search WHERE keywords LIKE '%$search%' || title LIKE '%$search%'";
		require_once DATABASE_CONTROLLER;
		$searchlist = getList($query);

		$db = 0; 
			foreach ($searchlist as $sl) {
				$db++;
			}

		if ($db == 0) {
			print("nincs találat '$search' ");
		}
		else{
		foreach ($searchlist as $sl) 
			{
				$id = $sl['id'];
				$title = $sl['title'];
				$description = $sl['description'];
				$link = $sl['link'];

				$output .= '<a href="' .$link. '">
								<h2>' .$title. '</h2>
								<p>' .$description. '</p> </a>'; 
			}
		}
		}
	print("$output");
?>