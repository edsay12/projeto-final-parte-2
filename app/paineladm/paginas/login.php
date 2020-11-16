<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADM PAGE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/paineladm/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/paineladm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/paineladm/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="app/assets/css/meucss.css">
</head>
<body class="hold-transition login-page">
<div class="login-box col-12 py-5">
  <div class="login-logo text-center ">
    <a href="index.php?pg=cpanel"><b>Painel</b>Administrativo</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">logue para iniciar a seçao</p>

      <form action="cpanel.php?pg=cpanel" method="post">
        <div class="input-group  mb-3">
          <input type="email" name="usuario" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembre me
              </label>
            </div>
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>


         <div class="social-auth-links text-center mb-3">
       
        <button type="submit" class="btn btn-primary btn-block">Logar</button>
        
      </div>
      </form>
      <div class="social-auth-links text-center mb-3">
       <a href="index.php?pg=inicial">
       <button type="submit" class="btn btn-primary btn-block">voltar</button>
       </a>
     </div>
     
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
