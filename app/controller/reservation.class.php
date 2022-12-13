<?php
require_once('C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');
require_once('C:\xampp\htdocs\Gestion-des-Tickets\phpqrcode\qrlib.php');
$db=new Database();
try{

if(isset($_POST["Enregistrer"])){
    

//  $ticketNumber=$_POST["ticket-number"];
//  $placeCatégorie=$_POST["place-catégorie"];
//  $idUtilisateur=$_POST["id_utilisateur"];

//     $filename=$idUtilisateur.''.$placeCatégorie.'.png';
//     $codecontent=md5($idUtilisateur);
//     $codecontent.=md5("Qtar2022");
//     $chemin='../../public/pages/images/Qrcode/'.$filename;
//     if(!file_exists($chemin)){
//         QRcode::png($codecontent,$chemin,'H',4,4);
//     }

//  $param=[$ticketNumber,$placeCatégorie,$idUtilisateur,$filename];
    $db->insertData("INSERT INTO reservation(id_reservation, nombre_place,catégorie,id_utilisateur,qr_code) VALUES(NULL,?,?,?,?)",array(12,100,46,'iou.png'));
    header('location:../../public/pages/userdashboard.php');
}
}catch(Exception $e){
    $e->getMessage();
}





?>