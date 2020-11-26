<?php


$id = isset($_GET['id']);
if ($id) {


    $id = $_GET['id'];
    $parametros = array(

        'id_contato' => $id
    );
    $resultadousuario = new Conexao();
    $dados = $resultadousuario->consultarBanco('SELECT * FROM contato where id_contato = :id_contato', $parametros);
   
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
                                <label for="exampleFormControlInput1">email</label>
                                <input  disabled value=" <?php   echo $dadosusuario['email']  ?> "  name="email" id="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">mensagem</label>
                                <input  disabled value=" <?php   echo $dadosusuario['msg'] ?> "  name="msg" id="msg" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">datacriaçao</label>
                                <input  disabled value=" <?php   echo $dadosusuario['datacriaçao']  ?> "  name="datacriaçao" id="datacriaçao" class="form-control" id="exampleFormControlInput1" >
                            </div>

                            <div class="text-right">
                                <a href="cpanel.php?pg=contato" class='btn btn-primary'>voltar</a>
                             
                            </div>

                        </form>

                    <?php }  ?>
                </div>




