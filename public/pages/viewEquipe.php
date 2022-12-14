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
      <?php
        if(!isset($_SESSION["email"]) && !isset($_SESSION["emailadmin"]) ){
        ?>
        <li><a class="me-1 nav-login" href="pages/signin.php">Log In</a></li>
        <li><a class="ms-1 nav-Signup" href="pages/signin.php">Sign Up</a></li>
        <?php }else{
            if(isset($_SESSION["email"])){
            ?>
            <li><a class="me-1 nav-login" href="pages/userdashboard.php">Mon compte</a></li>
            <?php }else if(isset($_SESSION["emailadmin"])){
              ?>
            <li><a class="me-1 nav-login" href="pages/user-list-datatable.php">Mon compte</a></li>
              <?php
            }?>
            <li><a class="me-1 nav-Signup" href="d??conexion.php">D??connexion</a></li>
         <?php
            }?>
      </ul>
      <!-- <i class="fs-3 cursor-pointer fa-solid fa-bars header-menu"></i> -->
      <div class="header-menu">
        <span class="ligne"></span>
        <span class="ligne"></span>
        <span class="ligne"></span>
      </div>
    </nav>
    <div class="search-bar my-auto">
      <form class="d-flex w-100 align-items-center" action="">
        <div id="header-search"><input placeholder="search by events,name,location,and more" type="search"></div>
            <div class="d-flex align-items-center date-container mt-1 ps-2" id="header-date">
                <input value="select date" type="date"><i class="mx-2 fa-sharp fa-solid fa-arrow-right"></i>
                <input placeholder="select date" type="date">
            </div>
        <button class="text-light" type="submit" id="submit-search"><i
            class="fs-6 fa-solid fa-magnifying-glass"></i><span>search</span></button>
      </form>
    </div>
  </header>

<!-- MAIN -->
<main class="container" style="margin-top:60px">
<h4 class="part-title pt-4">Listes des equipes</h4>
<div class="d-flex row">
<?php
    $sql="SELECT * from equipe";
    $resultE = $match_parent->getAllrows($sql);
    foreach($resultE as $equipe){
        
    $image = (!empty($equipe['image'])) ? '../../public/assets/upload_image/'.$equipe["image"] : './pages/images/uploads/aucune.jpg';
?>
    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body">
                <div><?php echo $equipe["nom_equipe"] ?></div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </a>
<?php
    }
?>
</div>
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