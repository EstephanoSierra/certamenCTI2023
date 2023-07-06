<?php
    include("conexion.php");

$id = $_POST['id'];


$query = mysqli_query($conn, "SELECT * FROM finalistas WHERE id_finalistas = $id");
$nr = mysqli_num_rows($query);
if($nr == 1){

    $nombre = ("SELECT * from finalistas where id_finalistas = $id");
     
    $x = mysqli_query($conn,$nombre);
    
    $x2 = mysqli_fetch_array($x);

    echo "Carrera:".$x2['carrera']."\nDes:".$x2['descripcion'];

}


?>