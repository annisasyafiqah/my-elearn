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
            <a class="nav-item nav-link active" href="#">Dashboard</a>
            <a class="nav-item nav-link " href="#">Information</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->
<header>
             <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="ixa-guru.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Materi</span>
                  </a>
                  <a href="class-tugas.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Tugas</span>
                  </a>
                  <a href="absensi.php" class="list-group-item list-group-item-action py-2 ripple active ">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Absensi</span>
                  </a>
                  <a href="ixa-data-siswa.php?kode_kelas='1'" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-lock fa-fw me-3"></i><span>Data Siswa</span>
                  </a>
                </div>
              </div>
            </nav>
            <!-- Sidebar -->
          </header>
          </header>

            <main style="margin-top: 58px;">
            <!-- <section class="mx-auto w-75 p-3 vh-100"> -->
            <h1 class="text-center mt-auto ">Tabel data Siswa Saat ini</h1>
            <form action="act-absen.php" method="POST" enctype="multipart/form-data">
            <section class="mx-auto w-75 p-4 vh-100">
              <label>Masukkan Tanggal Hari ini</label>
              <input class="form-input" type="date" id="inlineC bbbheckbox1" name="tanggal">
              <!-- tabel starts -->
                <table class="table table-bordered mx-3">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>NIS</th>
                      <th>Nama Lengkap</th>
                      <th>Hadir</th>
                      <th>Tidak Hadir</th>
                      <th>Keterangan</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    $kelas = $_SESSION['kode_kelas'];
                    include "koneksi.php";
                    $a = "SELECT * FROM siswa INNER JOIN user ON siswa.nis=user.id JOIN kelas ON siswa.kelas=kelas.kode_kelas WHERE kelas=$kelas";
                    $b=$koneksi->query($a);
                    while (($c=$b->fetch_array())) { 
                      $level = $c['level'];
                      ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $c['id']; ?></td>
                      <td><?php echo $c['namadepan']; ?> <?php echo $c['namabelakang']; ?></td>
                      <input class="invisible" value="<?php echo $c['id']; ?>" name="nis">
                      <div class="checkbox">
                      <td><div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kehadiran" value="hadir" id="flexRadioDefault1">
                          </div>
                      </td>
                      <td> <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kehadiran" value="tidakhadir" id="flexRadioDefault2">
                          </div>
                      </td>
                      </div>
                      <td><input class="form-input no-border" type="text"  name="keterangan" style="border: 0px"></td>
                      <td><button type="submit" class="btn btn-primary btn-lg ms-2">Simpan</button></td>
                      
                    </tr>
                    <?php
                      }
                    
                    ?>
                  </tbody>  
                </table>
                
               
              <!-- tabel ends -->
              <!-- buttons -->
              <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-warning btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
                </div>              
              </form>
              <!-- buttons ends -->
              </section>
 <!-- Copyright -->
              <div class="text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
                    Copyright © 2022. All rights reserved.
              </div>
              <!-- Copyright -->
              </main>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 






  </body>
</html>