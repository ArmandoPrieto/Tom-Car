<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Método Tomatis en Venezuela </title>
	<meta name="keywords" content="Tomatis, Tomatis Caracas, Metodo Tomatis, Terapia Auditiva, Tomatis Venezuela" />
	<link rel="shortcut icon" href="/images/favicon.ico" />
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="js/jquery-1.6.1.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

 <script type="text/javascript" src="sexy-lightbox-2.3/jQuery/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="sexy-lightbox-2.3/jQuery/sexylightbox.v2.3.jquery.min.js"></script>
 
  <link rel="stylesheet" href="sexy-lightbox-2.3/jQuery/sexylightbox.css" type="text/css" media="all" />



  <style>
  .alertbox
  {
    background  : url(sexy-lightbox-2.3/jQuery/images/dialog-help.png) no-repeat scroll left top;
    margin      : 0 10px;
    padding     : 0 0 5px 40px;
    font-family : Verdana;
    font-size   : 12px;
    text-align  : left;
  }
  .alertbox .buttons
  {
    text-align  : right;
  }
  
 
  </style>   

   <script language="javascript">
	
	 
    
	
	$(document).ready(function(){
		SexyLightbox.initialize({color:'blanco', dir: 'sexy-lightbox-2.3/jQuery/sexyimages'});
		
 $("#bienvenida").click();
 
 function bien(){
 
 $("#bienvenida").click();
 
 }
 
	<?php
	
	if($_GET['pos']=="servicios"){
	echo "$('#contenedor').load('servicios.htm');
	clean();
	$('#servicios').eq(0).find('a').addClass('active');
	";
	
	}else if($_GET['pos']=="testimonios"){
	echo "$('#contenedor').load('testimonios.htm');
	clean();
	$('#testimonios').eq(0).find('a').addClass('active');
	";
	
	}else if($_GET['pos']=="contactanos"){
	echo "$('#contenedor').load('contactanos.htm');
	clean();
	$('#principal').eq(0).find('a').addClass('active');
	";
	
	}else if($_GET['pos']=="tomatis"){
	echo "$('#contenedor').load('development.htm');
	clean();
	$('#development').eq(0).find('a').addClass('active');
	";
	
	}else{
	echo "$('#contenedor').load('principal.htm');
	clean();
	$('#principal').eq(0).find('a').addClass('active');
	";
	} 
		?>
		
		$("#jquery_jplayer").jPlayer({
		ready: function () {
			this.element.jPlayer("setFile", "flauta.mp3").jPlayer("play");;
		},
		ended: function() { // The $.jPlayer.event.ended event
		$(this).jPlayer("play"); // Repeat the media
		},
		preload: 'metadata',
		supplied: "mp3,wav,wma",
		volume: 80,
		cssSelector: {
		  play: '.jp-play',
		  pause: '.jp-pause',
		  stop: '.jp-stop',
		  seekBar: '.jp-seek-bar',
		  playBar: '.jp-play-bar',
		  mute: '.jp-mute',
		  unmute: '.jp-unmute',
		  volumeBar: '.jp-volume-bar',
		  volumeBarValue: '.jp-volume-bar-value',
		  currentTime: '.jp-current-time',
		  duration: '.jp-duration'
		 },
		preload: 'none'
	
	
	});
		
		
		
		function clean(){
		
		$(".artmenu li").each(function(){
		
		$(this).eq(0).find("a").removeClass('active');
			
		
		});
		
		}
		
		$(".desplega").live('click',function(){
			$(this).parent().eq(0).find(".PostContent").toggle('slow');
			
			});
		$("#principal").click(function(){
			$("#contenedor").load("principal.htm");
			clean();
			$(this).eq(0).find("a").addClass('active');
			
		});
		
		$("#servicios").click(function(){
			$("#contenedor").load("servicios.htm");
			clean();
			$(this).eq(0).find("a").addClass('active');
			});
		
		$("#equipo").click(function(){
			$("#contenedor").load("equipo.htm", function(){
				
				$(this).eq(0).find(".PostContent").eq(0).find(".PostContent").hide();
					
				});
			clean();
			$(this).eq(0).find("a").addClass('active');
				
			
		});
		
		
		$("#contactanos").click(function(){
			$("#contenedor").load("contactanos.htm");
			clean();
			$(this).eq(0).find("a").addClass('active');
			
		});
		$("#development").click(function(){
			$("#contenedor").load("development.htm");
			clean();
			$(this).eq(0).find("a").addClass('active');
			
		});
		$("#testimonios").click(function(){
			$("#contenedor").load("testimonios.htm");
			clean();
			$(this).eq(0).find("a").addClass('active');
			
		});
		
		
});
		
		
		</script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->

	<!-- Añade esta etiqueta en la cabecera o delante de la etiqueta body. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'es'}
</script>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22387757-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</head>
<body>

