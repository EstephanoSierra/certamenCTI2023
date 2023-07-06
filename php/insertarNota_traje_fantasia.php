<?php
    include("conexion.php");

    $id = $_POST['id']-1;
    $punteo1 = $_POST['rango1'];
    $punteo2 = $_POST['rango2'];
    $punteo3 = $_POST['rango3'];
    $punteo4 = $_POST['rango4'];
    $punteo5 = $_POST['rango5'];

    $promedio = $punteo1+$punteo2+$punteo3+$punteo4+$punteo5;
    $promedio = $promedio / 5;

    echo $punteo1;

    $query = mysqli_query($conn, "SELECT * FROM traje_fantasia WHERE id_candidatas = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){



    $update = ("UPDATE traje_fantasia SET 
    proyeccion_escenica ='$punteo1' + (SELECT SUM(proyeccion_escenica) FROM traje_fantasia where id_candidatas = $id),
elegancia ='$punteo2'+(SELECT SUM(elegancia) FROM traje_fantasia where id_candidatas = $id),
expresion_facial ='$punteo3'+(SELECT SUM(expresion_facial) FROM traje_fantasia where id_candidatas = $id),
modelaje='$punteo4'+ (SELECT SUM(modelaje) FROM traje_fantasia where id_candidatas = $id),
expresion_oral='$punteo5'+ (SELECT SUM(expresion_oral) FROM traje_fantasia where id_candidatas = $id),
promedio='$promedio' + (SELECT SUM(promedio) FROM traje_fantasia where id_candidatas = $id)
WHERE id_candidatas = $id");




    mysqli_query($conn,$update);

}else{

$ingreso =  ("INSERT INTO traje_fantasia(id_candidatas,proyeccion_escenica, elegancia, expresion_facial, modelaje, expresion_oral, promedio)
VALUES('$id','$punteo1','$punteo2','$punteo3','$punteo4','$punteo5','$promedio')");


mysqli_query($conn,$ingreso);

}
$promedio = ("UPDATE reporte SET
promedio_C1 ='$promedio'+(SELECT SUM(promedio_C1) FROM reporte where id_candidatas = $id)
WHERE id_candidatas = $id");

mysqli_query($conn,$promedio);



?>