<?php
include 'koneksi.php';
session_start();
if (isset($_POST['login'])) {
    $mail = htmlspecialchars($_POST['username']);
    $Sandi = htmlspecialchars($_POST['sandi']);
    $sqlitraines = "SELECT * FROM traines WHERE username ='$mail' and sandi='$Sandi'";
    $result_traines = mysqli_query($conn, $sqlitraines);
    if ($result_traines->num_rows > 0) {
      $row1 = mysqli_fetch_assoc($result_traines);
      $_SESSION['id'] = $row1['nip'];
      if ($result_traines) {
        header("Location: code/index.php");
      }
    }
};
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>JURNAL PERLUASAN</title>
<link rel="stylesheet" type="text/css" href="code/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="code/styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="code/fonts/css/fontawesome-all.min.css">    
<!-- <link rel="manifest" href="code/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js"> -->
<!-- <link rel="apple-touch-icon" sizes="180x180" href="code/app/icons/icon-192x192.png"> -->
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
  
 
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="index.php" data-back-button><i class="fa fa-arrow-left"></i></a>MASUK</h2>
            <!-- <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a> -->
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        <form action="" method="post">

            <div class="card card-style">
                <div class="content mt-2 mb-0">
                    <div class="input-style has-icon input-style-1 input-required pb-1">
                        <i class="input-icon fa fa-user color-theme"></i>
                        <span>Username</span>
                        <em>(required)</em>
                        <input type="text" name="username" placeholder="Username">
                    </div> 
                    <div class="input-style has-icon input-style-1 input-required pb-1">
                        <i class="input-icon fa fa-lock color-theme"></i>
                        <span>Password</span>
                        <em>(required)</em>
                        <input type="password" name="sandi" placeholder="Password">
                    </div> 
                    <button type="submit" name="login" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900">Masuk</button>
                  
                </form>

            

               
            </div>
            
        </div>

       
       
    <!-- end of page content-->
    
   
   
    
    
</div>    


<script type="text/javascript" src="code/scripts/jquery.js"></script>
<script type="text/javascript" src="code/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="code/scripts/custom.js"></script>
</body>
