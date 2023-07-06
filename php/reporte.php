<?php 

    include("conexion.php");

    $id = 1;
   
    $query = mysqli_query($conn, "SELECT id_candidatas FROM reporte WHERE id_candidatas = $id");
    $nr = mysqli_num_rows($query);


if ($nr == 1){


    echo "<script>
    window.location = '../formulario/portada_trajefantasia.html';

    </script>";   
    
}else{
    
    for($i = 1;$i<13;$i++){
        
    $reporte =  "INSERT INTO reporte 
    (id_candidatas,`promedio_C1`, `promedio_C2`, `promedio_C3`, `promedio_C4`, `promedio_C5`, `promedio_F`) 
    values ($i,0,0,0,0,0,0)
    ";
mysqli_query($conn,$reporte);
}
    

echo "<script>
    window.location = '../formulario/portada_trajefantasia.html';

    </script>";   

}

?>