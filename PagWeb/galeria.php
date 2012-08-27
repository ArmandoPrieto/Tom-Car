<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.0.2.15338
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
   <title>Tomatis - Terapia de Escucha</title>

   <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
      <script type="text/javascript" src="js/jquery-1.6.1.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
          <script type="text/javascript" src="js/galleria-1.2.3.min.js"></script>

	

   
	

    <style>
	
	 .cred{margin-top:20px;font-size:11px;}
            
            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:520px;}
			

	#boton-de-galeria{
				
		position: absolute;
		left: 640px;
		top: 10px;
		z-index: 1000;
		text-align:right;
		color:  #FFF;
		cursor:pointer;
		width:200px;
		 font-family:Helvetica-Conth,Arial, Helvetica, Sans-Serif;
   font-size: 13px;
  font-style: normal;
  font-weight: bold;
  
		
		
	}
	.ficha{
		margin-top:10px;
		width:200px;
		color:#FFF;
		}
	
			.ficha a{
				color:#FFF !important;
				text-decoration:none !important;
				font-family:Helvetica-Conth,Arial, Helvetica, Sans-Serif !important;}
			.ficha a:hover{
				color:#008daa !important;}
	</style>
    
    
    <script>
	
	$(document).ready(function(){
		$("#menu-de-galeria").hide();
		$("#boton-de-galeria").click(function(){
			
			$("#menu-de-galeria").toggle('slow');
			
			
			});
			
		$(".ficha a").mouseenter(function(){
			
			$(this).css('color', '#008daa');
			
			
			});	
			
		
		$(".ficha a").mouseleave(function(){
			
			$(this).css('color', '#FFF');
			
			
			});
			
		$("#boton-de-galeria").mouseenter(function(){
			
			$(this).css('color', '#008daa');
			
			
			});	
			
		
		$("#boton-de-galeria").mouseleave(function(){
			
			$(this).css('color', '#FFF');
			
			
			});	
			
		});
	</script>
    <!--[if IE 6]><link rel="stylesheet" href="style.ie61.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div class="PageBackgroundSimpleGradient">
    </div>
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
                        <li id="principal" ><a href="index.php?pos=index" ><span><span>PRINCIPAL</span></span></a></li>
                        <li id="servicios"><a href="index.php?pos=servicios"><span><span>SERVICIOS</span></span></a>
                                    </li>
                        <!--<li id="equipo"><a ><span><span>EQUIPO</span></span></a></li>-->
                        <li id="testimonios"><a href="index.php?pos=testimonios" ><span><span>TESTIMONIOS</span></span></a>
						 <li id="galeria"><a href="galeria.php?galeria=0" class="active"><span><span>GALERÍA</span></span></a>
						
						<li id="contactanos"><a href="index.php?pos=contactanos" ><span><span>CONTÁCTANOS</span></span></a>
						<li id="development"><a href="index.php?pos=tomatis" ><span><span>TOMATIS DEVELOPMENT</span></span></a>
                        

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
                
                
                <?php
				
				
	function listar_directorios_ruta($ruta="img-galeria/"){ 
 	$gale= array();
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               //echo "<br>Directorio: $ruta$file"; 
               
			   $gale[]= $file;
			   
			  // $gale[]= array_merge($gale, listar_directorios_ruta($ruta . $file . "/")); 
            }else if(is_file($ruta . $file) && $file!="meta.xml"){
				
				//echo "<br>Archivo: $ruta$file";
				} 
         
		 } 
      closedir($dh); 
      return($gale);
	  } 
   	}else 
      echo "<h1>No es ruta valida</h1>"; 
	} 

		function listar_archivos_ruta($ruta="img-galeria/"){ 
 	$gale= array();
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               //echo "<br>Directorio: $ruta$file"; 
               
			  
			   
			  // $gale[]= array_merge($gale, listar_directorios_ruta($ruta . $file . "/")); 
            }else if(is_file($ruta . $file) && $file!="meta.xml"){
				 $gale[]= $file;
				//echo "<br>Archivo: $ruta$file";
				} 
         
		 } 
      closedir($dh); 
      return($gale);
	  } 
   	}else 
      echo "<h1>No es ruta valida</h1>"; 
	} 
				?>
                
                    <div class="content">
                        <div class="Post">
						
						
                            <div class="Post-body">
                        <div class="Post-inner">
                            <h2 class="PostHeaderIcon-wrapper">
                                <span class="PostHeader"></span>
                            </h2>
                            <div class="PostContent">
                               
                               
                                <div id='boton-de-galeria' >
                               ALBUMES
                                <div id='menu-de-galeria'  >
                               
                               <?php
							   
							   $gale1 = listar_directorios_ruta("img-galeria/");
							   for($i=0;$i<count($gale1);$i++){
								   
								   
								   echo "<div class='ficha'><a href='galeria.php?galeria=".$i."'>".$gale1[$i]."</a><br />
								   <input type='hidden' value='".$i."' /></div>";
								  
								   }
							   ?>
                                
                                </div>
                                
                                </div>
                                
                              <div id='galleria'>
                                <?php
								$album="";
								$artista="";
								$fotografo="";
								$archivo = "img-galeria/".$gale1[$_GET['galeria']]."/meta.xml"; 
								if (file_exists($archivo)) { 
								  $metadatos = simplexml_load_file($archivo);  
								  if($metadatos){ 
									foreach ($metadatos->metadato as $metadato) {  
									  $album= $metadato->album; 
									  $artista= $metadato->artista; 
									  $fotografo= $metadato->fotografo; 
									    
									} 
								  } else echo "Sintaxi XML inválida"; 
								} else echo "Error abriendo rss.xml"; 
							   
							   $gale2 = listar_archivos_ruta("img-galeria/".$gale1[$_GET['galeria']]."/");
							   for($i=0;$i<count($gale2);$i++){
								   
								 echo " <a href='#'>
                                        <img title='".$album."'
                                             alt='".$artista."- Foto: ".$fotografo."' 
                                             src='img-galeria/".$gale1[$_GET['galeria']]."/".$gale2[$i]."' />
                                    	</a>";
								   }
							   ?>
                              
                            
           
           
             						
           
                                    
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        
                    </div>
                </div>
				
				
                <div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                       
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
        <!-- If you'd like to support Artisteer, having the "created with" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
    <p class="page-footer"> <!--Programada por <a href="http://www.google.com/">Armando Prieto</a>.--></p>
    </div>
      <script language="javascript">
	
	  // Load the classic theme 
	  Galleria.loadTheme('js/galleria.classic.js');
    	$('#galleria').galleria();	
    
	</script>
</body>
</html>
