<?php

require_once 'C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php';
$stade = new Database;
if(isset($_POST['save_stadium'])){
    $params = [$_POST['stade_name'],$_POST['stade_capacity'],$_POST['stade_location'],$_POST['stade_image']];
    $query = "INSERT INTO stade(nom_stade , capacite , lieu , image)  VALUES(? , ? , ? , ?)";
    $stade->insertData($query , $params);
}

if(isset($_POST['update_stadium'])){
    $params = [$_POST['stade_name'],$_POST['stade_capacity'],$_POST['stade_location'] , $_POST['stade_id']];

    $query = "UPDATE stade SET nom_stade = ? , capacite = ? , lieu = ? WHERE id_stade = ?";
    $stade->updateData($query,$params);
   
}




?>