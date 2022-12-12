<?php
require_once('../../app/loader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>YouTickets</title>
</head>
<body>

<header class="header-landingpage" style="position:fixed;top:0;z-index:900;">
    <nav class="d-flex px-2 justify-content-between align-items-center nav-landingpage ">
      <a class="nav-logo" href="#">YouTickets.com</a>
      <ul id="nav-page" class="d-flex my-auto nav-pages ">
        <li><a class="me-2 about-page" href="#">About</a></li>
        <li><a class="ms-2 me-2 news-page" href="#">News</a></li>
        <li><a class="ms-2 me-2 tearms-page" href="#">Tearms</a></li>
        <li><a class="ms-2 me-2 contact-page" href="#">Contact</a></li>
      </ul>
      <ul id="nav-compt" class="d-flex  my-auto nav-compte">
        <li><a class="me-1 nav-login" href="pages/signin.php">Log In</a></li>
        <li><a class="ms-1 nav-Signup" href="pages/signin.php">Sign Up</a></li>
      </ul>
      <!-- <i class="fs-3 cursor-pointer fa-solid fa-bars header-menu"></i> -->
      <div class="header-menu">
        <span class="ligne"></span>
        <span class="ligne"></span>
        <span class="ligne"></span>
      </div>
    </nav>
  </header>
  

<!-- MAIN -->
<main class="container" style="margin-top:80px">
<div class="searchbar-Container p-1">
  <div class="searchBar">
        <form class="d-flex w-100 align-items-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div id="header-search">
              <input placeholder="search by events,name,location,and more" name="mot" class="p-3" type="search" required>
          </div>
          <div class="d-flex align-items-center date-container mt-1 ps-2" id="header-date">
              <input  name="dateDebut" type="date"><i class="mx-2 fa-sharp fa-solid fa-arrow-right"></i>
              <input  name="dateFin" type="date">
          </div>
          <button class="text-light" name="search" type="submit" id="submit-search"><i
              class="fs-6 fa-solid fa-magnifying-glass"></i></button>
        </form>
  </div>
</div>
  
<div class="d-flex row">
<?php
if(isset($_POST["search"])){
    $db = new Database();
    
    if(isset($_POST["dateDebut"]) && isset($_POST["dateFin"])){
      $sql = "SELECT * from matchs,stade where matchs.stade_id=stade.id_stade and id_equipe1 in (select id_equipe from equipe where nom_equipe like ?)";
      $resultSearch = $db->getAlrows($sql,["%".$_POST["mot"]."%"]);
    }
    else{
      $sql .= " and date_match BETWEEN ? and ? ";
      $resultSearch = $db->getAlrows($sql,["%".$_POST["mot"]."%", "".$_POST["dateDebut"]."" , "".$_POST["dateFin"].""]);
    }
    foreach($resultSearch as $res){
      $sql1="SELECT nom_equipe FROM equipe where id_equipe= ?";
      $equipeNom1 = $db->getRow($sql1, [$res["id_equipe1"]]);

      $sql2="SELECT nom_equipe FROM equipe where id_equipe= ? ";
      $equipeNom2 = $db->getRow($sql2, [$res["id_equipe2"]]);

      $image = (!empty($res['image_match'])) ? './images/uploads/'.$res["image_match"] : './images/uploads/aucune.jpg';

?>

    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body d-flex">
                <div class="text-center p-3">
                    <?php 
                    $date = new DateTime($res["date_match"]);
                    echo $date->format('M')."<br>".$date->format('d');
                    ?>
                </div>
                <div>
                    <div><?php echo $equipeNom1["nom_equipe"]." vs ".$equipeNom2["nom_equipe"]?></div>
                    <div>$ <?php echo $res["prix_match"] ?></div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i><?php echo $res["nom_stade"] ?></div>
                </div>
            </div>
        </div>
    </a>

    <?php
    }}
?>
</div>
<!-- Equipes -->
<div class="d-flex row">
<?php
  if(isset($_POST["mot"])){
    $sql="SELECT * from equipe where nom_equipe like ?";
    $resultE = $match_parent->getAlrows($sql,["%".$_POST["mot"]."%"]);
    $resRow = $match_parent->numberRow($sql,["%".$_POST["mot"]."%"]);
    foreach($resultE as $equipe){
        
    $image = (!empty($equipe['image'])) ? './pages/images/uploads/'.$equipe["image"] : './pages/images/uploads/aucune.jpg';
    if($resRow>0)
    echo "<h3>Les equipes</h3>";
    
?>
    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body">
                <div><?php echo $equipe["nom_equipe"] ?></div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> <?php echo $equipe["nom_equipe"] ?></div>
            </div>
        </div>
    </a>
<?php
    }}
?>
</div>
<!-- Stades -->
<div class="d-flex row">
<?php
if(isset($_POST["mot"])){
    $sql="SELECT * from stade where nom_stade like ?";
    $resultE = $match_parent->getAlrows($sql,["%".$_POST["mot"]."%"]);
    $resRow = $match_parent->numberRow($sql,["%".$_POST["mot"]."%"]);
    foreach($resultE as $stade){
        
    $image = (!empty($stade['image'])) ? './pages/images/uploads/'.$stade["image"] : './pages/images/uploads/aucune.jpg';
    if($resRow>0)
    echo "<h3>Les stades</h3>";
    
?>
    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body">
                <div><?php echo $stade["nom_stade"] ?></div>
                <div>Capacity : <?php echo $stade["capacite"] ?></div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> <?php echo $stade["lieu"] ?></div>
            </div>
        </div>
    </a>
<?php
    }}
?>
</div>

</main>

<!-- Footer -->
<?php include_once '../components/footer.php'; ?>

<!-- scripts -->
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

<!-- 
  reservation 
  la recherche (en cours)

  edit profile 
  statistique
  diagram de sequences
 -->