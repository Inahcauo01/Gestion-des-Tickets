<?php
require_once('C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');
require_once('C:\xampp\htdocs\Gestion-des-Tickets\phpqrcode\qrlib.php');
$db=new Database();
try{
if(isset($_POST["Enregistrer"])){
    
 $idmatch=$_POST["id_match"];
 $ticketNumber=$_POST["ticket-number"];
 $placeCatégorie=$_POST["place-catégorie"];
 $idUtilisateur=$_POST["id_utilisateur"];
    $filename=$idUtilisateur.''.mt_rand(100000,9999999).'.png';
    $codecontent=md5($idUtilisateur.''.mt_rand(100000,9999999));
    $chemin='../../public/pages/images/Qrcode/'.$filename;
    if(!file_exists($chemin)){
        QRcode::png($codecontent,$chemin,'H',4,4);
    }

    $db->insertData("INSERT INTO reservation(nombre_place,catégorie,id_utilisateur,id_matchr,qr_code) VALUES(?,?,?,?,?)",array($ticketNumber,$placeCatégorie,$idUtilisateur,$idmatch,$filename));
   header('location: userdashboard.php');
}
}catch(Exception $e){
    $e->getMessage();
}





?>