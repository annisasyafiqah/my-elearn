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
            <a class="nav-item nav-link" href="home-siswa.php">Home</a>
            <a class="nav-item nav-link" href="#">Programs</a>
            <a class="nav-item nav-link"  href="#">Courses</a>
            <a class="nav-item nav-link" href="#">Assignment</a>
          </div>
            <a class="nav-item nav-link ml-2 active" href="profile.php"><img src="user.png" width="20px" height="20px" class="mr-4"> Your Profile</a>

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
        <ul class="list-group list-group-flush">
          <li class="list-group-item" ><b>Nama Lengkap  :</b> <?php echo $_SESSION['namadepan'];?> <?php echo $_SESSION['namabelakang'];?></li>
          <li class="list-group-item"><b>NIS   :</b> <?php echo $_SESSION['id'];?></li>
          <li class="list-group-item"><b>Jenis Kelamin :</b> <?php echo $_SESSION['jeniskelamin'];?></li>
          <li class="list-group-item"><b>Alamat        :</b> <?php echo $_SESSION['alamat'];?></li>
          <li class="list-group-item"><b>No. Telp      :</b> <?php echo $_SESSION['notelp'];?></li>
          <li class="list-group-item"><b>E-mail        :</b> <?php echo $_SESSION['email'];?></li>
          <li class="list-group-item"><b>Jabatan       :</b> <?php echo $_SESSION['level'];?></li>
        </ul>
      </div>
                      <!-- buttons -->
        <div class="d-flex justify-content-end pt-4">
          <a href="edit.php" class="btn btn-warning">Edit</a>
          <a href="login.php" class="btn btn-danger">Logout</a>
        </div>
              <!-- buttons ends -->      
    </div>
  
  <!-- main starts-->

  <!-- main ends -->
  <!-- Copyright -->
  <div class=" text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
        Copyright © 2020. All rights reserved.
  </div>
  <!-- Copyright -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 






  </body>
</html>