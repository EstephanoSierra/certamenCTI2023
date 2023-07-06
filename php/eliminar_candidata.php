<?php

		include("conexion.php");


 		$id = $_POST['id'];


    $query = mysqli_query($conn, "SELECT id_candidatas FROM candidatas WHERE id_candidatas = $id");
    $nr = mysqli_num_rows($query);


		if($nr == 1){

			echo "<script>
					alert('NO SE MODIFICO');
					 window.location = '../formulario/Agregar.php';
					</script>";


		}else{


		
			$consulta = "DELETE FROM candidatas WHERE id_candidatas=$id";
			mysqli_query($conn,$consulta);	
			echo "<script>
					alert('SE MODIFICO');
					 window.location = '../formulario/Agregar.php';
					</script>";


					
			}


 		?>
