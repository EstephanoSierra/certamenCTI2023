<?php
    include("conexion.php");

$id = $_POST['id'];


$query = mysqli_query($conn, "SELECT * FROM candidatas WHERE id_candidatas = $id");
$nr = mysqli_num_rows($query);
if($nr == 1){

    $nombre = ("SELECT * from candidatas where id_candidatas = $id");
     
    $x = mysqli_query($conn,$nombre);
    
    $x2 = mysqli_fetch_array($x);

    echo "Carrera:".$x2['Carrera']."\nDes:".$x2['descripcion'];

}


?>