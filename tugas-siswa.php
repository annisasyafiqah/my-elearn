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
        <a class="navbar-brand" href="home-siswa.php"><img src="Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-item nav-link" href="home-siswa.php">Home</a>
            <a class="nav-item nav-link " href="program-siswa.php">Programs</a>
            <a class="nav-item nav-link active" href="tugas-siswa.php">Assignment</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-siswa.php"><img src="user.png" width="20px" height="20px" class="mr-2">Hi, <?php echo $_SESSION['namadepan']; ?></a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->
 <h1 class="text-center mx-4"> Tugas Saya</h1>
            <section class=" mx-auto w-75  ">
              <!-- tabel starts -->
                    <?php 
                    $no=1;
                    $jumlah=0;
                    $dirUpload = "terupload/";
                    include "koneksi.php";
                    $a = "SELECT * FROM tugas INNER JOIN pelajaran ON tugas.kodepelajaran = pelajaran.id_pelajaran";
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
                        <li class="list-group-item">Deadline : <?php echo $c['deadline']; ?></li>
                        <li class="list-group-item">Download File : <?php echo "<a href='".$dirUpload.$namafile."'>".$namafile."</a>"; ?></li>
                        <li class="list-group-item">Pelajaran : <?php echo $c['nama']; ?></li>
                      </ul>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                      <a href="kerja-tugas.php?kode=<?php echo $c['kode']; ?>" class="btn btn-success">Kerjakan</a>
                    </div>
                    <?php
                                          }
                    echo " Jumlah Seluruh tugas :",$jumlah;
                    ?></p>

              <!-- buttons ends -->
              </section>
    <!-- main ends -->
    <!-- Copyright -->
              <div class="text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
                    Copyright © 2022. All rights reserved.
              </div>
    <!-- Copyright -->


  </body>
</html>