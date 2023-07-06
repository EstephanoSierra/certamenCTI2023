<?php

		include("conexion.php");


 		$id = $_POST['id'];
 		$nombre = $_POST['nombre'];
 		$carrera = $_POST['carrera'];
 		$descripcion = $_POST['descripcion'];
		$imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']););




    $query = mysqli_query($conn, "SELECT id_candidatas FROM candidatas WHERE id_candidatas = $id");
    $nr = mysqli_num_rows($query);


		if($nr == 1){

			echo "<script>
					alert('NO SE MODIFICO');
					 window.location = '../formulario/Agregar.php';
					</script>";


		}else{
		
			$consulta = "INSERT INTO candidatas (id_candidatas, nombre, carrera, descripcion) VALUES ('$id','$nombre','$carrera','$descripcion')";
			mysqli_query($conn,$consulta);	

			$consulta_IMG = "INSERT INTO id_candidatas,img FROM imagenes VALUES
							('$id','$imagen')";
							mysqli_query($conn,$consulta_IMG);
			echo "<script>
					alert('SE MODIFICO');
					 window.location = '../formulario/Agregar.php';
					</script>";


					
			}


 		?>





   