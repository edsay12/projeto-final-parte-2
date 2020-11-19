<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="app/painelAdm/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/painelAdm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/painelAdm/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="app/assets/css/meucss.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        <a href="../../index2.html" class="text-light"><b>Painel</b> Adm</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Logar para iniciar </p>

                <form action="cpanel.php?pg=cpanel" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="usuario" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password"  name="senha" class="form-control" placeholder="Password">
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
                Lembre-me
              </label>
                            </div>
                        </div>
                
                    </div>

<div class="social-auth-links text-center mb-3">
                   
                    <button type="submit" class="btn btn-primary btn-block">Logar</button>
                   <a href="index.php?pg=inicial" class="btn btn-success btn-block">Voltar</a>
                </div>

                </form>

                
                <!-- /.social-auth-links -->

                <p class="mb-1">
               
                </p>
                <p class="mb-0">
                   
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <br>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>