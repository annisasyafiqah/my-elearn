<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register Form</title>
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
                <h3 class="mb-5 text-uppercase text-center">registration form</h3>

                <form class="mx-1 mx-md-4" action="act_register.php" method="POST" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                  <input type="text" name="id" id="inputId" class="form-control form-control-lg" />
                  <label class="form-label" for="inputId">Id</label>
                </div>
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

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="perempuan" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="lakilaki" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="inputemail" name="tempat_lahir" class="form-control form-control-lg" />
                  <label class="form-label" for="inputemail">Tempat Lahir</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="Date" id="inputnotelp" name="tanggal_lahir" class="form-control form-control-lg" />
                  <label class="form-label" for="inputnotelp">Tanggal Lahir</label>
                </div>       
                <div class="form-outline mb-4">
                  <input type="text" id="inputpassword" name="agama" class="form-control form-control-lg" />
                  <label class="form-label" for="inputpassword">Agama</label>
                </div>           

                <div class="form-outline mb-4">
                  <input type="text" id="inputemail" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="inputemail">E-mail</label>
                </div>

                 <div class="form-outline mb-4">
                  <input type="text" name="alamat" id="inputaddress" class="form-control form-control-lg" />
                  <label class="form-label" for="inputaddress">Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="inputnotelp" name="notelp" class="form-control form-control-lg" />
                  <label class="form-label" for="inputnotelp">Nomor Telepon</label>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-check-label" for="level" >Registrasi Sebagai</label>
                    <select class="form-select mb-4" name="level" aria-label="Default select example">
                      <option value="siswa">siswa</option>
                      <option value="guru">guru</option>
                    </select>

                  </div>

                <div class="form-outline mb-4">
                  <input type="password" id="inputpassword" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="inputpassword">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="inputpassword" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="inputpassword">Ulangi Password</label>
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

