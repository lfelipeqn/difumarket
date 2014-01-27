<?php
    require_once('twitteroauth.php'); //Path to twitteroauth library
    $twitteruser = "difumarket";
    $notweets = 2;
    $consumerkey = "lCIjb8fmalqumpYWatAVg";
    $consumersecret = "sclEM4bisitoj6LFPtZwzMPFq09rDWR2QQuGEajxng";
    $accesstoken = "1602373165-PrW2zR5LcO7l4rHROSQgkdFbCeCqnb13neJGeaj";
    $accesstokensecret = "YCzufhDmLmVhLy7Ar71VzVi2JVivY9zAYd0ygXDC4";
 
    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
        $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
        return $connection;
    }
 
    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
    //Check twitter response for errors.
    if ( isset( $tweets->errors[0]->code )) {
        // If errors exist, print the first error for a simple notification.
        echo "Error encountered: ".$tweets->errors[0]->message." Response code:" .$tweets->errors[0]->code;
    }else{
        // No errors exist. Write tweets to json/txt file.
        $listanoticias=json_encode($tweets);        
        $noticias=json_decode($listanoticias);
    }    
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge; chrome=1" />
        <link type="text/css" href="styles/style.css" rel="stylesheet" />        
        <script type="text/javascript" src="scripts/jquery.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.js"></script>
        <title>Difumarket</title>
    </head>
    <body style="margin: 0px;">
        <div class="header">
            <div class="h1"></div>
            <div class="h2"></div>
            <div class="h3"></div>
            <div class="h4"></div>
				<div class="menu-wrapper">            
            <div class="menu">
                <img src="images/g58268.png"/>
            </div>
            <div class="menu-opciones">
					<div id="nosotros">About Us</div>
					<div id="estudio">Studio</div>
					<div id="trabajo">Workshop</div>
					<div id="crm">CRM</div>
           	</div>
           	</div>
        </div>
        <div class="cuerpo" id="cuerpo">            
            <div class="slider" ><img  src="images/g2995.png" /></div>
            <div class="about">
                <div class="titulo">About Us</div>
                <div class="subtitulo">Equipo 100% Creativo</div>
                <br>
                <div class="seccion">Somos un taller de arte dedicado a la creación, asesoría y apoyo de lenguaje visual. Diseñamos,
desarrollamos, y producimos, material publicitario y promocional efí­mero o perdurable.
Nuestro amplio rango de servicios nos permite responder creativa y funcionalmente, adquiriendo
un compromiso de servicio Íntegro y de calidad.</div><br>
<div class="seccion">
Nos establecimos desde 2008, evolucionando progresivamente, supliendo las necesidades
del mercado, logrando el posicionamiento de marcas y su activación mediante la integración
de diversas disciplinas de marketing.</div><br>
<div class="seccion">
La inmediatez y la efectividad como principios básicos de difusión, apoyados con un equipo
profesional, dinámico y creativo, que conciben ideas de alto impacto a su disposición ,confiriendo
así el posicionamiento y fidelización de su marca, generando un vínculo real que proporcione
permanencia a largo plazo, empleando idóneamente todas las herramientas especializadas
a nuestro alcance.</div>
				</div>

            <div class="twitter">
            	<div class="twitter-wrapper">
            		<div class="titulo-twitter">Latest News</div>
               	<div class="subtitulo-twitter"><div>Las Ultimas en Twitter</div></div>
               	<div class="tweet">
               		<h3>Dice @Difumarket</h3>
               		<span> <?php echo date( 'd M Y', strtotime($noticias[0]->created_at) ); ?></span>
               		<div>
               			<p><?php echo utf8_decode($noticias[0]->text); ?></p>
               		</div>
               		<h3>Dice @Difumarket</h3>
               		<span> <?php echo date( 'd M Y', strtotime($noticias[0]->created_at) ); ?></span>
               		<div>
               			<p><?php echo utf8_decode($noticias[1]->text); ?></p>
               		</div>
               	</div>
               </div>
				</div>
            <br>
            <div class="studio">
            	<div class="studio-wrapper">
            			<div class="studio-contenido">
            				<br>
            				<div class="titulo">Studio</div>
                			<div class="subtitulo">Concepto Alternativo</div>
                			<div class="seccion small">Valoramos el concepto de la imagen, resaltamos sus características en pro de afianzar un 
lenguaje que hable por sí mismo, combinando eficazmente las ideas y su ejecución a 
través de:</div>
							</div>
							<div class="tabla-studio">
								<div>
									<div class="tabla-titulo grafico">Diseño <span>Grafico</span></div>
									<div class="tabla-titulo industrial">Diseño <span>Industrial</span></div>
									<div class="tabla-titulo medios"><span>Medios </span>Electrónicos</div>
									<div class="tabla-lista ecp">
										<ul>									
											<li>Editorial</li>
											<li>Conceptual</li>
											<li>Promocional</li>
										</ul>
									</div>
									<div class="tabla-lista mse">
										<ul>									
											<li>Mobiliario</li>
											<li>Stands</li>
											<li>Efimeros</li>
										</ul>
									</div>
									<div class="tabla-lista wamnpc">
										<ul>									
											<li>Web Sites</li>
											<li>Aplicativos</li>
											<li>Mapping</li>
											<li>Newsletter</li>
											<li>Personajes</li>
											<li>CRM</li>
										</ul>
									</div>
									<div class="tabla-lista imagenes">
										<ul>									
											<li><img src="images/at.png" /></li>
											<li><img src="images/light.png" /></li>
											<li><img src="images/3d.png" /></li>
										</ul>
									</div>								
								</div>
							</div>
					</div>
            </div>
            <div class="fresco">
            	<div>
						<div id="idea" ><img src="images/idea.png" /></div>            		
            		<div id="simio" ><img src="images/g57687.png" /></div>
            	</div>
            </div>
            <div class="workshop">
            	<div class="workshop-wrapper">
                <div class="titulo">Workshop</div>
                <div class="subtitulo">Herramientas para la Innovacion</div>
                <br>
                <div class="seccion">Sabemos que lograr la ejecución de un proyecto conlleva a la integración de múltiples variables,
