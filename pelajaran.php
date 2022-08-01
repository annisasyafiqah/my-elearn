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

    <title>Pelajaran</title>

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
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->

  
<h1 class="mt-5" style="text-align: center;">Tambah Pelajaran</h1>
 <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mx-auto mt-5">
      <form action="act_pelajaran.php" method="POST" >
    <!-- Name input -->
        <div class="form-outline mb-4 mx-auto">
          <input type="text" id="form4Example1" name="id_pelajaran" class="form-control"  />
          <label class="form-label" for="form4Example1">ID Pelajaran</label>
        </div>

    <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example2" name="nama" class="form-control"/>
          <label class="form-label" for="form4Example2">Nama Pelajaran</label>
        </div>

    <!-- select input -->
        <div class="form-outline mb-4">
                  <select class="form-select mb-4" name="idguru" aria-label="Default select example">
                    <option selected>pilih Guru</option>
                      <?php 
                        include "koneksi.php";
                        $a = "SELECT * FROM user INNER JOIN guru ON user.id = guru.nip";
                        $b=$koneksi->query($a);
                        while (($c=$b->fetch_array())) {
                        $level = $c['level'];?>
                    <option value="<?php echo $c['idguru']; ?>"><?php echo $c['namadepan']; ?> <?php echo $c['namabelakang']; ?></option>
                  
                      <?php
                        }
                      ?>
                  </select>
                </div>

    <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 mx-auto">Send</button>
      </form>
  <!-- form ends -->
  </body>
</html>