<?php

include_once('index.php');

$id = $_POST['id'] ?? null;

if(!$id){
    header('Locatoion: create.php');
    exit;
}

$statement = $conn->prepare("DELETE FROM user_tbl WHERE u_id = :id");
$statement -> bindValue(':id', $id);
$statement -> execute();

header('Location: index.php');


// echo "FILES: ";
// var_dump($id);
// echo '</pre>';

?>
