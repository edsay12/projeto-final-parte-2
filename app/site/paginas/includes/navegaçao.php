<div >
  <nav class="navbar navbar-expand-lg navbar-danger alert-primary">

   <a href="?pg=inicial"><img src="app/assets/img/logo.png"  href="" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span > <span class="icon-more_vert"></span> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link  <?php echo (($_GET['pg'] == 'inicial') ? 'border-bottom border-primary' : '' );   ?> " href="?pg=inicial" >inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link  <?php echo (($_GET['pg'] == 'produtos') ? 'border-bottom border-primary' : '' );   ?> " href="?pg=produtos" >Produtos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link  <?php echo (($_GET['pg'] == 'contato') ? 'border-bottom border-primary ' : '' );   ?> " href="?pg=contato" >Contado <span class="sr-only">(current)</span></a>
        </li>
        
        </li>
       
        
        

      </ul>


      <?php


if(isset($_SESSION[''])) { ?>
 
  

<form class="form-inline ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="icon-user"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item  text-danger" href="#"> <span class="icon-exit"></span> Sair</a>
          </div>
        </li>

</form>

<?php

}else { ?>
  
 <form class="form-inline ">
 <li class="nav-item active">
          <a class="nav-link " href="cpanel.php?pg=cpanel" >login <span class="sr-only">(current)</span></a>
        </li>
        
      </form>
  <?php
}
?>

      
        
      
     

    </div>
  </nav>
</div>