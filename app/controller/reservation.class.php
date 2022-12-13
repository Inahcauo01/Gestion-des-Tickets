<?php
require_once('C:\xamp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');
$db=new Database();
try{

if(isset($_POST["Enregistrer"])){
 $ticketNumber=$_POST["ticket-number"];
 $placeCatégorie=$_POST["place-catégorie"];
 $idUtilisateur=$_POST["id_utilisateur"];
 $param=[$ticketNumber,$placeCatégorie,$idUtilisateur];
//  $param=[$ticketNumber,$placeCatégorie,$idUtilisateur];
    $db->insertData("INSERT INTO reservation(nombre_place,catégorie,id_utilisateur) VALUES(?,?,?)",array($ticketNumber,$placeCatégorie,$idUtilisateur));
    header('location:../../public/pages/userdashboard.php');
}
}catch(Exception $e){
    $e->getMessage();
}





?>