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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-item nav-link" href="home-guru.php">Home</a>
            <a class="nav-item nav-link" href="program-guru.php">Classes</a>
            <a class="nav-item nav-link active" href="tugas-guru.php">Assignment</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>  (<?php echo $_SESSION['level'] ?>)</a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->
  <h1 class="text-center mx-4"> Assignment </h1>
            <section class=" mx-auto w-75  ">
              <!-- tabel starts -->
                    <?php 
                    $no=1;
                    $jumlah=0;
                    $dirUpload = "terupload/";
                    include "koneksi.php";
                    $a = "SELECT * FROM tugas";
                    $b=$koneksi->query($a);
                    while (($c=$b->fetch_array())) { 
                      $jumlah = $jumlah+1; 
                      $namafile = $c['namafile'];
                      ?>

                    <div class="card mb-4" style="width: 100%;">
                      <div class="card-header">
                        <?php echo $c['judul']; ?>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $c['deskripsi']; ?></li>
                        <li class="list-group-item"><?php echo $c['deadline']; ?></li>
                        <li class="list-group-item"><?php echo "Link: <a href='".$dirUpload.$namafile."'>".$namafile."</a>"; ?></li>
                      </ul>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                      <a href="edit-tugas.php?kode=<?php echo $c['kode']; ?>" class="btn btn-warning">Edit Data</a>
                      <a href="delete-tugas.php?kode=<?php echo $c['kode']; ?>" class="btn btn-primary">Hapus Data</a>
                    </div>
                    <?php
                                          }
                    echo " Jumlah Seluruh tugas :",$jumlah;
                    ?></p>

              <!-- buttons -->
              <a href="form-tugas.php" class="btn btn-primary mb-4">Tambah Data</a>

              <!-- buttons ends -->
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