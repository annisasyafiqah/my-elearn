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
            <a class="nav-item nav-link" href="tugas-guru.php">Assignment</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-guru.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>  (<?php echo $_SESSION['level'] ?>)</a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->
    <div class="main mx-4 px-4 container py-5 h-100">
      <h1 class="text-center my-4"> Data Pribadi</h1>
      <div class="card mx-auto w-75">
        <div class="card-header">
          Data Pribadi
        </div>
        <?php 
                include "koneksi.php";
                $nip = $_SESSION['id'];
                $a = "SELECT * FROM user WHERE id='$nip'";
                $b=$koneksi->query($a);
                while (($c=$b->fetch_array())) {
              ?>
        <ul class="list-group list-group-flush">
          <li class="list-group-item" ><b>Nama Lengkap  :</b> <?php echo $c['namadepan'];?> <?php echo $c['namabelakang'];?></li>
          <li class="list-group-item"><b>NIP   :</b> <?php echo $c['id'];?></li>
          <li class="list-group-item"><b>Jenis Kelamin :</b> <?php echo $c['jeniskelamin'];?></li>
          <li class="list-group-item"><b>Tanggal Lahir :</b> <?php echo $c['tanggal_lahir'];?></li>
          <li class="list-group-item"><b>Tempat Lahir :</b> <?php echo $c['tempat_lahir'];?></li>
          <li class="list-group-item"><b>Alamat        :</b> <?php echo $c['alamat'];?></li>
          <li class="list-group-item"><b>No. Telp      :</b> <?php echo $c['notelp'];?></li>
          <li class="list-group-item"><b>E-mail        :</b> <?php echo $c['email'];?></li>
          <li class="list-group-item"><b>Jabatan       :</b> <?php echo $c['level'];?></li>
        </ul>
      </div>
    <?php } ?>
                      <!-- buttons -->
        <div class="d-flex justify-content-end pt-4">
          <a href="edit-profil-guru.php?nip=<?php echo $_SESSION['id']; ?>" class="btn btn-warning">Edit</a>
          <a href="login.php" class="btn btn-danger">Logout</a>
        </div>
              <!-- buttons ends -->      
    </div>
  
  <!-- Copyright -->
  <div class=" text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
        Copyright © 2020. All rights reserved.
  </div>
  <!-- Copyright -->

  </body>
</html>