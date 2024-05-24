  <?php
      $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
     $res = $conn->query($sql);
     $row = $res->fetch_object();
  ?>
  <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id;?>">
        <div class="form-group">
          <label>nome</label>
          <input type="text" class="form-control" value="<?php print $row->nome?>" name="nome">
        </div>
  
          <div class="form-group">
            <label >Email </label>
            <input type="email" class="form-control" value="<?php print $row->email?>" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" value="<?php print $row->senha?>" name="senha" >
          </div>
          <div class="form-group">
            <label >Data de nascimento</label>
            <input type="date" class="form-control" value="<?php print $row->data_nasc?>" name="data_nasc">

          <button type="submit" class="btn btn-primary">Editar</button>
  </form>