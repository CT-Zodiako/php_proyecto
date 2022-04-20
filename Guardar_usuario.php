<?php 
include('conexion.php');
if(isset($_POST['Guardar_usuario']))
{
    $user_code = $_POST['user_code'];
    $user_cedula = $_POST['user_cedula'];
    $user_name = $_POST['user_name'];
    $user_celular = $_POST['user_celular'];

    $consulta = "INSERT INTO usuarios(codigo,cedula,nombre,elular) values('$user_code','$user_cedula','$user_name','$user_celular')";
    $result = mysqli_query($conn, $consulta);

    if(!$result)
    {


        die("ERROR EN EL QUERY");

    }
    else {
        header('Location: GestionUsuarios.php ');
    }
}


echo  $user_code."<br>";
echo  $user_cedula."<br>";
echo  $user_name."<br>";
echo  $user_celular."<br>";


?>