<?php
if(isset($_POST['correo'])) {

// Ponemos nuestros datos
$email_to = "info@desarrollocusco.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['correo']) ||
!isset($_POST['mensaje'])) {


}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP

@mail($email_to, $email_subject, $email_message);

}
?>
<?php
header("location:index.html");
?>