que inciden en su buena realización, los pormenores son trascendentales y pueden tergiversar
la concepción original, por ello hacemos posible su materialización, a partir del
diseño, desarrollo, producción y montaje para la promoción, exhibición y venta de productos
y servicios.</div><br>
            <div class="seccion">
Apoyados en la utilización de una diversidad de materiales y procesos (Proceso de metalmecánica,
Madera, Acrí­licos, Plásticos, Fibras) con el fin de otorgarle soluciones integrales y un
máximo de satisfacción.</div>
					</div>
				<br>
				</div>
				<div class="workshop fondo-nube">
				<div class="portafolio">
					<div class="portafolio-wrapper">
						<div class="bloque">
								<div class="numero uno">01</div>
								<div class="texto texto-uno">Diseñamos</div>
								<div class="mas"><img src="images/mas.png" ></div>
								<div class="web"><span>WEB</span>sites</div>
								<div class="texto2">CRM / Newsletter / Mapping / Personajes Virtuales</div>							
						</div>
						<div class="bloque">
							<div class="gray-at"><img src="images/gray-at.png" ></div>
							<div class="numero dos">02</div>
							<div class="texto texto-dos">Desarrollamos</div>
							<div class="play"><img src="images/play.png" ></div>
							<div class="texto exhib">Sistemas de Exhibición</div>
							<div class="texto comer">Comercial & Efímeros</div>
							<div class="texto stand">Stand / Mobiliario</div>
						</div>
						<div class="bloque">
							<div class="numero tres">3D</div>
							<div class="texto texto-tres">Modelado Renderizado</div>
							<div class="design">DISEÑO</div>
							<div class="texto graidn">Gráfico e Industrial</div>
							<div class="pause"><img src="images/pause.png"/></div>
							<div class="branding">BRANDING</div>
							<div class="texto lito">Litográfico, Digital, Promocional</div>
						</div>
						<div class="bloque">
							<div class="plus"><img src="images/plus.png" ></div>
							<div class="numero cuatro">04</div>
							<div class="texto texto-cuatro">Producimos</div>
							<div class="pop">P.O.P.</div>
							<div class="texto merca">Merchandising</div>
						</div>
					</div>
				</div>
				<div class="parque">
				</div>
			</div>
        </div>
        <div class="footer-wrapper" id="pie"> 
        <div class="footer">
        		<div class="contacto">
        			<div><span>¡Hablemos!</span></div>
        			<div style="opacity: 0.5;">(57+1) 2553054</div>
        		</div>
        		<div class="barra"></div>
        		<div class="redes">
        			<div>
        				<div class="wrapper"><img src="images/redes-twitter.png" /></div>
        				<div class="wrapper"><img src="images/redes-facebook.png" /></div>
        				<div class="wrapper"><img src="images/redes-you-tube.png" /></div>
        			</div>
        			<div class="redes-slogan">siguenos en nuestras redes sociales</div>
        		</div>
        		<div class="barra"></div>
        		<div class="correo">
        			<div><span>info@difumarket.com</span></div>
        			<div style="opacity: 0.5;">Carrera 26 No. 63 A 22 / Bogotá - Colombia</div>
        		</div>
        </div>
        </div>
        <script>        	        		
					
					$('#nosotros').hover(function(){
						$(this).animate({backgroundPosition: "0px", color: "#fff"},500)
						$('#estudio').animate({backgroundPosition: "390px", color: "gray"},500)
						$('#trabajo').animate({backgroundPosition: "390px", color: "gray"},500)
					})        			
					
					$('#estudio').hover(function(){
						$(this).animate({ backgroundPosition: "0px", color: "#fff"},500)
						$('#nosotros').animate({backgroundPosition: "390px", color: "gray"},500)
						$('#trabajo').animate({backgroundPosition: "390px", color: "gray"},500)
					})
					
					$('#trabajo').hover(function(){
						$(this).animate({backgroundPosition: "0px", color: "#fff"},500)
						$('#nosotros').animate({backgroundPosition: "390px", color: "gray"},500)
						$('#estudio').animate({backgroundPosition: "390px", color: "gray"},500)
					})
        			
        			$('#nosotros').click(function(){        				
        				$('.cuerpo').scrollTo($('.about'),800);
        			})
        			
        			$('#estudio').click(function(){        				
        				$('.cuerpo').scrollTo($('.studio'),800);
        			})
        			
        			$('#trabajo').click(function(){        				
        				$('.cuerpo').scrollTo($('.workshop'),800);
        			})		
        			
					jQuery.fn.scrollTo = function(elem, speed) { 
    					$(this).animate({
        					scrollTop:  $(this).scrollTop() - $(this).offset().top + $(elem).offset().top 
    					}, speed == undefined ? 1000 : speed); 
    					return this; 
					};        			
        			
					$('.cuerpo').on("scroll",function(){
						var alto = $('.cuerpo').height();
        				var ajuste = alto+143;
        				$('.footer-wrapper').css({"top":ajuste})
					})        			
        			
        			$(document).ready(function(){
        				var alto = $('.cuerpo').height();
        				var ajuste = alto+143;
        				$('.footer-wrapper').css({"top":ajuste})
        			})       			
        			
        </script>
    </body>
</html>