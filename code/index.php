<?php
include '../koneksi.php';
include 'session.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<?php
include 'head.php';
?>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="index.php" class="header-title">JURNAL LIVING</a>
        <a href="" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <!-- <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a> -->
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>JADWAL</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-large">
            <h2 data-username="<?= $data['name']?>" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        

<?php
var_dump($id);
?>

        <!-- Homepage Slider-->
        <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Benjamin Franklin</h1>
                    <p class="boxed-text-xl">
                        "Jangan tunda pekerjaanmu sampai besok, sementara kau bisa mengerjakannya hari ini."
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/17m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Bangkit</h1>
                    <p class="boxed-text-xl">
                        "Menjadi kuat bukan berarti kamu tidak pernah lelah. Itu hanya berarti kamu memiliki kekuatan untuk bangkit kembali setelah beristirahat."
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/8m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Don't look back with regret</h1>
                    <p class="boxed-text-xl">
                        "Don't look back with regret, look forward with hope.”
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/14m.jpg"></div>
            </div>
        </div>

      

        

      

       
        
      
    
        
    
        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">JURNAL PERLUASAN</h5>
            <!-- <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a> -->
            <div class="clearfix"></div>
        </div>

        <div class="double-slider text-center owl-carousel owl-no-dots">
            <div class="item bg-theme rounded-m shadow-m">
            <svg class="mt-4 mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
                <h5 class="font-16">BIBLE READING</h5>
                <p class="line-height-s font-11">
                   Pembacaan Alkitab <br>Wajib di isi!!
                   <button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
  isi
</button>
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="book" data-feather-line="1" data-feather-size="45" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i>
                <h5 class="font-16">GOOD LAND</h5>
                <p class="line-height-s font-11">
                    Tanah Permai <br>Wajib di isi!!
                    <?php
         $ambildatatanahpermai = mysqli_query($conn,"SELECT * FROM `tb_tanah_permai`  where `nip`='$id'");
         $ambil_nip = mysqli_fetch_array($ambildatatanahpermai);
         if ($ambil_nip['nip'] == 0) {  ?>
<button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
    isi
    </button>
       <?php  } else { ?>

<a href="tanahpermai.php" class="btn mt-1 btn-xs btn-success btn-center-xs rounded-s shadow-s text-uppercase font-900">Lihat</a>
    <?php   }
        ?>
 
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="book" data-feather-line="1" data-feather-size="45" data-feather-color="green1-dark"  data-feather-bg="yellow1-fade-light"></i>
                <h5 class="font-16">Prayer</h5>
                <p class="line-height-s font-11">
                    Buku Doa <br>Wajib di isi!!
                    <button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
  isi
</button>
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="sun" data-feather-line="1" data-feather-size="45" data-feather-color="yellow1-dark" data-feather-bg="green1-fade-light"></i>
                <h5 class="font-16">Morning Revival</h5>
                <p class="line-height-s font-11">
                    Penyegaran Pagi <br> Wajib di isi!!
                    <a href="#" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900">View</a>
                </p>
            </div>
        </div>
        
        <div class="card card-style mt-4 shadow-l" data-card-height="150">
            <div class="card-center pl-3 pr-3">
                <h4 class="color-white">Kolose 3:23</h4>     
                <p class="color-white mb-0 opacity-60">
                
Apa pun juga yang kamu perbuat, perbuatlah dengan segenap hatimu seperti untuk Tuhan dan bukan untuk manusia.
                </p>
            </div>
            <div class="card-overlay bg-highlight opacity-90"></div>
        </div>
        
      
       
        
     
    <!-- end of page content-->
   <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-highlight">
        <h5 class="modal-title text-light" id="staticBackdropLabel">Masukan Tanah Permai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
        <div>
            <label for="">Ayat :</label>
            <textarea name="ayat" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Apresiasi :</label>
            <textarea name="DA" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Terang :</label>
            <textarea name="DT" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Syafaat :</label>
            <textarea name="DS" class="form-control" id="" required cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Pengalaman :</label>
            <textarea name="pengalaman" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </div>
</form>
    </div>
  </div>
</div>
    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-left menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-welcome"
         data-menu-effect="menu-over">  
    </div>
    
 

  

    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