<!-- MENSAJE SE BIENVENIDA-->

<!-- MENSAJE SE BIENVENIDA-->

<div class="Main">
        <div class="Sheet">
            <div class="Sheet-tl"></div>
            <div class="Sheet-tr"><div></div></div>
            <div class="Sheet-bl"><div></div></div>
            <div class="Sheet-br"><div></div></div>
            <div class="Sheet-tc"><div></div></div>
            <div class="Sheet-bc"><div></div></div>
            <div class="Sheet-cl"><div></div></div>
            <div class="Sheet-cr"><div></div></div>
            <div class="Sheet-cc"></div>
            <div class="Sheet-body">
                <div class="Header">
                    <div class="Header-jpeg"></div>
                    <div class="logo">
                        <h1 id="name-text" class="logo-name"><a href="#"></a></h1>
                        <div id="slogan-text" class="logo-text"></div>
                    </div>
                </div>
                <div class="nav">
                    <ul class="artmenu">
                        <li id="principal" ><a class="active"><span><span>PRINCIPAL</span></span></a></li>
                        <li id="servicios"><a ><span><span>SERVICIOS</span></span></a>
                                    </li>
                        <!--<li id="equipo"><a ><span><span>EQUIPO</span></span></a></li>-->
                        <li id="testimonios"><a ><span><span>TESTIMONIOS</span></span></a>
						 <li id="galeria"><a href="galeria.php?galeria=0"><span><span>GALERÍA</span></span></a>
						
						<li id="contactanos"><a ><span><span>CONTÁCTANOS</span></span></a>
						<li id="development"><a ><span><span>TOMATIS DEVELOPMENT</span></span></a>
                        

						</li>
                        </ul>
                    <div class="l">
                    </div>
                    <div class="r">
                        <div>
                        </div>
                    </div>
                </div>
                <div class="contentLayout">
                    <div class="content" id="contenedor">
                   
					</div>
                    
                    
                    
                    <div class="sidebar1">
                   <!--     <div class="Block">
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                            Newsletter
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div><form method="get" id="newsletterform" action="javascript:void(0)">
                                        <input type="text" value="" name="email" id="s" style="width: 95%;" />
                                        <button class="Button" type="submit" name="search">
                                                <span class="btn">
                                                    <span class="t">Subscribe</span>
                                                    <span class="r"><span></span></span>
                                                    <span class="l"></span>
                                                </span>
                                        </button>
                                        </form></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     --> 
					 <div class="Block">
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                            Noticias
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div>
                                                         
														  
														  <ul><li><b><a href="http://www.tomatisnew.com/biblioteca/Investigacion-Gerritsen.pdf" target="_blank">Investigaciones sobre la estimulación auditiva Tomatis</a></b>
                                                          <p>El Método Tomatis de estimulación auditiva utiliza la música, electrónicamente
														  modulada por un aparato diseñado por A. Tomatis, llamado el Oído Electrónico. El sonido
														  resultante se presenta a través de unos cacos con vibradores. Hay que destacar
														  que el Oído Electrónico Romatis ha evuluciona a través de los años<br/>
                                                                <a href="http://www.tomatisnew.com/biblioteca/Investigacion-Gerritsen.pdf" target="_blank">Leer Mas...</a>                
                                                          </p></li></ul>
                                                          <ul><li><b><a href="http://www.tomatisnew.com/biblioteca/melomano%20musicoterapia.pdf" target="_blank">La Música: recurso terapéutico</a></b>
                                                          <p>Vivimos rodeados de música, voluntaria o involuntariamente, 
														  elegida por nosotros o impuesta, clásica o pop. La información que nos llega acompañada de música que condiciona 
														  enormemente la aceptación o no de lo recibido. Es un arte integrador y socializador
														 <br/>
                                                                <a href="http://www.tomatisnew.com/biblioteca/melomano%20musicoterapia.pdf" target="_blank" >Leer Mas...</a>                
                                                          </p></li></ul>
                                                          </div>
                                    </div>
                                    
                                    
                                   
                                    
                                </div>
                               
                            </div>
                             
                        </div>
						
						 <div class="Block">
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                           Siguenos
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div>
                                                          
											 <img src="images/facebook.png" style="width:110px; height:auto; " /></a>
											<a href="http://twitter.com/#!/tomatiscaracas"><img src="images/boton_43.png" style="width:110px; height:auto; " /></a>
			
                                    </div>
                                    
                                    
                                   
                                    
                                </div>
                               
                            </div>
                             
                        </div>
						 </div>
