<?php


$id = isset($_GET['id']);
if ($id) {


    $id = $_GET['id'];
    $parametros = array(

        'id_usuario' => $id
    );
    $resultadousuario = new Conexao();
    $dados = $resultadousuario->consultarBanco('SELECT * FROM usuarios where id_usuario = :id_usuario', $parametros);
   
} else {
    header("location: ?pg=usuarios listar");
}

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">new user</h1>
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

                    <?php foreach ($dados as $dadosusuario) {
                       
                    ?>
                        <form action="?pg=usuario-novo" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="text" name="nome" disabled value="<?php echo $dadosusuario['nome']?>   "   id="usuario" autofocus class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">datacriaÇao</label>
                                <input  disabled value=" <?php   echo $dadosusuario['datacriaçao']  ?> "  name="senha" id="senha" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">dataatualizaçao</label>
                                <input  disabled value=" <?php   echo $dadosusuario['dataatualizaçao']  ?> "  name="senha" id="senha" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="text-right">
                                <a href="cpanel.php?pg=usuarios" class='btn btn-primary'>voltar</a>
                             
                            </div>

                        </form>

                    <?php }  ?>
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