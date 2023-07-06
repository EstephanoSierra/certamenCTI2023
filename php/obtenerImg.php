<?php

    include("conexion.php");

    $id = $_POST['id'];


    $consulta = "SELECT id_candidatas FROM finalistas WHERE id_finalistas = $id";

    $x = mysqli_query($conn,$consulta);
    
    $x2 = mysqli_fetch_array($x);

    echo "../img/candidatas/".$x2['id_candidatas'].".jpg";


?>