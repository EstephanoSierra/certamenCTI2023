<?php 

    include("conexion.php");

    $id = 1;
   
    $query = mysqli_query($conn, "SELECT id_finalistas FROM reporte_final WHERE id_finalistas = $id");
    $rep = mysqli_num_rows($query);
    
    $quer = mysqli_query($conn, "SELECT id_finalistas FROM finalistas WHERE id_finalistas = $id");
    $fina = mysqli_num_rows($query);

if($fina == 1){

}else{

    $finalistas = "INSERT INTO finalistas 
    (id_candidatas,nombre,carrera,descripcion,edad)
    
    SELECT reporte.id_candidatas,nombre,Carrera,descripcion,edad from candidatas 
    INNER JOIN reporte ON candidatas.id_candidatas = reporte.id_candidatas
    ORDER BY promedio_F DESC LIMIT 6";



mysqli_query($conn,$finalistas);

}

if($rep == 1){

    echo "<script>
    alert('Listo');
    </script>";  
}else{

    echo "<script>
alert('Se Ingresaron las finalistas')
</script>";  

    $reporte ="INSERT INTO reporte_final 
    (id_finalistas)
    
    SELECT id_finalistas  from finalistas LIMIT 6";
    
    $meter_cero="
    UPDATE `reporte_final` SET `promedio_f`=0,`subtotal`=0,`total`=0 WHERE 1";

mysqli_query($conn,$reporte);

mysqli_query($conn,$meter_cero);

}


echo "<script>
window.location = '../formulario/portada_pregunta_finalR.html';
</script>";  


?>