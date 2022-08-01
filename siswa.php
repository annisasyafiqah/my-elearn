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

    <title>Data Siswa</title>
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
            <a class="nav-item nav-link active" href="home-Admin.php">Dashboard</a>
            <a class="nav-item nav-link " href="info-admin.php">Information</a>
            <a class="nav-item nav-link"  href="data-pelajaran.php">Courses</a>
            <a class="nav-item nav-link" href="user.php">Users</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->

  <!-- Form starts -->
    <h1 class="mt-5" style="text-align: center;">Tambah Siswa</h1>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mx-auto mt-5">
      <form action="act_add_siswa.php" method="POST" >
    <!-- NIS input -->
        <div class="form-outline mb-4 mx-auto">
          <input type="text" id="form4Example1" name="nis" class="form-control" />
          <label class="form-label" for="form4Example1">NIS</label>
        </div>

    <!-- Name input -->
       <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="namadepan" id="inputnamadepan" class="form-control form-control-lg" />
                      <label class="form-label" for="inputnamadepan">Nama Depan</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="namabelakang" id="inputnamabelakang" class="form-control form-control-lg" />
                      <label class="form-label" for="inputnamabelakang">Nama Belakang</label>
                    </div>
                  </div>
        </div> 

    <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example2" name="email" class="form-control" />
          <label class="form-label" for="form4Example2">E-mail</label>
        </div>
                    
    <!-- Kelas select input -->
        <select class="form-select mb-4" name="kelas" aria-label="Default select example">
          <option selected>pilih kelas</option>
            <?php 
              $no=1;
              $jumlah=0;
              include "koneksi.php";
              $a = "SELECT * FROM kelas";
              $b=$koneksi->query($a);
              while (($c=$b->fetch_array())) { 
              $jumlah = $jumlah+1; 
              $level = $c['level'];
              ?>
          <option value="<?php echo $c['kode_kelas'];?>"><?php echo $c['nama_kelas']; ?></option>
        
            <?php
                }
            ?>
        </select>

    <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 mx-auto">Send</button>

      </form>
    </div>
  <!-- form ends -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>