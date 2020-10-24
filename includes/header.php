<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ZoCALLo</title>
<link href="css/zocallo.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
 
	$("ul.submenu").parent().append("<span></span>"); 
	
	$("ul.menu li span").hover(function() { //Al hacer click se ejecuta...
		
		//Con este codigo aplicamos el movimiento de arriva y abajo para el submenu
		$(this).parent().find("ul.submenu").slideDown('fast').show(); //Menu desplegable al hacer click
 
		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.submenu").slideUp('slow'); //Ocultamos el submenu cuando el raton sale fuera del submenu
		});
 
		}).hover(function() { 
			$(this).addClass("subhover"); //Agregamos la clase subhover
		}, function(){	//Cunado sale el cursor, sacamos la clase
			$(this).removeClass("subhover"); 
	});
 
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37672065-1']);
  _gaq.push(['_setDomainName', 'zocallo.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

</head>

<body>
<!--inicia MW-->
<div id="main_wrapper">
<!--inicia header-->
<div id="header_wrapper">
<div class="header">
<div class="logo"><a href="index.php"><img src="images/logo.png" alt="ZoCALLo" width="200" height="35" border="0" /></a></div>
<!--menu-->
<div class="container"> 
    <div id="header"> 
 
        <ul class="menu"> 
            <li class="dashr"><a href="quien-es-zocallo.php">Qui&eacute;n es ZoCALLo?</a>
            <ul class="submenu">
                    <li><a href="nuestra-filosofia.php">Nuestra filosof&iacute;a</a></li> 
                    <li><a href="mision-vision.php">Misi&oacute;n y visi&oacute;n</a></li> 
                    <li><a href="valores.php">Valores</a></li> 
                </ul> 
            </li> 
            <li class="dash"> 
                <a href="servicios.php">Servicios</a> 
                <ul class="submenu"> 
                    <li><a href="atencion-cliente.php">Atenci&oacute;n a clientes</a></li> 
                    <li><a href="back-office.php">Back Office</a></li> 
                    <li><a href="gestion-de-cobranza.php">Gesti&oacute;n de Cobranza</a></li> 
                    <li><a href="ventas-por-telefono.php">Ventas por tel&eacute;fono</a></li> 
                </ul> 
            </li> 
            <li class="dash"><a href="nuestra-tecnologia.php">Nuestra Tecnolog&iacute;a</a></li> 
            <li class="dash"><a href="presencia.php">Presencia</a></li> 
            <li class="dash"><a href="responsabilidad-social.php">Responsabilidad Social</a></li> 
            <li class="dash"><a href="contacto.php">Contacto</a></li> 
        </ul> 
    </div> 
</div> 
<!--termina menu-->
<div class="clr"></div>
</div>
</div>
<!--termina header-->