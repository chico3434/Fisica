<?php include"lib/fw.php"?>
<!DOCTYPE html>
<html>
<head>
	<?php headinclude();?>
	<title>Mobilidade Urbana</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		$('.carousel').carousel();
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <a class="navbar-brand" href="index.php">Mobilidade Urbana</a>
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
	          <a class="text-primary dropdown-item" href="integrantes/resumo.php">Resumo</a>
	          <a class="dropdown-item" href="integrantes/davi.php">Davi</a>
			  <a class="dropdown-item" href="integrantes/diana.php">Diana Moreira</a>
	          <a class="dropdown-item" href="integrantes/ellen.php">Ellen</a>
	          <a class="dropdown-item" href="integrantes/francisco.php">Francisco</a>
	          <a class="dropdown-item" href="integrantes/henrique.php">Henrique</a>
	          <a class="dropdown-item" href="integrantes/kevin.php">Kevin</a>
	          <a class="dropdown-item" href="integrantes/mateus.php">Mateus</a>
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
		<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="fotos/2.jpg">
			</div>
			<div class="carousel-item">
		  		<img class="d-block w-100" src="fotos/3.jpg">
			</div>
			<div class="carousel-item">
				<img class="d-block w-70" src="fotos/4.jpg">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->
</body>
<?php endinclude();?>
</html>
<style type="text/css">
	body{
		background-color:white;
		font-size: 20px;
	}
	.carousel-item{
		width: 800px;
		height: 400px;
	}
</style>
