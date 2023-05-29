<?	
    $email_principal 	= 'rosamedrano90@outlook.es';
	$email_secundarios 	= 'bmw_7373@hotmail.com';
	$eol="\r\n";
	
	$cuerpo = "Mensaje desde la web www.miabortoseguro.com". "<br /><br />";
	$cuerpo .= "Nombre: " . $_POST["nombre"] . "<br />"; 
	$cuerpo .= "Correo: " . $_POST["correo"] . "<br />";  
	$cuerpo .= "WhatsApp: " . $_POST["telf"] . "<br />";  
	$cuerpo .= "Distrito: " . $_POST["distrito"] . "<br />";
	$cuerpo .= "Edad: " . $_POST["edad"] . "<br />";	
	$cuerpo .= "Consulta: " . $_POST["mensaje"] . "<br />";
		
	$headers .= 'From: '.utf8_decode($_POST['nombre']).'<'.utf8_decode($_POST['Email']).'>'.$eol;
	$headers .= "CC: ".$email_secundarios.$eol;
	$headers .= "Reply-To: ".$mail."".$eol;
	$headers .= "Return-Path: ".$mail."".$eol;
	$headers .= "Message-ID: <".time()."-".$para.">".$eol;
	$headers .= "X-Mailer: PHP v".phpversion().$eol;
	$headers .= "MIME-Version: 1.0".$eol;
	$headers .= "Content-type: text/html; charset=iso-UTF-8;".$eol.$eol;
		
    mail($email_principal,"Mensaje recibido desde la pagina web www.miabortoseguro.com",$cuerpo,$headers);
	echo '<meta http-equiv="refresh" content="4;URL=http://www.miabortoseguro.com" />';
?>

<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" itemprop="description" content="Esta pagina Brinda Información sobre que es Cytotec misopostrol de 200mg, para que sirve, cómo funciona, qué efectos tiene, se brinda las indicaciones a seguir para tener un aborto seguro y eficaz. Asesoría y venta en Lima y otras ciudades de Perú" />
<meta name="keywords" itemprop="keywords" content="cytotec, cytotec lima, cytotec perú, vendo cytotec en lima, que es cytotec para que sirve, citotec, donde compro cytotec en lima, sitotec, misoprostol, misoprostol en lima, donde compro misoprostol peru, quiero misopostrol cytotec, cytotec misoprostol peru, misopostrol en cytotec lima peru, cytotec compra, cytotec precio, quiero comprar cytotec, cytotec en farmacias" />
	<meta name="robots" content="index" />
    <meta http-equiv="Content-Language" content="es"/>
	<meta name="Distribution" content="global"/>
	<meta name="country" content="pe" />

<!-- Page Title -->
<title>Contacto - Venta de Cytotec en Lima</title>

<!-- Favicon and Touch Icons -->
<link href="favicon.ico" rel="shortcut icon" type="image/png">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
    
</body>
</html>