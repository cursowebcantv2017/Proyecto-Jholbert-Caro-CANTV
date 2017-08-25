<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="estilonosotros.css">


</head>
<body>
	<!-- Nav -->
	<div class="container">
	<div class="col-md-4">	
   	 <img src="img/home/logo.png" alt="">
	</div>
  	</div>
	<div class="container col-md-offset-4 col-md-8">
	<header>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<!--<div class="container">-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-js">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--Inicia Menu -->
	<div class="collapse navbar-collapse" id="navegacion-js">
	<ul class="nav navbar-nav" id="nav" role="tablist">
		<li  class="active" id="navli"><a id="anav" href="home.php">Home</a></li>
		<li id="navli" ><a id="anav" href="nosotros.php">Nosotros</a></li>
		<li id="navli"><a id="anav" href="productos.php">Prouctos</a></li>
		<li id="navli"><a id="anav" href="servicio.php">Servicios</a></li>
		<li id="navli"><a id="anav" href="contacto.php">Contacto</a></li>
	</ul>
		
	<ul class="nav navbar-nav navbar-right">
      	 	<li id=""><a id="glynav" style="background:-webkit-linear-gradient(top, #DCD8DA , #F8F2F9, #DCD8DA); border-left: 2px solid #CFCFCF" href=""><i class="fa fa-facebook-square fa-3x"></i></a></li>
		<li id=""><a id="glynav"  style="background:-webkit-linear-gradient(top, #DCD8DA , #F8F2F9, #DCD8DA);"href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
		<li id=""><a id="glynav" style="background:-webkit-linear-gradient(top, #DCD8DA , #F8F2F9, #DCD8DA); border-top-right-radius: 5px; border-bottom-right-radius: 5px;" href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
       
          </ul>
        
					
			</div>
		<!--</div>-- container-->
		</nav>	
	</header>
</div>

