<?php 

include("con_mysql.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['adress']) && strlen($_POST['num_telf']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $email = trim($_POST['adress']);
		$num_telf = trim($_POST['num_telf']);
        $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO suscribete(nombre, adress, num_telf, fecha_reg) VALUES ('$name','$email','$num_telf','$fechareg')";
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