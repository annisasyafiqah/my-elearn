<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Login Form</title>
  </head>
  <body class="overflow-hidden">

<!-- STARTS -->
<section class="vh-100" >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
<!-- image starts-->
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img class="my-5" src="anim-jumbotron.png"
          class="img-fluid" alt="Sample image">
      </div>
<!-- image ends       -->

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="act_login.php?op=in" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-2" style="border-radius: 25px">
              <img src="Facebook.png" width="25" height="25">
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-2" style="border-radius: 25px">
              <img src="twitter.png" width="25" height="25">
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-2" style="border-radius: 25px">
              <img src="google.png" width="25" height="25">
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-2" style="border-radius: 25px">
              <img src="linkedin.png" width="25" height="25">
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Username/id input -->
          <div class="form-outline mb-4">
            <input type="text" name="id" id="inputuname" class="form-control form-control-lg"
              placeholder="Enter a valid username" />
            <label class="form-label" for="inputuname">Username or id</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="inputpsswd" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="inputpsswd">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="inputcheck" />
              <label class="form-check-label" for="inputcheck">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg ">Log in</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
                <div class="text-white align-items-center text-center mb-3 mb-md-0 bg-primary py-4 px-4 px-xl-5">
                    Copyright © 2022. All rights reserved.
              </div>
  </div>
</section>
<!-- ENDS -->

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

