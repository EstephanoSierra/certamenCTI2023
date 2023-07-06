<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="../img/colegio.ico.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
        <title>Modificar</title>

    </head>
    <body>
        <div id="encabezado" class=" d-grid gap-2    bg-primary p-2 text-white bg-opacity-75">
            <br>
                       
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                            <h1>Modificar_admin</h1>
                        
                    </div>
            
                    <br>
            <br>    
            </div >
            <div class="position-absolute top-0 start-0"><img src="../img/logo_colegio2.png" width="80" height="80" alt=""></div>
                                    <nav>
        <ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link"  href="administrador.html">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="Agregar.php">Agregar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="borrar.php">Borrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="modificar_candidatas.php">Modificar</a>
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Imprimir.html">Imprimir</a>
  </li>
</ul> 
    </nav>

        <div class="container my-5">
            <div class="row">           
                    <form action="../php/modificar_agregar.php" method="POST" enctype="multipart/form-data">
                       
                          <br>
                        <div class="transparente">
                            <label>ID_Cambiar:</label><br>
                            <input type="text" name="id" id="id">

                        </div> <br>
                        <div class="transparente">
                            <label>Nombre:</label><br>
                            <input type="text" name="nombre"  id="nombre" >

                        
                        </div> <br>
                          <div class="transparente">
                            <label>Carrera:</label><br>
                            <input type="text" name="carrera" id="carrera" >
                        </div>

                         <br>
                          <div class="transparente">
                            <label>Descripción:</label><br>
                            <input type="text" name="descripcion"  id="descriipcion" width="200" height="200" >
                        </div> <br>

                        <div class="transparente">
                            <label>Imagen:</label><br>
                            <input type="file" name="imgF" id="imgF"  >

                        </div> <br>
                        

                        <div class=" mover">
        <div class="d-grid gap-1 col-4 mx-auto">
            <button type="submit" id="verificar" name="verificar" class="btn btn-info" ><b>Modificar</b></button>
    </div>
        
    
      </div>

                    </form>
                </div>
       <br>
      <div >
            <div >

                   <table  whidth="1200" class="table table-success table-striped">
            <tr  class="table-info">
                <td>Id</td>
                <td>Nombre</td>
                <td>Carrera</td>
            </tr>
       
            <?php
              
              include("../php/Conexion.php");

                 $consulta = ("SELECT * from candidatas");

                $resultado = mysqli_query($conn,$consulta);

                while ($fila = mysqli_fetch_array($resultado)) {
                
                echo "
                    <tr>
                    <td>".$fila['id_candidatas']."</td>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['Carrera']."</td>
                    </tr>
                ";
                }
            ?>
            
        </table><br>
                
                    </div>
                </div>
        </div>
<br>
        </div>
        <br>
        <br>
               
    </body>


</html>