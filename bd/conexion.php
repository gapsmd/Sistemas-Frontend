<?php

   function conexion(){
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbData = "sistemas";

        $cn = new mysqli($dbHost, $dbUser, $dbPass, $dbData);

        #verificar que funcione
        if($cn->connect_error){
            die("Hubo un error en la conexión");
        }else{
          
        }
        return $cn;
   }

   conexion();


?>