<?php

include ("conexion.php");


$user = $_REQUEST['usuario'];
$cont = $_REQUEST['contrasena'];

$query = mysqli_query($conn,"SELECT * FROM roles WHERE usuarios = '$user' AND contraseña = '$cont' AND rol = 'jurado'");
$nr = mysqli_num_rows($query);


$qoro = mysqli_query ($conn,"SELECT * FROM roles WHERE usuarios = '$user' AND contraseña = '$cont' AND rol = 'administrador' ");
$nere = mysqli_num_rows($qoro);

$queryT = mysqli_query ($conn,"SELECT * FROM roles WHERE usuarios = '$user' AND contraseña = '$cont' AND rol = 'juradoT' ");
$nrT = mysqli_num_rows($queryT);



if($nere == 1){
 
    echo "  
    <script>

    alert ('Bienvenido admin');
    window.location = '../formulario/administrador.html';
    </script>
";
}
else if($nr == 1){
  
    echo "  
    <script>

    alert ('Bienvenido usuario');
    window.location = '../formulario/empezar.html';
    </script>
";
}
else if($nrT == 1){
    echo "  
    <script>

    alert ('Bienvenido usuario');
    window.location = '../formulario/Menu.html';
    </script>
    ";

}

else if($nr == 0){
    echo "  
    <script>

    alert ('Usuario o contraseña incorrectos');
    window.location = '../Formulario/index.html';
    </script>
";
}


?>
