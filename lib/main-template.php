<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php pageTitle();?></title>
    <?php headinclude();?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="../index.php">Mobilidade Urbana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Integrantes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="text-primary dropdown-item" href="resumo.php">Resumo</a>
              <a class="dropdown-item" href="davi.php">Davi</a>
              <a class="dropdown-item" href="diana.php">Diana</a>
              <a class="dropdown-item" href="ellen.php">Ellen</a>
              <a class="dropdown-item" href="francisco.php">Francisco</a>
              <a class="dropdown-item" href="henrique.php">Henrique</a>
              <a class="dropdown-item" href="kevin.php">Kevin</a>
              <a class="dropdown-item" href="mateus.php">Mateus</a>
            </div>
          </li>
          <li class="nav-item dropdown">
  	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  	          Sobre
  	        </a>
  	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
  	          <a class="dropdown-item" href="#">História</a>
  						<a class="dropdown-item" href="#">Problemas/Soluções</a>
  	          <a class="dropdown-item" href="#">Cidades referências</a>
              <a class="dropdown-item" href="#">Projeto sustentável</a>
  	        </div>
  	      </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <?php mainContent();?>
    </div>
    <?php endinclude();?>
  </body>
</html>
<style type="text/css">
</style>
