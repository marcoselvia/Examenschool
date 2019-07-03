<?php require_once('../../database/connexion.php'); ?>

<?php

if(isset($_POST['save'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO subject VALUES (null, null, '$name' , 1)";
    
    if($connection) {
        $connection->exec($sql);
    }

    header('location: ../../cursos/courseList.php');
}
?>