<!-- Carrusel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/home/foto-carrusel1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/home/foto-carrusel1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span style="color: #CC1414;" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span style="color: #CC1414;" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Cuerpo -->
	<div class="container">
	<div class="main">
	<div class="row">
			<div id="glycuerpo" class="col-xs-12 col-sm-6 col-md-3  well">
				
			<center><i style="font-size: 50px;" class="glyphicon glyphicon-thumbs-up"></i><p style="text-align: center;" id="pcuerpo">FUSCE</p><br>
			<p id="pcuerpo" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, culpa!</p></center>
				
			</div>
			<div id="glycuerpo" class="color2 col-xs-12 col-sm-6 col-md-3  well">
				<center><i style="font-size: 50px;" class="fa fa-truck" aria-hidden="true"></i><p style="text-align: center;" id="pcuerpo">VIVAMUS</p><br>
				<p id="pcuerpo" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, culpa!</p></center>
			</div>

			<div id="glycuerpo" class="color1 col-xs-12 col-sm-6 col-md-3  well">
				<center><i  style="font-size: 50px;" class="fa fa-flag" aria-hidden="true"></i><p style="text-align: center;" id="pcuerpo">LOREM</p><br>
				<p id="pcuerpo" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, culpa!</p></center>
			</div>

			<div id="glycuerpo" class="color1 col-xs-12 col-sm-6 col-md-3  well">
				<center><i style="font-size: 50px;" class="fa fa-flask" aria-hidden="true"></i><p style="text-align: center;" id="pcuerpo">CURIBITOR</p><br>
				<p id="pcuerpo" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, culpa!</p></center>
			</div>

		</div>
		<div class="row">
			<div class="col-md-4">
				<h4 id="h4cuerpo">Lorem ipsum dolor.</h4>
				<p id="pcuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere unde harum exercitationem eligendi reprehenderit provident pariatur. Natus temporibus quisquam tenetur aspernatur voluptatibus dolore, autem blanditiis sed cum aperiam! Est!</p>
				<img src="img/home/foto1.png" alt="">
				<div id="botoncuerpo" class="btn btn-primary btn-lg">LEER MÁS</div>

			</div>
			<div class="col-md-4">
				<h4 id="h4cuerpo">Lorem ipsum dolor.</h4>
				<p id="pcuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere unde harum exercitationem eligendi reprehenderit provident pariatur. Natus temporibus quisquam tenetur aspernatur voluptatibus dolore, autem blanditiis sed cum aperiam! Est!</p>
				<img src="img/home/foto2.png" alt="">
				<div id="botoncuerpo" class="btn btn-primary btn-lg">LEER MÁS</div>
			</div>
			
			<div class="col-md-4">
				<h4 id="h4cuerpo">Lorem ipsum dolor.</h4>
				<p id="pcuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere unde harum exercitationem eligendi reprehenderit provident pariatur. Natus temporibus quisquam tenetur aspernatur voluptatibus dolore, autem blanditiis sed cum aperiam! Est!</p>
				<img src="img/home/foto3.png" alt="">
				<div id="botoncuerpo" class="btn btn-primary btn-lg">LEER MÁS</div>
			</div>

		</div>
		
		<div class="row">
			<div class="col-md-3">
				<img src="img/home/foto-galeria1.jpg" alt="">
			</div>

		
		
			<div class="col-md-3">
				<img src="img/home/foto-galeria2.jpg" alt="">
			

		</div>	
		
			<div class="col-md-3">
				<img src="img/home/foto-galeria3.jpg" alt="">
			

		</div>
		
			<div class="col-md-3">
				<img src="img/home/foto-galeria4.jpg" alt="">
			

		</div>
		</div>
	
		</div>
		</div>

		<!-- Footer -->

	
	<div id="footerf" class="panel panel-default">
  	<div id="footerf" class="panel-body">
    		<div class="row">
    			<div class="col-md-4">
    				<h2 id="h2footer">CURSUS </h2> <p style="color: white; display: inline;">Edge</p>
    				<p id="pfooter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eaque pariatur nulla consectetur libero inventore culpa voluptatum dolor praesentium, maiores aspernatur, architecto, qui earum dicta. Accusamus temporibus fuga reiciendis dolor!</p>
    				<br>
    				<p id="pfooter">Telefono 123 456 7890</p>
    				<p id="pfooter">email JHOLBERT.C@GMAIL.COM</p>
    			</div>
    			<div id="divfooter" class="col-md-2">
    				<h3>Empresa</h3>
    				<ul class="nav">
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> Nosotros</li>
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> FAQ</li>
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> Contacto</li>
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> Legal</li>
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> Privacidad</li>
    				<li id="lifooter"><span class="glyphicon glyphicon-menu-right"></span> Testimonios</li>
    				</ul>
    			</div>
    			<div id="divfooter2" class="col-md-2">
    				<h3>Comunidad</h3>
    				<ul class="nav">
    					<li id="lifooter"><span class="glyphicon glyphicon-menu-right"> Blog</span></li>
    					<li id="lifooter"><span class="glyphicon glyphicon-menu-right"> Forum</span></li>
    					<li id="lifooter"><span class="glyphicon glyphicon-menu-right"> support</span></li>
    					<li id="lifooter"><span class="glyphicon glyphicon-menu-right"> Newsletter</span></li>
    				</ul>
    			</div>
    			<div class="col-md-4">
    				<h3 id="h2footer">noti BLOG</h3>
    				<p id="pfooter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore.</p>
    				<cite>01 May,2015</cite>
    				<br>
    				<p id="pfooter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt.</p>
    				<cite>01 May,2015</cite>
    			</div>
    		</div>
  	</div>
  	<div id="panelfooter">
	<p id="pfooterf">2015 Cantv</p>
		
		<span id="spanfooter">	
		<a  id="afooter"  href=""><i style="color: white;" class="fa fa-facebook-square"></i></a>
		<a  id="afooter"  href=""><i style="color: white;" class="fa fa-google-plus-square"></i></a>
		<a   id="afooter" href=""><i style="color: white;" class="fa fa-twitter-square"></i></a>
		</span>
		

	
  	</div>

	</div>




	<script src="js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>