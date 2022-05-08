<?php

require_once "bd/conexion.php";

function imprimir1erSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='1'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir2doSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='2'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir3erSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='3'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir4toSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='4'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir5toSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='5'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir6toSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='6'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir7moSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='7'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir8voSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='8'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir9noSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='9'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimirEspecialidad(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where area_materia='Especialidad'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
            $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<div class='flex justify-center items-center'>";
            $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
            $tabla .= "</div>";

        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

?>