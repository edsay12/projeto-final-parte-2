<div class="container  ">

<div class="col-6 offset-3 py-3 ">
<form action="index.php?pg=cad_mensagem" method="POST"  >
  <div class="form-group ">
    <div class="form-group ">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" placeholder="nome">
    </div>
    
  </div>
  <div class="form-group">
    <label for="email">E-MAIL</label>
    <input type="email" name="email"  class="form-control" id="email" placeholder="Rua dos Bobos, nº 0">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="categoria" id="exampleRadios1" value="vendas" checked>
  <label class="form-check-label" for="exampleRadios1">
    vendas
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="categoria" id="exampleRadios2" value="reclamaçoes"checked>
  <label class="form-check-label" for="exampleRadios2">
   reclamaçoes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="categoria" id="exampleRadios3" value="suporte" checked>
  <label class="form-check-label" for="exampleRadios3">
  suporte
  </label>
</div>
  <div class="form-group my-2">
    <label for="mensagem">Mensagem</label>
    <textarea class="form-control" name="msg"  placeholder="Sua Mensagem Aqui" id="msg" rows="3"></textarea>
  </div>
  
  
 <div class="form-group ">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar <span class="icon-send
" ></span> </button>
  </div>
</form>
</div>



</div>