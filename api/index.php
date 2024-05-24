<!doctype html>
<html lang="pt-BR">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
  <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">index<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Novo usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar</a>
      </li>
      </ul>
      </nav>
        <div class="container">
          <div class="row">
            <div class="col mt-5">
              <?php
                  include("conexao.php");
                  switch(@$_REQUEST["page"]){
                    case"novo":
                    include("novo-usuario.php");
                      break;
                    case "listar":
                    include("listar.php");
                       break;
                    case "salvar":
                    include("salvar.php");
                    case "editar":
                      include("editar.php");
                      break;
                    default;
                  }
               ?>
            </div>
          </div>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>