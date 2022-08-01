<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register as student</title>
  </head>
  <body>

<!-- form start -->
<section class="h-100 bg-secondary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block my-4">
              <img src="anim-jumbotron.png"
                alt="Sample photo" class="img-fluid px-xl-5"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase text-center">Register as teacher</h3>

                <form class="mx-1 mx-md-4" action="act_regist-guru.php" method="POST" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                  <select class="form-select mb-4" name="nip" aria-label="Default select example">
                    <option selected>pilih NIP anda</option>
                      <?php 
                        $no=1;
                        $jumlah=0;
                        include "koneksi.php";
                        $a = "SELECT * FROM user";
                        $b=$koneksi->query($a);
                        while (($c=$b->fetch_array())) { 
                        $jumlah = $jumlah+1; 
                        $level = $c['level'];

                          if($level=="guru"){?>
                                
                    <option value="<?php echo $c['id']; ?>"><?php echo $c['id']; ?></option>
                  
                      <?php
                        }
                          }
                      ?>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <select class="form-select mb-4" name="matapelajaran" aria-label="Default select example">
                    <option selected>pilih Matapelajaran anda</option>
                      <?php 
                        $no=1;
                        $jumlah=0;
                        include "koneksi.php";
                        $a = "SELECT * FROM pelajaran";
                        $b=$koneksi->query($a);
                        while (($c=$b->fetch_array())) { 
                        $jumlah = $jumlah+1; ?>
                                
                    <option value="<?php echo $c['id_pelajaran']; ?>"><?php echo $c['nama']; ?></option>
                  
                      <?php
                          }
                      ?>
                  </select>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-warning btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- form end -->
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
  <div class=" text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
        Copyright © 2020. All rights reserved.
  </div>
  <!-- Copyright -->
<!-- section ends -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