<div class="Block">
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                            Links de interés
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div>
                                                          
														   <ul><li><b>
                                                          <a href="http://www.tomatis.com" target="_blank"> Tomatis.com </a>
														  
														  </b></li></ul>
														  
														  <ul><li><b>
                                                          <a href="http://www.neurodesarrollodevenezuela.com/" target="_blank"> Neuro desarrollo Venezuela </a>
														  
														  </b></li></ul>
                                                          
														  <ul><li><b>
                                                          <a href="http://www.centrodeterapia.org" target="_blank"> Centro de terapia </a>
														  
														  </b></li></ul>
														  
														   <ul><li><b>
                                                          <a href="http://fundaciondetodocorazon.blogspot.com/" target="_blank">Fundación de todo corazón</a>
														  
														  </b></li></ul>
														   <ul><li><b>
                                                          <a href="http://redparacrecer.org/" target="_blank">Red para crecer</a>
														  
														  </b></li></ul>
														   <ul><li><b>
                                                          <a href="http://autismoenvozalta.com/" target="_blank">Autismo en voz alta</a>
														  
														  </b></li></ul>
                                                          <ul><li><b>
                                                          <a href="http://fundadownvenezuela.org/" target="_blank">FundaDown Venezuela</a>
														  
														  </b></li></ul>
														  <ul><li><b>
                                                          <a href="http://tomatisvalencia.com/" target="_blank">Tomatis Valencia</a>
														  
														  </b></li></ul>
														  
														  
														  </div>
                                    </div>
                                    
                                    
                                   
                                    
                                </div>
                               
                            </div>
                             
                        </div>
            <div class="Block" >
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                            Conozca el método tomatis en 9 minutos
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent" style="margin-left:40px;">
                                    <div class="BlockContent-body">
                                    </div>
                                    
                                   
                                    <div id="videogallery">
	<a  id="bienvenida" href="bienvenida.html?width=733&height=390" rel="sexylightbox" title="El Método Tomatis y cómo se reproduce con Solisten" >
	<img src="data/thumbnails/0.png" alt="El Método Tomatis y como se reproduce con Solisten" /><span></span></a>
	</div>      
                                    
                                </div>
                               
                            </div>
                             
                        </div>      

  <!--<div class="Block" >
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                           Entrevistas
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent" style="margin-left:40px;">
                                    <div class="BlockContent-body">
                                    </div>
                                    
                                    <div id="videogallery1" >
	<a  id="bienvenida1" href="entrevista1.html?width=733&height=390" rel="sexylightbox" title="El Método Tomatis, entrevista Globovisión" >
	<img src="images/entrevista1.png" alt="El Método Tomatis, entrevista Globovisión" /><span></span></a>
	</div>   
                                   
                                    
                                </div>
                               
                            </div>
                             
                        </div>  -->                         
					 <img src="images/mozart.png" style="width:200px; height:auto; margin-left:35px;" />


<div class="Block">
                            <div class="Block-tl"></div>
                            <div class="Block-tr"><div></div></div>
                            <div class="Block-bl"><div></div></div>
                            <div class="Block-br"><div></div></div>
                            <div class="Block-tc"><div></div></div>
                            <div class="Block-bc"><div></div></div>
                            <div class="Block-cl"><div></div></div>
                            <div class="Block-cr"><div></div></div>
                            <div class="Block-cc"></div>
                            <div class="Block-body">
                                <div class="BlockHeader">
                                    <div class="header-tag-icon">
                                        <div class="BlockHeader-text">
                                            Sónido de fondo
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <div class="r"><div></div></div>
                                </div>
                                <div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div>
                                                          
												<div id="sonido" >			 
		 <div id="jquery_jplayer"></div>
   <div class="jp-single-player">
	<div class="jp-interface">
     <label style="margin-right:5px;"><b>La flauta mágica</b></label>
   <a href="#" id="jplayer_play" class="jp-play" tabindex="1"><img src="images/play.png" title="Play" style="width:10px; height:10px;" /></a>
			<a href="#" id="jplayer_pause" class="jp-pause" tabindex="1"><img src="images/pause.png" title="Pause" style="width:10px; height:10px;"/></a>
			<a href="#" id="jplayer_stop" class="jp-stop" tabindex="1"><img src="images/stop.png" title="Stop" style="width:10px; height:10px;" /> </a>
            <a href="#" id="jp-current-time" class=".jp-current-time" tabindex="1"></a>
			 <a href="#" id="jp-duration" class=".jp-duration" tabindex="1"></a>
	
          
            
         </div>
         </div>
         </div>          
		
        
        
                                    </div>
                                    
                                     </div>
                                   
                                    
                                </div>
                               
                            </div>
                             
                        </div>
		

					
                    </div>
                </div>
                <div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                       
                        <div class="Footer-text">
                            <p>PRÁCTICO TOMATIS AUTORIZADO ENERO 2012 POR TOMATIS DEVELOPMENT, S.A.</p>
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
        <!-- If you'd like to support Artisteer, having the "created with" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
        <p class="page-footer"> </p>
    </div>
    
</body>
</html>
