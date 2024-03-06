<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Perpustakaan Digital  | Lupa Password</title>
  <link rel="icon" type="image/png" href="<?= base_url("image/logo2.png"); ?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css"); ?>">
  <!-- icheck Bootstrap  -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"); ?>">
  <!-- Thome style -->
  <link rel="stylesheet" href="<?= base_url("assets/template/backend/dist/css/adminlte.min.css"); ?>">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <img src="<?= base_url("image/logo1.png"); ?>" alt="image" class="img-fluid" style="width: 100%; max-height: 150px; object-fit: cover;">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
      <a href="#" class="h1"><b>Perpustakaan </b>Digital</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Anda Hanya Selangkah Lagi Menuju Kata Sandi Baru Anda, Pulihkan Kata Sndi Anda Sekarang.</p>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('auth/changePassword'); ?>" method="post">
        <div class="input-group mb-1">
          <input type="password" name="password1" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <spam class="fas fa-lock"></spam>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

         <div class="input-group mb-1">
          <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <spam class="fas fa-lock"></spam>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?= form_error('password_confrim', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?= base_url('auth); ?>">Login</a>
      </p>
    </div>
    <!-- /.login-card body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js"); ?>"></script>
<!-- Boostrap 4 -->
<script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App  -->
<script src="<?= base_url("assets/template/backend/dist/js/adminlte.min.js"); ?>"></script>
</body>
</html>