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
        <a class="navbar-brand" href="home-guru.php"><img src="Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-item nav-link active" href="home-guru.php">Dashboard</a>
            <a class="nav-item nav-link " href="info-guru.php">Information</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->

  <!--Main Navigation-->
          <header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="ixa-guru.php" class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Materi</span>
                  </a>
                  <a href="class-tugas.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Tugas</span>
                  </a>
                  <a href="absensi.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Absensi</span>
                  </a>
                  <a href="ixa-data-siswa.php?kode_kelas='1'" class="list-group-item list-group-item-action py-2 ripple active ">
                    <i class="fas fa-lock fa-fw me-3"></i><span>Data Siswa</span>
                  </a>
                </div>
              </div>
            </nav>
            <!-- Sidebar -->
          </header>
          </header>
  <!--Main Navigation-->

   <!--Main layout-->
          <main style="margin-top: 58px;">
            <!-- <section class="mx-auto w-75 p-3 vh-100"> -->
            <h1 class="text-center my-5 pt-5 ">Tabel data Siswa Saat ini</h1>
              <div class="Tabel container-sm" style="top: -100px">
            <section class="mx-auto w-75 vh-100">
              <!-- tabel starts -->
                <table class="table table-bordered ">
                  <thead class="mt-0">
                    <tr>
                      <th>No.</th>
                      <th>NIS</th>
                      <th>Nama Lengkap</th>
                      <th>E-mail</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $kode_kelas = $_SESSION['kode_kelas'];
                    $no=1;
                    $jumlah=0;
                    include "koneksi.php";
                    $a = "SELECT * FROM siswa INNER JOIN user ON siswa.nis=user.id JOIN kelas ON siswa.kelas=kelas.kode_kelas WHERE kode_kelas=$kode_kelas";
                    $b=$koneksi->query($a);
                    while (($c=$b->fetch_array())) { 
                      $level = $c['level'];

                      if($level=="siswa"){?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $c['id']; ?></td>
                      <td><?php echo $c['namadepan']; ?> <?php echo $c['namabelakang']; ?></td>
                      <td><?php echo $c['email']; ?></td>
                      <td><?php echo $c['nama_kelas']; ?></td>
                      <td>
                        <a href='ixa-edit-siswa.php?id=<?php echo $c['id']; ?>'>Edit</a>
                        <a href="ixa-delete-siswa.php?id=<?php echo $c['id']; ?>">Hapus</a>
                      </td>

                    </tr>
                    <?php
                      $jumlah = $jumlah+1; 
                      }
                    }
                    echo " Jumlah Seluruh Siswa : ",$jumlah;
                    ?>
                  </tbody>  
                </table>
              <!-- tabel ends -->
              <!-- buttons -->
              <a href="siswa.php" class="btn btn-primary">Tambah Data</a>

              <!-- buttons ends -->
             
              </section>
                </div>
            <!-- </section> -->

              <!-- Copyright -->
              <div class="text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
                    Copyright © 2022. All rights reserved.
              </div>
              <!-- Copyright -->
            <!-- </section> -->
          </main>
  <!--Main layout-->
     






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 






  </body>
</html>