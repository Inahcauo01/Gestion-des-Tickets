<?php

require_once 'C:\xamp\htdocs\Gestion-des-Tickets\app\model\Database.class.php';
$stade = new Database;
if(isset($_POST['save_stadium'])){
    $params = [$_POST['stade_name'],$_POST['stade_capacity'],$_POST['stade_location'],$_POST['stade_image']];
    $query = "INSERT INTO stade(nom_stade , capacite , lieu , image)  VALUES(? , ? , ? , ?)";
    $stade->insertData($query , $params);
}

if(isset($_POST['update_stadium'])){
    if(empty($_POST['stade_image'])){
        $params = [$_POST['stade_name'],$_POST['stade_capacity'],$_POST['stade_location'] , $_POST['stade_id']];
        $query = "UPDATE stade SET nom_stade = ? , capacite = ? , lieu = ? WHERE id_stade = ?";
        $stade->updateData($query,$params);
    }
    else{
        $params = [$_POST['stade_name'],$_POST['stade_capacity'],$_POST['stade_location'] , $_POST['stade_image'] ,$_POST['stade_id']];
        $query = "UPDATE stade SET nom_stade = ? , capacite = ? , lieu = ? , image = ? WHERE id_stade = ?";
        $stade->updateData($query,$params);
    }

   
}

if(isset($_POST['delete'])) {
    $params = [$_POST['delete']];
    $res = $stade->getRow("SELECT * FROM matchs WHERE stade_id = ?",$params);
    if(!$res){
        $query = "DELETE FROM stade WHERE id_stade = ?";
        $stade->deleteData($query,$params);
    }
    else {
        echo "Cannot delete item";
    }
    
}




?>