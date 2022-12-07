<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
    <title>Gesion Matches</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect class="svg-logo-rect" width="50" height="50" rx="6" fill="#EB8153"></rect>
					<path class="svg-logo-path" d="M17.5158 25.8619L19.8088 25.2475L14.8746 11.1774C14.5189 9.84988 15.8701 9.0998 16.8205 9.75055L33.0924 22.2055C33.7045 22.5589 33.8512 24.0717 32.6444 24.3951L30.3514 25.0095L35.2856 39.0796C35.6973 40.1334 34.4431 41.2455 33.3397 40.5064L17.0678 28.0515C16.2057 27.2477 16.5504 26.1205 17.5158 25.8619ZM18.685 14.2955L22.2224 24.6007L29.4633 22.6605L18.685 14.2955ZM31.4751 35.9615L27.8171 25.6886L20.5762 27.6288L31.4751 35.9615Z" fill="white"></path>
				</svg>
                <svg class="brand-title" width="74" height="22" viewbox="0 0 74 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-logo-path" d="M0.784 17.556L10.92 5.152H1.176V1.12H16.436V4.564L6.776 16.968H16.548V21H0.784V17.556ZM25.7399 21.28C24.0785 21.28 22.6599 20.9347 21.4839 20.244C20.3079 19.5533 19.4025 18.6387 18.7679 17.5C18.1519 16.3613 17.8439 15.1293 17.8439 13.804C17.8439 12.3853 18.1519 11.088 18.7679 9.912C19.3839 8.736 20.2799 7.79333 21.4559 7.084C22.6319 6.37467 24.0599 6.02 25.7399 6.02C27.4012 6.02 28.8199 6.37467 29.9959 7.084C31.1719 7.79333 32.0585 8.72667 32.6559 9.884C33.2719 11.0413 33.5799 12.2827 33.5799 13.608C33.5799 14.1493 33.5425 14.6253 33.4679 15.036H22.6039C22.6785 16.0253 23.0332 16.7813 23.6679 17.304C24.3212 17.808 25.0585 18.06 25.8799 18.06C26.5332 18.06 27.1585 17.9013 27.7559 17.584C28.3532 17.2667 28.7639 16.8373 28.9879 16.296L32.7959 17.36C32.2172 18.5173 31.3119 19.46 30.0799 20.188C28.8665 20.916 27.4199 21.28 25.7399 21.28ZM22.4919 12.292H28.8759C28.7825 11.3587 28.4372 10.6213 27.8399 10.08C27.2612 9.52 26.5425 9.24 25.6839 9.24C24.8252 9.24 24.0972 9.52 23.4999 10.08C22.9212 10.64 22.5852 11.3773 22.4919 12.292ZM49.7783 21H45.2983V12.74C45.2983 11.7693 45.1116 11.0693 44.7383 10.64C44.3836 10.192 43.9076 9.968 43.3103 9.968C42.6943 9.968 42.069 10.2107 41.4343 10.696C40.7996 11.1813 40.3516 11.8067 40.0903 12.572V21H35.6103V6.3H39.6423V8.764C40.1836 7.90533 40.949 7.23333 41.9383 6.748C42.9276 6.26267 44.0663 6.02 45.3543 6.02C46.3063 6.02 47.0716 6.19733 47.6503 6.552C48.2476 6.888 48.6956 7.336 48.9943 7.896C49.3116 8.43733 49.517 9.03467 49.6103 9.688C49.7223 10.3413 49.7783 10.976 49.7783 11.592V21ZM52.7548 4.62V0.559999H57.2348V4.62H52.7548ZM52.7548 21V6.3H57.2348V21H52.7548ZM63.4657 6.3L66.0697 10.444L66.3497 10.976L66.6297 10.444L69.2337 6.3H73.8537L68.9257 13.608L73.9657 21H69.3457L66.6017 16.884L66.3497 16.352L66.0977 16.884L63.3537 21H58.7337L63.7737 13.692L58.8457 6.3H63.4657Z" fill="black"></path>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
						
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt="">
									<div class="header-info">
										<span>Johndoe</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="page-login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
				<div class="sub-header">
					<div class="d-flex align-items-center flex-wrap mr-auto">
						<h5 class="dashboard_bar">Dashboard</h5>
					</div>
					<div class="d-flex align-items-center">
						<a href="javascript:void(0);" class="btn btn-xs btn-primary light mr-1">Today</a>
						<a href="javascript:void(0);" class="btn btn-xs btn-primary light mr-1">Month</a>
						<a href="javascript:void(0);" class="btn btn-xs btn-primary light">Year</a>
					</div>
				</div>
			</div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<img src="images/Untitled-1.jpg" alt="">
						<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h5 class="name"><span class="font-w400">Hello,</span> Marquez</h5>
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e38e829192968699999999a38e828a8fcd808c8e">[email&#160;protected]</a></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.php">Dashboard Light</a></li>
							<li><a href="index-2.php">Dashboard Dark</a></li>
						</ul>

                    </li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					     <i class="fa-solid fa-chart-simple"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                         
                            <li><a href="chart-chartjs.php">Chartjs</a></li>
                            
                        </ul>
                    </li>
					
                    
                   
                 
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Table</span>
						</a>
                         <ul aria-expanded="false">
						    <li><a href="user-list-datatable.php">Users</a></li>
                            <li><a href="Equipe-list-datatable.php">Equipes</a></li>
                            <li><a href="Matches-list-datatable.php">Matches</a></li>
                            <li><a href="Ticketes-list-datatable.php">Ticketes</a></li>
							<li><a href="Stades-list-datatable.php">Stades</a></li>
                        </ul>
                    </li>
                 
                </ul>
				<div class="copyright">
					<p><strong>World cup tickets</strong> © 2022 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Namek</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
		<?php 
			require_once('../../app/loader.php');
			$resultStade = $stade->getAllrows('SELECT * FROM stade');

		?>
        <div class="content-body">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header d-sm-flex d-block">
						<div class="mr-auto mb-sm-0 mb-3">
							<h4 class="card-title mb-2">Liste des matches</h4>
							<!-- <span>Lorem Ipsum sit amet</span> -->
						</div>
						<button class="btn rounded-pill text-white" style="background:#8A1538" id="addmatch" data-bs-toggle="modal" data-bs-target="#modal-stade" onclick="handleModal()">
						<i class="fa fa-plus"></i> ajouter Stade</button>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table style-1" id="ListDatatableView">
								<thead>
									<tr>
										<th>#</th>
										<th>Nom du stade</th>
										<th>Capacité du stade</th>
										<th>Lieu du stade</th>
										<th>Actions</th>
										
									</tr>
								</thead>
								<tbody>
									<?php  foreach($resultStade as $stade): ?>
										<tr>
											<td>
												<h6><?=  $stade['id_stade'] ?></h6>
											</td>
											<td>
												<div class="media style-1">
													<img src="../assets/images/stades/<?=$stade['image']?>" class="img-fluid mr-2" alt="">
													<div class="media-body">
														<h6 id="stade-name-<?= $stade['id_stade'] ?>"><?= $stade['nom_stade'] ?></h6>
													</div>
												</div>
											</td>
											<td>
												<div>
													<h6 id="stade-capacity-<?= $stade['id_stade'] ?>"><?=  $stade['capacite'] ?></h6>
													
												</div>
											</td>
											<td>
												<div>
													<h6 id="stade-location-<?= $stade['id_stade'] ?>"><?=  $stade['lieu'] ?></h6>
													
												</div>
											</td>
											<td>
												<div class="d-flex action-button">
													<a href="javascript:void(0);" class="btn btn-info btn-xs light px-2" data-bs-toggle="modal" data-bs-target="#modal-stade" onclick="fillModal(<?=$stade['id_stade'] ?>)">
														<svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger" onclick="confirmDeletion()">
														<svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>

													</a>
												</div>
											</td>
										</tr>
									<?php endforeach ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        
<!-- MATCHE MODAL -->
<div class="modal fade" id="modal-stade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="form-stade">
					<div class="modal-header">
						<h5 id="modalTitle">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" name="stade_id" id="stade-id">
							<div class="mb-3">
								<label class="form-label">Nom du stade</label>
								<input type="text" class="form-control" id="stade-title" name="stade_name" required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Capacité du stade</label>
								<input class="form-control" name="stade_capacity" type="number"  id="stade-capacity" />
							</div>
							<div class="mb-3">
								<label class="form-label">Lieu du stade</label>
								<input type="text" class="form-control" id="stade-location" name="stade_location" required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Image du stade</label>
								<input type="file" class="form-control" id="stade-image" name="stade_image"/>
							</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<input type="submit" name="update_stadium" class="btn btn-warning stade-action-btn" id="btnUpdate" hidden value="Update">
						<input type="submit" name="save_stadium" 	class="btn btn-primary stade-action-btn" id="btnSave" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>




    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dbe94a6a5a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	
	
	<!-- Datatable -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/dashboard/CRUD.js"></script>

</body>
</html>