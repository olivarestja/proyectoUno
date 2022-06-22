<?php 

include("con_db.php");

if (isset($_POST['registrer'])) {
    if (strlen($_POST['ci']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['ap'])>=1 && strlen($_POST['cel'])>=1) {
	    $ci = trim($_POST['ci']);
	    $nombre = trim($_POST['nombre']);
        $ap= trim($_POST['ap']);
        $am= trim($_POST['am']);
        $cel= trim($_POST['cel']);
	   
	    $consulta = "INSERT INTO personal(idpersonal,ci,nombre,ap,am,cel) VALUES (2,'$ci','$nombre','$ap','$am','$cel')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
