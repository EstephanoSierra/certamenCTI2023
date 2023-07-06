<?php

		include("conexion.php");


 		$id = $_POST['id'];
 		$nombre = $_POST['nombre'];
 		$carrera = $_POST['carrera'];
 		$descripcion = $_POST['descripcion'];
		$imagen = $_FILES['imgF']['tmp_name'];




        $query = mysqli_query($conn, "SELECT id_candidatas FROM candidatas WHERE id_candidatas = $id");
        $nr = mysqli_num_rows($query);


		if($nr == 1){


			$consulta = "UPDATE candidatas SET nombre = '$nombre', Carrera='$carrera', descripcion='$descripcion' WHERE id_candidatas = $id";
			
			mysqli_query($conn,$consulta);

			
			$consulta_IMG = "INSERT INTO imagenes(id_candidatas,img) VALUES ('$id','$imagen')";

			mysqli_query($conn,$consulta_IMG);

					echo "<script>s
					alert('SE MODIFICO');
					 window.location = '../formulario/modificar_candidatas.html';
					</script>";

		}else{

			echo "<script>
					alert('NO SE MODIFICO');
					 window.location = '../formulario/modificar_candidatas.html';
					</script>";
		
			
			}


 		?>




