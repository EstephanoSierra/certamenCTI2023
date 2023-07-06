<!DOCTYPE html>
<html>
    <head>

        <link rel="icon" href="../img/colegio.ico.ico">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/css/bootstrap.min.css">
                <title>Borrar</title>
    </head>
    <body>
    <div id="encabezado" class=" d-grid gap-2    bg-primary p-2 text-white bg-opacity-75">
            <br>
                       
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                            <h1>Borrar</h1>
                        
                    </div>
            
                    <br>
            <br>    
            </div >
            <div class="position-absolute top-0 start-0"><img src="../img/logo_colegio2.png" width="80" height="80" alt=""></div>
                            <nav>
        <ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link "  href="administrador.html">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Agregar.php">Agregar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="borrar.php">Borrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="modificar_candidatas.php">Modificar</a>
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Imprimir.html">Imprimir</a>
  </li>
</ul> 
    </nav>

        <form acction="../php/ResetBase.php" method="POST">
        <div class="container my-5">
            <div class="row">
                <div class="transparente">
                    <label>ID_Candidata:</label><br>
                    <input type="number" name="rango4"  >
                    <div class="d-grid gap-1 col-3 mx-auto">
            <button type="submit" id="verificar" name="verificar" class="btn btn-info" ><b>ENVIAR</b></button>
                </div>
                </div>
                <br>

                    </form>
                     

                    
                
                <div class="col-lg-8  bg-opacity-75 ">
                    <table class="table table-striped ">
                        <tr>
                            <thead>
                                <th class="centrado">#</th>
                                <th class="centrado">nombre</th>
                                <th class="centrado">carrera</th>
                            </thead>
                        </tr>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        
    </body>
</html>