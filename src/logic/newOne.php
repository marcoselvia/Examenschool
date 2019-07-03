<?php require_once('../../database/connexion.php'); ?>

<?php
session_start();
if(isset($_POST['save'])) {
    
    $name = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];

    $sql = "INSERT INTO student VALUES (null, null, '$name' , '$birthdate', 1)";

     if($connection) {
        $connection ->exec($sql);

        $_SESSION['message'] = "The record has been saved";
        $_SESSION['msg_type'] = "success";
        
        header('location: ../../control/list.php');
        exit();
    } else {
        
        $_SESSION['message'] = "There was an error";
        $_SESSION['msg_type'] = "danger";
        header('location: ../../control/list.php');
        exit();
        
    }
}
?>