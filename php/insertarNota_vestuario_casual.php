<?php
    include("conexion.php");

    $id = $_POST['id']-1;
    $punteo1 = $_POST['rango1'];
    $punteo2 = $_POST['rango2'];
    $punteo3 = $_POST['rango3'];
    $punteo4 = $_POST['rango4'];

    $promedio = $punteo1+$punteo2+$punteo3+$punteo4;
    $promedio = $promedio / 5;

    

    $query = mysqli_query($conn, "SELECT * FROM vestuario_casual WHERE id_vestuario_casual = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){




$update = ("UPDATE vestuario_casual SET 
proyeccion_escenica ='$punteo1' + (SELECT SUM(proyeccion_escenica) FROM vestuario_casual where id_vestuario_casual = $id),
aceptacion_publico ='$punteo2'+(SELECT SUM(aceptacion_publico) FROM vestuario_casual where id_vestuario_casual = $id),
expresion_facial ='$punteo3'+(SELECT SUM(expresion_facial) FROM vestuario_casual where id_vestuario_casual = $id ),
modelaje='$punteo4'+ (SELECT SUM(modelaje) FROM vestuario_casual where id_vestuario_casual = $id),
promedio='$promedio' + (SELECT SUM(promedio) FROM vestuario_casual where id_vestuario_casual = $id)
WHERE id_vestuario_casual = $id");

mysqli_query($conn,$update);


}else{

$ingreso =  ("INSERT INTO vestuario_casual(id_candidatas,proyeccion_escenica, aceptacion_publico, 
expresion_facial, modelaje, promedio)
VALUES('$id','$punteo1','$punteo2','$punteo3','$punteo4','$promedio')");
mysqli_query($conn,$ingreso);

}

$promedio = ("UPDATE reporte SET
promedio_C3 ='$promedio'+(SELECT SUM(promedio_C3) FROM reporte where id_candidatas = $id)
WHERE id_candidatas = $id");

mysqli_query($conn,$promedio);
?>