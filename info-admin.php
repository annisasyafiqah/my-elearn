<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Home</title>

  </head>
  <body>
    <?php session_start() ?>
  <!-- Navbar Start -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-item nav-link" href="home-Admin.php">Dashboard</a>
            <a class="nav-item nav-link active" href="info-admin.php">Information</a>
            <a class="nav-item nav-link"  href="data-pelajaran.php">Courses</a>
            <a class="nav-item nav-link" href="user.php">Users</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-admin.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->
        <h1 class="text-center mx-4 mb-4"> Informasi </h1>
           <section class=" mx-auto w-75 "> 
              <?php 
                include "koneksi.php";
                $dirUpload = "terupload/";
                $a = "SELECT * FROM informasi";
                $b=$koneksi->query($a);
                while (($c=$b->fetch_array())) {
                $namafile = $c['namafile'];
                $link = $dirUpload.$namafile;
              ?>

            <div class="card text-center mb-3">
              <div class="card-header">
                <h5><?php echo $c['judul']; ?></h5>
              </div>
              <div class="card-body">
                <p class="card-text"><?php echo $c['konten']; ?></p>
                <a href="<?php echo $dirUpload.$namafile ?>" class="btn btn-primary">Lihat PDF</a>
              </div>
              <div class="card-footer text-muted">
                <?php echo $c['tanggal']; ?>
              </div>
            </div>
            <div class="container-fluid">
            <a href="edit-info.php?id_info=<?php echo $c['id_info']; ?>" class="btn btn-warning mb-5">Edit Informasi</a>
            <a href="delete-info.php?id_info=<?php echo $c['id_info']; ?>" class="btn btn-danger mb-5">Hapus Informasi</a>
            </div>
              <?php
                  }
              ?>
          <a href="tambah-info-admin.php" class="btn btn-primary mb-5 align-items-center mx-auto">Tambah Informasi</a>
          </section>
             <!-- Copyright -->
              <div class="text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
                    Copyright © 2022. All rights reserved.
              </div>
              <!-- Copyright -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 






  </body>
</html>