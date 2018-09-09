<?php
session_start();



?>

<!DOCTYPE html>
<html lang="es"> <!--<![endif]-->  
<head>
    <title>Desarrollador - Carlos Andrés Elguedo</title>
    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Página de contacto de Carlos Andres Elguedo Padilla, Aquí encontraras todo lo necesario para saber más sobre sus apps, proyectos y por supuesto contactarme">
    <meta name="author" content="Carlos Andres Elguedo"/>
    <link rel="shortcut icon" href="icon.png"/>
    <meta name="keywords" content="HTML,CSS,XML,JavaScript, PHP, ingeniería de sistemas"/>  
	<!--
    <link href='http://fonts.googleapis.com/css?fa0mily=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/github-activity-0.1.1.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/octicons/octicons.min.css">
    
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left" src="assets/images/profile.png" alt="Carlos Elguedo" />
            <div class="profile-content pull-left">
                <h1 class="name">Carlos Andrés Elguedo</h1>
                <h2 class="desc">Estudiante – Ingeniería de sistemas</h2>   
                <ul class="social list-inline">
                    <li><a href="https://twitter.com/carlos_elguedo" target="_blank"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="https://plus.google.com/102289093299782226615?hl=es-419" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/carlos-andr%C3%A9s-elguedo-padilla-436a3b102" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="last-item"><a href="#ultimos_proyectos"><i class="fa fa-hacker-news"></i></a></li>                 
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" href="#contacarme"><i class="fa fa-paper-plane"></i> Contacto</a>              
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">Acerca de mi</h2>
                        <div class="content">
                            <p>Hola, soy estudiante de ingeniería de Sistemas en la Universidad de Cartagena, en Colombia y te agradezco por visitar mi sitio web.</p>    
         
							<p>Aquí conocerás todos mis proyectos y aplicaciones, y tal vez un link a la página o repositorio, por si quieres saber más de ellos y descargarlos. También veras los que están en desarrollo para que estés al tanto y puedas aportar mejoras, si quieres hacer algún proyecto o trabajo e incluso ayudarme a programarlos, puedes dejar tu comentario o idea en mis redes sociales.</p>
                            <p>Tengo varios proyectos, tanto de escritorios como web que puedes ver más abajo, pero los que más apasionan son los que en verdad edifican a la gente y no los hacen perder el tiempo, y si es algo con el fin de glorificar el nombre de Dios aún más le pongo más empeño y dedicación porque la alegría y satisfacción que produce saber que alguien use tus aplicaciones para honrar a Dios o aprender más de él, creeme que produce una gran satisfacción.</p>
							<p>Que <b>JEHOVÁ</b> creador del cielo y de la tierra te bendiga a ti y a los tuyos.</p>
                            <!--<p>En ningunas de mis aplicaciones cristianas veraz un rastro de publicidad ya que así debería de ser. Esto lo hago con mis propios recursos</p>
							<p>Envíanos tus comentarios de agradecimiento, opiniones, criticas, errores para mejorar, actualizar nuestras aplicaciones y saber que existe alguien en este planeta que nos agradece por que por medio nuestro está edificando su vida y sobre todo dándole la honra al Dios Todopoderoso.</p>
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section" id="ultimos_proyectos">
                    <div class="section-inner">
                        <h2 class="heading">Último proyecto</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="#" target="_blank">Mi Himnario - app</a></h3>
                                <p class="summary">El asistente perfecto para tener todos tus himnos a un solo click</p>
                                <div class="featured-image">
                                    <a href="" target="_blank">
                                    <img class="img-responsive project-image" src="assets/images/projects/mihimnario/1.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">Nueva</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>Mi Himnario es una aplicación donde tienes una gran cantidad de himnos y canticos para cantar en congregaciones, grupos de estudio y personalmente. Tienes al alcance de tu mano gran cantidad de himnos para exaltar el nombre de Dios en cualquier parte donde estés.</p>
                                </div><!--//desc-->         
                                <!--<a class="btn btn-cta-secondary" href="#" target="_blank"><i class="fa fa-thumbs-o-up"></i> Visita la pagina de Mi himnario</a>-->
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="#" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/mihimnario/2.jpg" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#" target="_blank">Letra completamente clara</a></h3>
                                    <p>Una interfaz limpia que permite ver la letra de todos los himnos de manera clara y centrada, para que puedas ver y seguir tus himnos.</p>
                                    <!--<p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>-->
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="#" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/mihimnario/3.jpg" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#" target="_blank">Totalmente personalizable</a></h3>
                                    <p>Podrás marcar himnos como favoritos para un rápido acceso, también crear un himno que quieras hacer en un momento de inspiración e incluso añadir uno ya existente para tenerlo a tu mano siempre.</p>
                                    <!--<p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>-->
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="#" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/mihimnario/4.jpg" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#" target="_blank">Muchos himnos y pistas</a></h3>
                                    <p>Mi himnario tiene una gran cantidad de himnos perfectamente organizados, esta lista se actualiza con cada actualización de la aplicación con los himnos que los usuarios piden o los que añadimos nosotros. También gran cantidad de pistas normales e instrumentales para escuchar y cantar.</p>
                                    <!--<p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>-->
                                </div><!--//desc-->                          
                            </div><!--//item-->                            
                            <!--
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="#" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/mihimnario/5.PNG" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#" target="_blank">Interfaz adaptable y agradable</a></h3>
                                    <p>Interfaz completamente amigable, de fácil manejo, agradable para todo tipo de usuarios (niños, jóvenes, adultos o ancianos), además de la elegancia que hacen que sea una aplicación de otro nivel.</p>
                                    <p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>
                                </div>
                            </div>
                            -->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Otros proyectos</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#">SIF - Servicio Independiente Facil</a></h3>
                                <p class="summary">La aplicación que busca revolucionar la manera de trabajar de los trabajadores, dando herramientas para tener más clientes. Dirigida para todo público mayor de edad.</p>
                                <!--<p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>-->
                                
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="#">¿Quién sabe más de la biblia?</a> <span class="label label-theme">Pc's</span></h3>
                                <p class="summary">La aplicación perfecta para dinámicas en las congregaciones <b>Totalmente</b> personalizable, puedes crear y añadir tus propias preguntas de una manera tan fácil que te vas a sorprender al usarla.</p>
                                <!--<p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Ir a la pagina</a></p>-->
                            </div><!--//item-->
                            <!--<div class="item">
                                <h3 class="title"><a href="#">Project Title Maecenas Ornare</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div><!--//item-->
                            
                            <!--<a class="btn btn-cta-secondary" href="#">Cargar mas proyectos  <i class="fa fa-chevron-right"></i></a> -->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Experiencia de trabajo</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Desarrollador de aplicaciones de escritorio <span class="place"><a href="#">Universidad</a></span> <span class="year">(2013 - Presente)</span></h3>
                                <p>Aplicaciones resuelven problemas especificos, realizan alguna tarea y juegos; construidos usando diversos lenguajes de programación, realizados en mi etapa de estudio.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Diseñador y desarrollador app moviles <span class="place"><a href="#">Universidad</a></span> <span class="year">(2014 - Preente)</span></h3>
                                <p>Paginas, apps, y aplicaciones web, aportando a hacer del mundo un lugar más conectado y accesible desde cualquier lugar</p>
                            </div><!--//item-->
                            
                            <div class="item">
                                <h3 class="title">Gestor de sistemas <span class="place"><a href="#">Universidad</a></span> <span class="year">(2016 - Preente)</span></h3>
                                <p>Administración de sistemas de computos y configuración de redes</p>
                            </div><!--//item-->
                            
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                
                <section class="section" id="contacarme"><!--//section-->
                    <div class="section-inner">
                        <h4>Envia un comentario</h4>
			<div class="item">
                            <h3 class="title">Puedes ir a los enlaces de redes sociales y dejarme un mensaje</h3>
				<ul class="social list-inline">
                                    <li><a href="https://twitter.com/carlos_elguedo" target="_blank"><i class="fa fa-twitter"></i></a></li>                   
                                    <li><a href="https://plus.google.com/102289093299782226615?hl=es-419" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/carlos-andr%C3%A9s-elguedo-padilla-436a3b102" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
                        </div><!--//item-->
                        <form id = "Enviarcorreo">
                            
                        </form>
                        <hr />
                    </div>
                </section><!--//section-->
                
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Información básica</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Locación:</span>Catagena, COL</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Correo:</span><a href="#">carlos-elguedo@outlook.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Sitio web:</span>Bienvenido a mi página web...</li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Conocimientos</h2>
                        <div class="content">
                            <p class="intro">Mi conocimiento acerca de los lenguajes de programación y tecnologias es:</p>
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">Python &amp; Django<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Conozco lo básico para poder realizar una aplicación web">Básico</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="40%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Javascript<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Node js, Angular js, JQuery y React js; Evolucionan a un ritmo increíble...">Experto</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3 <span  class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Herramientas muy útiles para el desarrollo de aplicaciones en la actualidad, son maravillosas...">Experto</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Java &amp; JSP <span  class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Este poderoso lenguaje lo manejo profesionalmente">Profesional</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">PHP <span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Excelente manejo de este útil lenguaje :)">Profesional</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">.NET<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Conozco el entorno y sus herramientas, pero muy básico">Básico</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="30%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Windows Server (2012)<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Capaz de realizar varias tareas desde este sistema operativo">Buenoo</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>                                      
                                    </div><!--//level-bar-->              
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Linux<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Capaz de realizar diferentes tareas desde este sistema operativo">Buenoo</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="50%">
                                        </div>                                      
                                    </div><!--//level-bar-->              
                                </div><!--//item-->
                                
                                <!--<p><a class="more-link" href="#"><i class="fa fa-external-link"></i> Mas lenguajes</a></p> -->
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
                <aside class="list conferences aside section">
                    <div class="section-inner">
                        <h2 class="heading">Bases de datos</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-table"></i>
                                    MySql
                                </li>
                                <li>
                                    <i class="fa fa-table"></i>
                                    MongoDB
                                </li>
                                <li>
                                    <i class="fa fa-table"></i>
                                    PostgreSQL
                                </li>
                                <li>
                                    <i class="fa fa-table"></i>
                                    SQL Server
                                </li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Educación</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> Ingeniería de sistemas</h3>
                                <h4 class="university">Universidad de Cartagena<span class="year">(2013-presente)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> Bachiller académico</h3>
                                <h4 class="university">Fulgencio Lequerica Vélez <span class="year">(2006-2011)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                
                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Lenguajes</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Ingles:</strong></span>
                                    <span class="level">Nivel Medio <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Español:</strong></span>
                                    <span class="level"> Nativa<br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Mis frases</h2>
                        <div class="content">

                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>La tecnología avanza muy rápida, por lo que siempre hay que estar al día con las herramientas que manejas</p>
                                </blockquote>                
                                <p class="source"><span class="name">Carlos Elguedo</span><br /><span class="title">Ingeniero de sistemas</span></p>
                            </div><!--//item-->
                            
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>Si las personas de este mundo entendieran que Jesús el hijo de Dios, murió por sus pecados los aceptarían y obedecieran, pero no entienden el gran plan del Señor.</p>
                                </blockquote>                
                                <p class="source"><span class="name">Carlos Elguedo</span><br /><span class="title">Ingeniero de sistemas</span></p>                                                             
                            </div><!--//item-->
                            
                            <!--<p><a class="more-link" href="#"><i class="fa fa-external-link"></i> Mas frases</a></p> -->
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                            
                <!--
                <aside class="blog aside section">
                    <div class="section-inner">
                        <h2 class="heading">Otras páginas de interés</h2>
                        <p>Buenas aplicaciones nuevas diferentes y difíciles de encontrar en las tiendas,<a href="https://github.com/sdepold/jquery-rss" target="_blank"> aquí encontraras</a> y descubrirás apps muy útiles.</p>
                        <!--
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">jQuery RSS plugin</a> to pull in your blog post feeds.</p>
                        
                        <div id="rss-feeds" class="content">

                        </div>
                    </div>
                </aside>
                -->
                
                <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Artistas de música favoritos</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="#">Marcela Gándara</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Tercer Cielo</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Jesús Adrián Romero</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Redimi2</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                
                
                <aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Creditos</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap 3.2</a></li>
                                <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwsome 4.1</a></li>
                                <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
                                <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i> jQuery RSS</a></li>
                                
                                <li>Imagen de perfil: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Facebook.com</a></li>
                                <li>iPad and iPhone mocks: <a href="https://dribbble.com/perlerar" target="_blank">Regy Perlera</a></li>
                                
                            </ul>
                            
                            <hr/>
                            
                             <p>Esta plantilla fue hecha a mano por UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> para los desarrolladores y es totalmente <strong>gratis</strong> bajo <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a></p>
                             <p>Puedes seguir al creador en el siguiente link:</p>
                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> 3rdwave</a>
                            <!--<a class="btn btn-cta-primary btn-download" href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank"><i class="fa fa-download"></i> I want to download</a>-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github activity plugin -->
    <script type="text/javascript" src="assets/plugins/github-activity/dist/mustache/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/dist/github-activity-0.1.1.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
    <!--
	<script type="application/ld+json">{
          "@context": "http://schema.org",
          "@type": "Desarrollador",
          "url": "http://caep.atwebpages.com/",
          "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+57-304-677-9394",
            "contactType": "customer service"
          }]
        }
    </script>
	-->
</body>
<?php

require './src/visitante.php';

?>

</html> 

