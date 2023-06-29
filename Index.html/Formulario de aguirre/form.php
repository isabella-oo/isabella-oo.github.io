<?php 
$Usuario=$_POST['Usuario'];
$Nombre=$_POST['Nombre'];
$Contraseña=$_POST['Contraseña'];

if (isset ($_POST['Usuario']) && !empty($_POST['Usuario']) &&
isset ($_POST['Nombre']) && !empty($_POST['Nombre']) &&
isset ($_POST['Contraseña']) && !empty($_POST['Contraseña']) )
{
    $EnlaceBD= mysql_conect(localhost,root,Aguirre123) or die("No se conectó a la base de datos");
    mysql_select_db(usuarios,$EnlaceBD) or die("No se pudo conectar a la base de datos");

    mysql_query("INSERT INTO usuarios registrados VALUES('$Usuario','$Nombre','$Contraseña'");
    echo"Datos enviados correctamente";
    else{
        echo"No se enviaron los datos";
    }
}




?>
