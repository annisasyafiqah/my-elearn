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
            <a class="nav-item nav-link active" href="home-Admin.php">Dashboard</a>
            <a class="nav-item nav-link " href="info-admin.php">Information</a>
            <a class="nav-item nav-link"  href="data-pelajaran.php">Courses</a>
            <a class="nav-item nav-link" href="user.php">Users</a>
          </div>
            <a class="nav-item nav-link ml-2" href="profile-admin.php"><img src="user.png" class="mx-1" width="20px" height="20px" class="mr-2"><?php echo $_SESSION['namadepan'] ?>(<?php echo $_SESSION['level'] ?>) </a>

        </div>
      </div>
    </nav>

  <!-- Navbar Ends -->

  <!-- main starts-->
  <section class="mx-5 w-75 p-3">
  <h1 class="text-center align-items-center mx-auto my-5 mt-5">Tabel Daftar Pengguna Elearn</h1>

  <!-- tabel starts -->
    <table class="table table-bordered w-75 ">
      <thead>
        <tr>
          <th>No.</th>
          <th>Username</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Agama</th>
          <th>Nomor Telepon</th>
          <th>E-Mail</th>
          <th>Alamat</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        include "koneksi.php";
        $a = "SELECT * FROM user";
        $b=$koneksi->query($a);
        while (($c=$b->fetch_array())) { ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $c['id']; ?></td>
          <td><?php echo $c['namadepan']; ?> <?php echo $c['namabelakang']; ?></td>
          <td><?php echo $c['jeniskelamin']; ?></td>
          <td><?php echo $c['tempat_lahir']; ?></td>
          <td><?php echo $c['tanggal_lahir']; ?></td>
          <td><?php echo $c['agama']; ?></td>
          <td><?php echo $c['notelp']; ?></td>
          <td><?php echo $c['email']; ?></td>
          <td><?php echo $c['alamat']; ?></td>
          <td><?php echo $c['level']; ?></td>
          <td>
            <a href='edit-user.php?id=<?php echo $c['id']; ?>'>Edit</a>
            <a href="delete-user.php?id=<?php echo $c['id']; ?>">Hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>  
    </table>
    <!-- tabel ends -->
    
    </section>
  <!-- main ends -->
   <!-- Copyright -->
  <div class=" text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
        Copyright © 2020. All rights reserved.
  </div>
  <!-- Copyright -->

  </body>
</html>