<?php require_once('../../database/connexion.php'); ?>
<?php
session_start();
$id = $_GET['delete'];

$sql = "UPDATE student SET is_active=0 WHERE id=$id";

if($connection) {
    $connection->exec($sql);
    $_SESSION['message'] = "The record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header('location: ../../control/list.php');
    exit();
}



?>