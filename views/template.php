<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="views/images/icono.jpg">

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">

	<script src="views/js/jquery-3.6.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/animatescroll.js"></script>
	<script src="views/js/jquery.scrollUp.js"></script>

</head>

<body>

	<div class="container-fluid">

		<!--=====================================
		CABEZOTE
		======================================-->
		
		<header class="row">
			
			<!-- LOGOTIPO -->

			<div id="logo" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					
				<img src="views/images/logotipo.png" class="img-responsive">

			</div>

			<!-- BOTONERA MOVIL -->
			
			<div id="botoneraMovil" class="navbar-header navbar-inverse">

				<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">

					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
           			<span class="icon-bar"></span>

				</button>
			
			</div>

			<!-- BOTONERA NORMAL -->
			
			<nav id="botonera" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 collapse navbar-collapse pull-right">
						
				<ul class="nav navbar-nav">
	
					<li><a href="#top">Noticias</a></li>
					<li><a href="#galeria">Galería</a></li>
					<li><a href="#articulos">Artículos</a></li>
					<li><a href="#videos">Videos</a></li>
					<li><a href="#contactenos">Contáctenos</a></li>

				</ul>

			</nav>

		</header>
		
		<!--====  Fin de CABEZOTE  ====-->

		<!--=====================================
		SLIDE
		======================================-->
		<div class="row">

		<div id="slide" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
				<ul>
			       <li>
		           	<img src="views/images/slide/slide01.jpg">
		           	<div class="slideCaption">
		           		<h3>Lorem Ipsum</h3>
				   		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		           	</div>
		           </li>
		           
			       <li>
		           	<img src="views/images/slide/slide02.jpg"> 	
		           	<div class="slideCaption">
		           		<h3>Lorem Ipsum</h3>
				   		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		           	</div>
		           </li>
		           
			       <li>
		           	<img src="views/images/slide/slide03.jpg">
		           	<div class="slideCaption">
		           		<h3>Lorem Ipsum</h3>
				   		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		           	</div>
		           </li>
		           
			       <li>
		           	<img src="views/images/slide/slide04.jpg">
		           	<div class="slideCaption">
		           		<h3>Lorem Ipsum</h3>
				   		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		           	</div>
		           </li>

	    		</ul>

			    <ol id="indicadores">			
					<li role-slide = "1"><span class="fa fa-circle"></span></li>
					<li role-slide = "2"><span class="fa fa-circle"></span></li>
					<li role-slide = "3"><span class="fa fa-circle"></span></li>
					<li role-slide = "4"><span class="fa fa-circle"></span></li>
				</ol>

				<div id="slideIzq"><span class="fa fa-chevron-left"></span></div>
				<div id="slideDer"><span class="fa fa-chevron-right"></span></div>

		</div>

		</div>

		<!--====  Fin de SLIDE  ====-->

		<!--=====================================
		TOP
		======================================-->

		<div class="row" id="top">
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
    
    			<img class="img-circle" src="views/images/icono01.png" width="30%">
        		<h3>Lorem Ipsum</h3>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
    
    			<img class="img-circle" src="views/images/icono02.png" width="30%">
        		<h3>Lorem Ipsum</h3>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
    
    			<img class="img-circle" src="views/images/icono03.png" width="30%">
        		<h3>Lorem Ipsum</h3>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
    
    			<img class="img-circle" src="views/images/icono04.png" width="30%">
        		<h3>Lorem Ipsum</h3>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    
    		</div>

		</div>

		<!--====  Fin de TOP  ====-->

		<!--=====================================
		GALERIA
		======================================-->

		<div class="row" id="galeria">

			<hr>
			
			<h1 class="text-center text-info"><b>GALERÍA DE IMÁGENES</b></h1>

			<hr>

			<ul>
					<li>
						<a rel="grupo" href="views/images/galeria/photo01.jpg">
						<img src="views/images/galeria/photo01.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo02.jpg">
						<img src="views/images/galeria/photo02.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo03.jpg">
						<img src="views/images/galeria/photo03.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo04.jpg">
						<img src="views/images/galeria/photo04.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo01.jpg">
						<img src="views/images/galeria/photo01.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo02.jpg">
						<img src="views/images/galeria/photo02.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo03.jpg">
						<img src="views/images/galeria/photo03.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo04.jpg">
						<img src="views/images/galeria/photo04.jpg">
						</a>
					</li>

					<li>
						<a rel="grupo" href="views/images/galeria/photo01.jpg">
						<img src="views/images/galeria/photo01.jpg">
						</a>
					</li>
					<li>
						<a rel="grupo" href="views/images/galeria/photo02.jpg">
						<img src="views/images/galeria/photo02.jpg">
						</a>
					</li>
			</ul>

		</div>

		<!--====  Fin de GALERIA  ====-->

		<!--=====================================
		ARTÍCULOS
		======================================-->

		<div class="row" id="articulos">
			
			<hr>

			<h1 class="text-center text-info"><b>ARTÍCULOS DE INTERÉS</b></h1>

			<hr>

			<ul>

				<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="views/images/articulos/landscape01.jpg" class="img-thumbnail">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#articulo1" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="views/images/articulos/landscape02.jpg" class="img-thumbnail">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#articulo1" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="views/images/articulos/landscape03.jpg" class="img-thumbnail">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#articulo1" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="views/images/articulos/landscape04.jpg" class="img-thumbnail">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#articulo1" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

			</ul>

		</div>

		<!--====  Fin de ARTÍCULOS  ====-->

		<!--=====================================
		VIDEOS
		======================================-->

		<div class="row" id="views/videos">

			<hr>
			
			<h1 class="text-center text-info"><b>GALERÍA DE VIDEOS</b></h1>

			<hr>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		
				<video controls width="100%">
        
        			<source src="views/videos/video01.mp4" type="video/mp4">

        		</video>

        	</div>

        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		
				<video controls width="100%">
        
        			<source src="views/videos/video02.mp4" type="video/mp4">
  
        		</video>

        	</div>

        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		
				<video controls width="100%">
        
        			<source src="views/videos/video03.mp4" type="video/mp4">
           	 	
        		</video>

        	</div>

        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		
				<video controls width="100%">
        
        			<source src="views/videos/video04.mp4" type="video/mp4">

        		</video>

        	</div>
		
		</div>

		<!--====  Fin de VIDEOS  ====-->

		<!--=====================================
			CONTÁCTENOS         
		======================================-->

		<footer class="row" id="contactenos">

			<hr>
			
			<h1 class="text-center text-info"><b>CONTÁCTENOS</b></h1>

			<hr>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0610775555!2d-75.60278588568637!3d6.255684295471969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429739f2122e9%3A0x7097411dc6e57e48!2sCl.+45f+%2382-31%2C+Medell%C3%ADn%2C+Antioquia%2C+Colombia!5e0!3m2!1ses!2sus!4v1470838764806" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron">

            		<h4 class="blockquote-reverse text-primary">
            			<ul>
			              <li><span class="glyphicon glyphicon-phone"></span>  (57)(4) 234 56 43</li>
			              <li><span class="glyphicon glyphicon-map-marker"></span>  Calle 45F 32 - 45</li>
			              <li><span class="glyphicon glyphicon-envelope"></span>  logotipo@correo.com</li>    
			          	</ul>      
            		</h4>
        
       			</div>

			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario" >

				<ol>
            		<li>
                		<a href="http://www.facebook.com" target="_blank">
                  		<i class="fa fa-facebook" style="font-size:24px;"></i>  
               		 	</a>
           			</li>

            		<li>
                		<a href="http://www.youtube.com" target="_blank">  
                  		<i class="fa fa-youtube" style="font-size:24px;"></i>  
               			</a>
            		</li>
            
            		<li>
                		<a href="http://www.vimeo.com" target="_blank">
                  		<i class="fa fa-vimeo" style="font-size:24px;"></i>  
                		</a>
            		</li>
       			</ol>

       			<form>
					    <input type="text" class="form-control"  placeholder="Nombre">
	
					    <input type="email" class="form-control" placeholder="Email">

					    <textarea name="" id="" cols="30" rows="10" placeholder="Contenido del Mensaje" class="form-control"></textarea>

					 
					  	<input type="button" class="btn btn-default" value="Enviar">
				</form>
								

			</div>

		</footer>

		<!--====  Fin de CONTÁCTENOS ====-->

		<!--=====================================
			ARTÍCULO MODAL         
		======================================-->

			<div id="articulo1" class="modal fade">
      
      			<div class="modal-dialog modal-content">
        
       			 <div class="modal-header" style="border:1px solid #eee">
                    
           		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		 <h3 class="modal-title">Lorem Ipsum</h3>
                    
        		</div>

        		<div class="modal-body" style="border:1px solid #eee">
                    
            	<img src="views/images/articulos/landscape02.jpg" width="100%" style="margin-bottom:20px">
            	<p class="parrafoContenido text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    
        		</div>

        		<div class="modal-footer" style="border:1px solid #eee">
                    
            	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
        		</div>

      			</div>

    		</div>

    	<!--====  Fin de ARTICULO MODAL ====-->
		
	</div>




<script src="views/js/script.js"></script>

</body>
</html>