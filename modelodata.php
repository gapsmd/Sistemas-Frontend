<?php

require_once "bd/conexion.php";

function imprimir1erSemestre(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='1'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='flex flex-col items-center bg-zinc-300'>";
            $tabla .= "<h1 class='text-white text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<a class='my-4 p-3 font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
        }
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
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='flex flex-col items-center bg-zinc-300'>";
            $tabla .= "<h1 class='text-white text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<a class='my-4 p-3 font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
        }
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
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='flex flex-col items-center bg-zinc-300'>";
            $tabla .= "<h1 class='text-white text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<a class='my-4 p-3 font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
        }
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
        while($row = $ResultSet->fetch_assoc()){
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];

            $tabla .= "<div class='flex flex-col items-center bg-zinc-300'>";
            $tabla .= "<h1 class='text-white text-center w-full font-semibold py-3 bg-blue-900'>$nombre_materia</h1>";
            $tabla .= "<p class='mx-4 my-2 hidden md:block'>$descrip_materia</p>";
            $tabla .= "<a class='my-4 p-3 font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'>Ver más</a>";
            $tabla .= "</div>";
        }
    }

    return $tabla;
    
    $cn->close();
}




?>