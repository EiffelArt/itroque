<!DOCTYPE html>
<html>
<head>
	<title>INSTITUTO TECNOLOGICO DE ROQUE Tecnologico Nacional de Mexico - CON GIT - VERSION DOS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js/jquery-latest.js"></script>
		<script type="text/javascript" >
$(document).ready(main);
var contador = 1; 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
		if(contador == 1){
			$('nav').animate({
				left: '10%'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
};
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />

</head>
<body>
<!-- LA CLASE CONTENEDOR ES LA PRINCIPAL DONDE SE CONTIENEN CADA UNO DE LOS ELEMTNOS PARA CREAR UN DISEÑO RESPONSIVO-->
<div class="contenedor">
<!-- CLASE CONTENDOR-->

<?php include("include/menu-main.html"); ?>

<!-- TERMINA ENCABEZADO-->
	<div class="bar-main">
		<div class="slider">
			<ul>
				<li><img src="images/banner01.png"></li>
				<li><img src="images/banner02.jpg"></li>
			</ul>
		</div>
	</div>


	<div class="contenidoPrincipal">
		<div class="dosColumnas">
			
			<div class="tecNoticias">
					<img src="images/tecnonoticias.png">

					<article>
						<label class="date-articulo">12 AGO</label>	
						<img src="images/tecnoticias/12-agosto.jpg">
					</article>
					<article>
						<label class="date-articulo">11 AGO</label>
						<img src="images/tecnoticias/11-agosto.jpg">
					</article>

			</div>
			<div class="eventos">
						<img src="images/eventos.png">
			</div>
		</div>		
		<div class="mensajes">
			<img src="images/bar-slide/reforma.jpg">
			<img src="images/bar-slide/mensaje-director.jpg">
		</div>

	</div>
	<footer>
		<div class="estudiantes">
			<p class="titles-footer">Estudiantes</p>
			<ul>
				<li><a href="">Evaluacion Docente</a></li>
				<li><a href="">Sistema de Informacion</a></li>
				<li><a href="">Becas</a></li>
				<li><a href="">Tutorias</a></li>
				<li><a href="">Titulacion</a></li>
				<li><a href="">Servicio Social</a></li>				
				<li><a href="">Residencias</a></li>				
				<li><a href="">Egresados</a></li>				
				<li><a href="">Certificados</a></li>				
				<li><a href="">Reglamento Alumnos</a></li>				
				<li><a href="">Centro de Informacion</a></li>				
				<li><a href="">Idiomas</a></li>				
				<li><a href="">Actividades Extraescolares</a></li>				
			</ul>
		</div>
		<div class="ofertaEducativa">
			<p class="titles-footer">Oferta Educativa</p>
			<ul>
				<li><a href="">Gestion Empresarial</a></li>
				<li><a href="">Agronomia</a></li>
				<li><a href="">Tecnologias de Informacion y Comunicacion</a></li>
				<li><a href="">Industrias Alimentarias</a></li>
				<li><a href="">Inovacion Agricola</a></li>
				<li><a href="">Hidrologica</a></li>				
				<li><a href="">Posgrado</a></li>				
				<li><a href="">Ingenierias Mixtas</a></li>				
			</ul>
		</div>
		<div class="sitiosRelacionados">
			<p class="titles-footer">Sitios relacionados</p>
			<ul>
				<li><a href="">TECNOLOGICO NACIONAL DE MEXICO</a></li>
				<li><a href="">SEP</a></li>
				<li><a href="">CONACyT</a></li>
				<li><a href="">COEPES</a></li>
				<li><a href="">UNIVERSIA</a></li>
				<li><a href="">ECSET</a></li>				
				<li><a href="">MIT Technology Innovadores</a></li>				
				<li><a href="">SOMECTA</a></li>				
				<li><a href="">CONRICYT</a></li>				
			</ul>
		</div>
		<div class="temasInteres">
			<label class="titles-footer">Temas de interes</label>
						<ul>
				<li><a href="">NotiTec</a></li>
				<li><a href="">Cursos de Industrias</a></li>
				<li><a href="">Programa Educativo Rural(PER)</a></li>
				<li><a href="">Modelo Educativo del Siglo XX1</a></li>
				<li><a href="">Lineamientos Academicos Administrativos</a></li>
				<li><a href="">Incubadora de Empresas</a></li>				
				<li><a href="">Quehacer Educativo</a></li>				
				<li><a href="">Convocatorias</a></li>				
				<li><a href="">Noticias de la Region</a></li>				
				<li><a href="">Academia y Ciencia ITR</a></li>				

			</ul>
		</div>
		
	</footer>
<!-- TERMINA DIV DE CLASE CONTENEDOR -->
</div>
<!-- TERMINA EL DIV CONTENEDOR-->
</body>
</html>