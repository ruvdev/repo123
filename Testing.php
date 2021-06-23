<?php


// Iniciar sesión

//$Cliente = new SoapClient('http://localhost:8080/ProyectoSOAP/WSusuario?WSDL');
//    
//    $IniciaSesionP = $Cliente->login([
//        
//            "user" => 'c@gmail.com',
//            "pass" => '12345'
//        
//       ])->return;
//
//    if ($IniciaSesionP) {
//        echo 'Se inició sesión correctamente';
//    } else {
//        echo 'ERROR: No se inició Sesión';
//    }
//    
    
?>


<?php


// Insertar usuarios

//$Cliente = new SoapClient('http://localhost:8080/ProyectoSOAP/WSusuario?WSDL');
//    
//    $InsertarU = $Cliente->Insert([
//        
//            "nombre" => 'Carla',
//            "apellido" => 'Paredes',
//            "correo" => 'c@gmail.com',
//            "password" => '12345'
//        
//        
//       ])->return;
//
//    if ($InsertarU) {
//        echo 'Se INSERTÓ UN REGISTRO';
//    } else {
//        echo 'ERROR: No se INSERTÓ NINGUN REGISTRO';
//    }
    
    
?>

  
  
  


<?php


// Mostrar Registros

$Cliente = new SoapClient('http://localhost:8080/ProyectoSOAP/WSusuario?WSDL');
    
    $MostrarRegistros = $Cliente->MostrarTodo([
        
       ])->return;

    if ($MostrarRegistros) {
        echo 'Se inició sesión correctamente';
    } else {
        echo 'ERROR: No se inició Sesión';
    }
    
    
?>
