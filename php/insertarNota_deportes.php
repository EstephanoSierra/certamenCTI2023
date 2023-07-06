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

    

    $query = mysqli_query($conn, "SELECT * FROM deportes WHERE id_deportes = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){




$update = ("UPDATE deportes SET 
proyeccion_escenica ='$punteo1' + (SELECT SUM(proyeccion_escenica) FROM deportes where id_deportes = $id),
presentacion_traje ='$punteo2'+(SELECT SUM(presentacion_traje) FROM deportes where id_deportes = $id),
expresion_facial ='$punteo3'+(SELECT SUM(expresion_facial) FROM deportes where id_deportes = $id ),
modelaje='$punteo4'+ (SELECT SUM(modelaje) FROM deportes where id_deportes = $id),
expresion_oral='$punteo5'+ (SELECT SUM(expresion_oral) FROM deportes where id_deportes = $id),
promedio='$promedio' + (SELECT SUM(promedio) FROM deportes where id_deportes = $id)
WHERE id_deportes = $id");

mysqli_query($conn,$update);


}else{

$ingreso =  ("INSERT INTO deportes(id_candidatas,proyeccion_escenica, presentacion_traje, 
expresion_facial, modelaje, expresion_oral, promedio)
VALUES('$id','$punteo1','$punteo2','$punteo3','$punteo4','$punteo5','$promedio')");
mysqli_query($conn,$ingreso);

}

$promedio = ("UPDATE reporte SET
promedio_C2 ='$promedio'+(SELECT SUM(promedio_C2) FROM reporte where id_candidatas = $id)
WHERE id_candidatas = $id");

mysqli_query($conn,$promedio);
?>

