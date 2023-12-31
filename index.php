<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo Contato</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Contatos</a>
                </li>
                <p>Teste5</p>              
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
        <?php
          include("config.php");
          switch(@$_REQUEST['page']){
          case "novo":
            include("novo-contato.php");
            break;
          case "listar":
            include("listar-contato.php");
            break;
          case "salvar":
            include("salvar-contato.php");
            break;
          case "editar":
            include("editar-contato.php");
            break;
            default:            
            print "<h1>Seja Bem Vindo!</h1>";
        }
        ?>
        </div>
      </div>
    </div>
  </body>
</html>



