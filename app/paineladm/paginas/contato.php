 <?php

    $resultDados = new Conexao();
    $dados = $resultDados->consultarBanco('SELECT * FROM  contato ');




    ?>




 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">contatos</h1>
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

                                     <?php foreach ($dados as   $dadosusuario) { ?>


                                         <tr   class="<?php
                                                if ($dadosusuario['vizualizar'] == 1)
                                                    echo "bg-danger";
                                                ?> " >

                                             <td><?php echo  $dadosusuario['nome']; ?></td>
                                             <td><?php echo  $dadosusuario['email']; ?></td>
                                             <td><?php echo  $dadosusuario['msg']; ?></td>
                                             <td><?php echo  $dadosusuario['categoria']; ?></td>
                                             <td><?php echo  $dadosusuario['datacriaçao']; ?></td>
                                             <td class="text-center">
                                                 <a class="btn btn-success icon-eye" href="?pg=usuario_visualizar2&id=<?php echo $dadosusuario['id_contato'] ?>"></a>
                                                 <a class="btn btn-danger icon-box" href="?pg=usuariodeletar2&id=<?php echo $dadosusuario['id_contato'] ?>"></a>
                                             </td>
                                         </tr>
                                     <?php    } ?>

                                     </tfoot>
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