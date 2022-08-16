<?	
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];

$msg ="Nombre:	$a1\n"
    . "E-mail:$a2\n" 
	. "Empresa:$a3\n"
	. "Asunto:	$a4\n"
	. "Mensaje:$a5\n"
			
		;
			
	mail("contacto@servilimp.cl", "Formulario Contacto servilimp.cl", $msg, "From: \"Formulario Contacto servilimp.cl\" <contacto@servilimp.cl>\nX-Mailer: PHP/" . phpversion());
	
	header("Location: http://svl.cl/contacto.php");
	exit;	
	
?>