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

    

    $query = mysqli_query($conn, "SELECT * FROM traje_noche WHERE id_traje_noche  = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){




$update = ("UPDATE traje_noche SET 
proyeccion_escenica	 ='$punteo1' + (SELECT SUM(proyeccion_escenica	) FROM traje_noche where id_traje_noche = $id),
elegancia ='$punteo2'+(SELECT SUM(elegancia) FROM traje_noche where id_traje_noche = $id),
expresion_facial ='$punteo3'+(SELECT SUM(expresion_facial) FROM traje_noche where id_traje_noche = $id ),
modelaje='$punteo4'+ (SELECT SUM(modelaje) FROM traje_noche where id_traje_noche = $id),
mensaje='$punteo5'+ (SELECT SUM(mensaje) FROM traje_noche where id_traje_noche = $id),
promedio='$promedio' + (SELECT SUM(promedio) FROM traje_noche where id_traje_noche = $id)
WHERE id_traje_noche = $id");

mysqli_query($conn,$update);


}else{

$ingreso =  ("INSERT INTO traje_noche(id_candidatas,proyeccion_escenica, elegancia, 
expresion_facial, modelaje, mensaje, promedio)
VALUES('$id','$punteo1','$punteo2','$punteo3','$punteo4','$punteo5','$promedio')");
mysqli_query($conn,$ingreso);

}

$promedio = ("UPDATE reporte SET
promedio_C4 ='$promedio'+(SELECT SUM(promedio_C4) FROM reporte where id_candidatas = $id)
WHERE id_candidatas = $id");

$final = ("UPDATE reporte SET 
promedio_F = (SELECT (promedio_C1+promedio_C2+promedio_C3+promedio_C4) /4
FROM reporte WHERE id_candidatas = $id) 
WHERE id_candidatas = $id");


mysqli_query($conn,$promedio);
mysqli_query($conn,$final);

?>