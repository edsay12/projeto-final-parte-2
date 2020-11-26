<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar usuario</h1>
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>

                <div class="col-6 alight-itens-center">

                    <?php foreach ($dadosusuario as $dados) { ?>
                        <form action="?pg=usuario_editar" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input disabled type="text" name="nome" id="nome" value="<?php echo $dados['nome']  ?>" autofocus class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">senha</label>
                                <input value=" <?php  ?> " name="senha" id="senha" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <input type="hidden" name="id_usuario"  value="<?php echo $dados['id_usuario']?>" >
                            <div class="text-right">
                                <a href="cpanel.php?pg=usuarios" class='btn btn-primary'>voltar</a>
                                <button class="btn btn-danger">atualizar</button>
                            </div>

                        </form>
                    <?php }   ?>

                </div>










            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</section>