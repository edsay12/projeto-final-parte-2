
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


<form  action="?pg=usuario-novo" method="POST"  enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" name="nome"  id="usuario" autofocus class="form-control" id="exampleFormControlInput1" placeholder="nome do novo usuario">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Senha</label>
    <input type="password" name="senha" id="senha" class="form-control" id="exampleFormControlInput1" placeholder="senha do novo usuario">
  </div>
  <div class="form-group">
    <label for="img_usuario">Escolha sua foto de perfil</label>
    <input type="file" class="form-control-file" name="img_usuario" id="img_usuario">
  </div>
  <div class="text-right">

  <a href="cpanel.php?pg=usuarios" class='btn btn-primary'>voltar</a>
  <input type="submit" class='btn btn-primary' value="Novo usuario" >
 </div>
  
</form>

  


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