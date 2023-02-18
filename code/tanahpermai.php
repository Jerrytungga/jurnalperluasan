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
        <a href="index.php" data-back-button class="header-title header-subtitle">Back to Pages</a>
        <a href="index.php" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <!-- <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a> -->
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>JADWAL</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="index.php" data-back-button><i class="fa fa-arrow-left"></i></a>Good Land Book</h2>
            <a href="index.php" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        <div class="card card-style text-center">
            <div class="content pt-4 pb-4">
            <div class="card-body" style="height: 350px;overflow: scroll;">
            <table id="example" class="table" >
  <tbody>
  <?php
    $p = 1;
    $ambildata_tanah_permai = mysqli_query($conn,"SELECT * FROM `tb_tanah_permai` order by time_ DESC");
    foreach ($ambildata_tanah_permai as $row) :
    ?>
    <tr>
    <td><?= $p; ?></td>
    <td><?= $row['date']; ?></td>
      <td><button class="btn btn-success">Lihat</button></td>
      <td>
      <a id="edit" type="button" class="btn"  style="background-color: #FFC93C; color:#1A0000;" data-toggle="modal" data-target="#edittanahpermai" data-idpermai="<?= $row['id_permai']; ?>" data-ayat="<?= $row['Ayat']; ?>" data-da="<?= $row['Da']; ?>" data-dt="<?= $row['Dt']; ?>" data-ds="<?= $row['Ds']; ?>" data-pengalaman="<?= $row['Pengalaman_']; ?>">
Edit
</a>
<!-- Modal -->
<div class="modal fade" id="edittanahpermai" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #FFC93C;  color:#1A0000;">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Tanah Permai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  id="modal-edit">
       <form action="" method="post">
        <input type="hidden" name="id__permai" id="idpermai">
        <div>
            <label for="">Ayat :</label>
            <textarea name="ayat" class="form-control" id="ayat" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Apresiasi :</label>
            <textarea name="dA" class="form-control" required id="da" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Terang :</label>
            <textarea name="dT" class="form-control" required id="dt" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Syafaat :</label>
            <textarea name="dS" class="form-control" id="ds" required cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Pengalaman :</label>
            <textarea name="Pengalaman_" class="form-control" required id="pengalaman" cols="4" rows="4"></textarea>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="ubah" class="btn btn-success">Update</button>
    </div>
</form>
    </div>
  </div>
</div>
      </td>
    </tr>
   
    <?php $p++; ?>
                     <?php endforeach; ?>
  </tbody>
</table>
            </div>
            </div>
        </div>
        


       
        <!-- footer and footer card-->
     
    <!-- end of page content-->
    
    
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
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">  
    </div>
    

    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script>
         $(document).on("click", "#edit", function() {
      let idpermai = $(this).data('idpermai');
      let ayat = $(this).data('ayat');
      let da = $(this).data('da');
      let dt = $(this).data('dt');
      let ds = $(this).data('ds');
      let pengalaman = $(this).data('pengalaman');
      $(" #modal-edit #idpermai").val(idpermai);
      $(" #modal-edit #ayat").val(ayat);
      $(" #modal-edit #da").val(da);
      $(" #modal-edit #dt").val(dt);
      $(" #modal-edit #ds").val(ds);
      $(" #modal-edit #pengalaman").val(pengalaman);


    });
    </script>
</body>
</html>
