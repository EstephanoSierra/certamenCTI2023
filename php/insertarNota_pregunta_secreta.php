<?php
    include("conexion.php");

    $id = $_POST['id']-1;
    $punteo1 = $_POST['rango1'];
    $punteo2 = $_POST['rango2'];


    $promedio = $punteo1+$punteo2;
    $promedio = $promedio / 2;

    

    $query = mysqli_query($conn, "SELECT * FROM pregunta_secreta WHERE id_pregunta_secreta  = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){




$update = ("UPDATE pregunta_secreta SET 
espontaneidad ='$punteo1' + (SELECT SUM(espontaneidad) FROM pregunta_secreta where id_pregunta_secreta  = $id),
calidad_respuesta ='$punteo2'+(SELECT SUM(calidad_respuesta) FROM pregunta_secreta where id_pregunta_secreta  = $id),
promedio='$promedio' + (SELECT SUM(promedio) FROM pregunta_secreta where id_pregunta_secreta  = $id)
WHERE id_pregunta_secreta  = $id");

mysqli_query($conn,$update);


}else{

$ingreso =  ("INSERT INTO pregunta_secreta(id_candidatas,espontaneidad, calidad_respuesta,promedio)
VALUES('$id','$punteo1','$punteo2','$promedio')");
mysqli_query($conn,$ingreso);

}

$promedio = ("UPDATE reporte SET
promedio_C5 ='$promedio'+(SELECT SUM(promedio_C5) FROM reporte where id_candidatas = $id)
WHERE id_candidatas = $id");

$final = ("UPDATE reporte SET 
promedio_F = (SELECT (promedio_C1+promedio_C2+promedio_C3+promedio_C4+promedio_C5) /5 
FROM reporte WHERE id_candidatas = $id) 
WHERE id_candidatas = $id");


mysqli_query($conn,$promedio);
mysqli_query($conn,$final);





?>