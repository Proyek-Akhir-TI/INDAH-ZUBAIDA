<!DOCTYPE html>
<html lang="en">


 
<head>
  <style>
        
        h2
        {
            background-color: white;
            color: crimson;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('fot.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Form Daftar Inventaris Desa Tulungrejo</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/po.jpeg' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4></h4>
              </div>
              <div class="card-body">
                <form method="POST" action="function.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" name="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Isikan username anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="nama_user" class="control-label">Nama</label>
                      
                    </div>
                    <input id="nama_user" name="nama_user" type="nama_user" class="form-control" name="nama_user" tabindex="2" required>
                    <div class="invalid-feedback">
                      Isikan nama anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      
                    </div>
                    <input id="password" name="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Isikan password anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password2" class="control-label">Konfirmasi Password</label>
                      
                    </div>
                    <input id="password2" name="password2" type="password" class="form-control" name="password2" tabindex="2" required>
                    <div class="invalid-feedback">
                      Isikan password anda
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Daftar
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>