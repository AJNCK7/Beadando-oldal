<?php
function getConnection() {
	$connection = new Beadando(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
	$connection->exec("SET NAMES '".DB_CHARSET."'");
	return $connection;
}

function getRecord($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetch(Beadando::FETCH_ASSOC) : [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}

function getList($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetchAll(Beadando::FETCH_ASSOC) : [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}

function executeDML($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$statement->closeCursor();
	$connection = null;
	return $success;
}

function getField($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetch()[0]: [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}
?>