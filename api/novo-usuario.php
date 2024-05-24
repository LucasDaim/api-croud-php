<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
  <div class="form-group">
    <label>nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <form>
      <div class="form-group">
        <label >Email </label>
     <input type="email" class="form-control" name="email">
     
    </div>

    <div class="form-group">
        <label>Password</label>
     <input type="password" class="form-control" name="senha" >
    </div>
    <form>
  <div class="form-group">
    <label >Data de nascimento</label>
    <input type="date" class="form-control" name="data_nasc">

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>