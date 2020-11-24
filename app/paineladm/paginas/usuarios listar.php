 <?php

    $resultDados = new Conexao();
    $dados = $resultDados->consultarBanco('SELECT * FROM usuarios');
    ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">usuarios</h1>
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
                 <div class="col">


                     <div class="card">
                         <div class="card-header">
                             <h3 class="card-title">escolha o arquivo para baixar</h3>
                         </div>

                         <!-- /.card-header -->
                         <div class="card-body">



                             <a href="?pg=newuser" class="btn btn-outline-success  ">
                                 <span class="icon-user mx-1"></span>
                                 Novo Usuario</a>


                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>Id</th>
                                         <th>Nome</th>
                                         <th>assunto</th>
                                         <th>mensagem</th>
                                         <th>o que deseja fazer?</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php foreach ($dados as $dadosusuarios) { ?>
                                         <tr>
                                             <td><?php echo  $dadosusuarios['id_usuario']; ?></td>
                                             <td><?php echo  $dadosusuarios['nome']; ?></td>
                                             <td><?php echo  $dadosusuarios['datacriaçao']; ?></td>
                                             <td><?php echo  $dadosusuarios['dataatualizaçao']; ?></td>
                                             <td class="text-center">
                                                 <a class="btn btn-success icon-eye" href="?pg=usuario_visualizar&id= <?php echo $dadosusuarios['id_usuario']  ?>"></a>
                                                 <a class="btn btn-warning icon-edit-pencil" href="?pg=usuario_editar&id= <?php echo $dadosusuarios['id_usuario']  ?>"></a>
                                                 <a class="btn btn-danger icon-box" href="?pg=usuario_deletar&id= <?php echo $dadosusuarios['id_usuario']  ?>"></a>
                                             </td>
                                         </tr>
                                     <?php   } ?>

                                 </tbody>

                             </table>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
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