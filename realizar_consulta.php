<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Primary Meta Tags -->
    <title>Envio de correo</title>
	
    <meta name="description" content="Envio de correo, mi aborto seguro">
    
	<meta name="robots" content="nofollow" /> 
    <!--meta http-equiv="refresh" content="4; url=./"-->
      
</head>
<body>
<?php	
        
    if (isset($_POST['nombre'])) { 
        $nombre = htmlentities($_POST['nombre'], ENT_QUOTES);
        $correo = htmlentities($_POST['correo'], ENT_QUOTES);
        $telf   = htmlentities($_POST['telf'], ENT_QUOTES);
        $mensaje = htmlentities($_POST['mensaje'], ENT_QUOTES);	 

        $asunto = "$nombre - Correo desde miabortoseguro.com";
        $direccion = "consejo@miabortoseguro.com";  
        $texto = "
        <html>
        <head>
        <title>$asunto</title>
        <style>body {font-family: sans-serif;font-size: 20px} p {font-size: 20px; font-weight: 700;} td { padding: 10px; border-bottom: 1px solid #eee; padding: .5rem}</style>
        </head>
        <body>
        <h3>$asunto</h3>
        <table> 
            <tr>
                <td>Nombre:</td>
                <td><strong>$nombre</strong></td>
            </tr> 
            <tr>
                <td>Correo:</td>
                <td><strong>$correo</strong></td>
            </tr> 
            <tr>
                <td>Celular:</td>
                <td><strong>$telf</strong></td>
            </tr> 
            <tr>
                <td>Mensaje:</td>
                <td><strong>$mensaje</strong></td>
            </tr>  
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        $envio_realizado = mail($direccion ,$asunto, $texto, $headers);
        if (!$envio_realizado) { 
            echo '<h2>No se pudo realizar el envío, yendo a inicio...</h2>';
        } else {  
            echo '<h2>Enviado, yendo a inicio...</h2>';
        }
        
    } else { 
        echo '<h2>No se pudo realizar el envío, yendo a inicio...</h2>';
    }
?>  
    </body>
</html>