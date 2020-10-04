<?php
    $dominio = "localhost";
    $username= "root";
    $password = "";
    $bd= "clientes_ecocarton";
$conexion = new mysqli($dominio, $username, $password, $bd);
if($conexion-> connect_error){
    die("conexion fallida:". $conexion-> connect_error);
}
if (isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono =$_POST['telefono'];
    $logos = $_POST['logos'];
    $unidad = $_POST['unidad'];
    $modelo = $_POST['modelo'];

    $sql = "INSERT INTO invitados(nombre, email, telefono, alto, ancho, logos, unidad, modelo)
    VALUES('$nombre','$email','$telefono','$logos','$unidad','$modelo')";
    if($conexion->query($sql) ===true){
    }else{
        die("error al insertar datos:" .$conexion->error);
    }
}
if($sql){

    echo "<script> alert('correcto');

     location.href = '../index.html';
    </script>";
 
 }else{
     echo "<script> alert('incorrecto');
     location.href = '../index.html';
     </script>";
 }
// echo "conexion exitosa..."

// $sql = "CREATE DATABASE" todolistDB";
// if(conexion->query($sql) === true){
//     echo "base de datos creada..";
// } else {
//     die("error al crar la bd:" . $conexion->error);
// }
// $sql = "CREATE TABLE todoTable(
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     texto VARCHAR(100) NOT NULL,
//     completado BOOLEAN NOT NULL,
//     timestamp TIMESTAMP
// )";
// if ($conexion->query($sql) === true){
//     echo "tabla creada exitosamente";
// } else {
//     die("error al crear la tabla:" .$conexion->error);
// }
?>