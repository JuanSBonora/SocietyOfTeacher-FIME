<?php
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "FROM: Edgar <cardenas.eeo@gmail.com>\r\n";

try {
    mail("lennon1599@gmail.com","Asunto","Contenido", $headers);
    echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
} catch (\Throwable $th) {
    throw $th;
    echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
}
?>