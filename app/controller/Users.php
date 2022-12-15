<?php
// require_once('../app/model/Database.class.php');
require_once('C:\xamp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');

$db=new Database();
$erreurSignin="";
if(isset($_POST["login"])){
   $email=$_POST["email"];
   $passWord=$_POST["password"];
   $param=[$email,$passWord];
   $so=$db->numberRow("SELECT * FROM utilisateur WHERE email=? AND password=?",$param);
   if($so!=0){
    if($email=="marksemony@gmail.com" && $passWord=="eRROR404@"){
    $_SESSION["emailadmin"]=$email;
    header('location:../../public/pages/user-list-datatable.php');
   }else{
    $_SESSION["email"]=$email;
    header('location:../pages/reservation.php');
   }
   }else{
    $erreurSignin="Invalid email or password";
   }
}
try{
if(isset($_POST["update"])){
    $role=$_POST["user-role"];
    $id=$_POST["modal-id"];
    $param=array($role,$id);
    $db->updateData("UPDATE utilisateur set role_u=? WHERE id=?",$param);
    $_SESSION["update"]="ligne has updated successfuly";
}
}catch(Exception $e){
    echo "Erreur de".$e->getMessage();
}
try{
if(isset($_POST["delete"])){
    $id=$_POST["id_delete"];
    $param=array($id);
    $db->deleteData("DELETE FROM utilisateur WHERE id=?",$param);
    $_SESSION["delete"]="ligne has deleted successfuly";
}}catch(Exception $e){
    echo "Erreur de".$e->getMessage();
}

$erreur="";
if(isset($_POST["signup"])){
    $firstName=$_POST["first-name"];
    $lastName=$_POST["last-name"];
    $telephone=$_POST["telephone"];
    $signupemail=$_POST["signupemail"];
    $signuppassword=$_POST["signuppassword"];
    $so1=$db->numberRow("SELECT * FROM utilisateur WHERE email=?",array($signupemail));
    $so2=$db->numberRow("SELECT * FROM utilisateur WHERE telephone=?",array($telephone));
    if($so1!=0){
        $erreur="this email are exist";
    }
    if($so2!=0){
        $erreur.="this telephone number are exist";
    }else if($so1==0 && $so2==0){
        $db->insertData("INSERT INTO utilisateur(nom,prenom,telephone,role_u,email,password) VALUES(?,?,?,?,?,?)",array($firstName,$lastName,$telephone,2,$signupemail,$signuppassword));
    }
}
    if(isset($_POST["updateinfoUser"])){
        $idProfil=$_POST["profile-id"];
        $nomProfil=$_POST["Profil-Nom"];
        $prenomProfil=$_POST["Profil-prenom"];
        $telephoneProfil=$_POST["Profil-telephone"];
        $emailProfil=$_POST["Profil-email"];
        $passwordProfil=$_POST["Profil-password"];
        $param=array($nomProfil,$prenomProfil,$telephoneProfil,$emailProfil,$passwordProfil,$idProfil);
        $db->updateData("UPDATE utilisateur set nom=?,prenom=?,telephone=?,email=?,password=? WHERE id=?",$param);
        $_SESSION["UpdateProfile"]="Profile has updated succesfully";
    }
    if(isset($_POST["updateinfoadmin"])){
        $idProfil=$_POST["admin-id"];
        $nomProfil=$_POST["admin-Nom"];
        $prenomProfil=$_POST["admin-prenom"];
        $telephoneProfil=$_POST["admin-telephone"];
        $emailProfil=$_POST["admin-email"];
        $passwordProfil=$_POST["admin-password"];
        $param=array($nomProfil,$prenomProfil,$telephoneProfil,$emailProfil,$passwordProfil,$idProfil);
        $db->updateData("UPDATE utilisateur set nom=?,prenom=?,telephone=?,email=?,password=? WHERE id=?",$param);
        $_SESSION["UpdateProfileadmin"]="Profile has updated succesfully";
    }
?>