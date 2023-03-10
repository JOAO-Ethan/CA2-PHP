<?php require_once('database/database.php');
$query = 'SELECT id FROM mineral ORDER BY RAND() LIMIT 6';
$statement = $db->prepare($query);
$statement->execute();
$mineral = $statement->fetch();
$statement->closeCursor();

header("Location:mineral.php?id=".$mineral['id']);
?>