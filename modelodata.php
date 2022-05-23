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
            $id_materia = $row['id_materia'];
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];
            $area_materia = $row['area_materia'];
            $url_materia = $row['url_materia'];
            $url_programa = $row['url_programa'];
            $ruta_img = '';

            switch($area_materia){
                case 'Programación':
                    $ruta_img = 'img/topicos/programacion-icono.png';
                    break;
                case 'Asignaturas comunes':
                    $ruta_img = 'img/topicos/ing-software-icono.png';
                    break;
                default:
                    $ruta_img = 'img/topicos/programacion-web-icono.png';
                    break;
            }

// Cuadro de materia
            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
                $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-700'>$nombre_materia</h1>";
                $tabla .= "<div class='flex items-center '>";
                    $tabla .= "<img class='h-16 ml-2' src='$ruta_img' alt=''>";
                    $tabla .= "<p class='text-sm text-justify mx-4 my-2 hidden md:block'>$descrip_materia</p>";
                $tabla .= "</div>";
                $tabla .= "<div class='flex justify-center items-center'>";
                     $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'
                                data-bs-toggle='modal' data-bs-target='#modalReticula" .$id_materia ."'aria-label='Close'>Ver más</a>";
                $tabla .= "</div>";
            $tabla .= "</div>";
// Modal de "Ver más"
            $tabla .= "<div class='modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto'
                        id='modalReticula" .$id_materia ."' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modal' aria-hidden='true'>";
                $tabla .= "<div class='modal-dialog modal-xl relative w-auto'>";
                    $tabla .= "<div class='modal-content shadow-lg relative flex flex-col w-full pointer-events-auto bg-zinc-300 bg-clip-padding rounded-md'>";
                        $tabla .= "<div class='modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md'>";
                            // titulo del modal
                            $tabla .= "<h5 class='text-2xl font-semibold text-yellow-500'>$nombre_materia</h5>";
                            //ícono para cerrar modal
                            $tabla .= "<svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' class='cursor-pointer w-8 h-8 p-1' 
                                        preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512' data-bs-dismiss='modal' aria-label='Close'>
                                        <path fill='currentColor' d='m289.94 256l95-95A24 24 0 0 0 351 127l-95 95l-95-95a24 24 0 0 0-34 
                                        34l95 95l-95 95a24 24 0 1 0 34 34l95-95l95 95a24 24 0 0 0 34-34Z'/>
                                        </svg>";
                        $tabla .= "</div>";
                        //contenido del modal
                        $tabla .= "<div class='modal-body relative grid lg:grid-cols-2 p-4'>";
                                $tabla .= "<div class='flex flex-col justify-center items-center'>";
                                    //vídeo a reproducir
                                    //$tabla .= "<iframe class='aspect-video w-4/5 md:w-full' src='$url_materia'
                                    //frameborder='0'></iframe>";
                                    $tabla .= "<iframe class='aspect-video w-4/5 md:w-full' src='https://www.youtube.com/embed/hw7dMbJWuhc'
                                    frameborder='0'></iframe>";
                                    $tabla .= "<a class='my-4 p-3 w-auto font-semibold rounded-md bg-blue-600 text-white hover:bg-indigo-900'
                                    >Ver programa de la materia</a>";
                                $tabla .= "</div>";
                                $tabla .= "<div class='flex flex-col justify-center items-center'>";
                                    //descripción del modal
                                    $tabla .= "<p class='text-justify md:text-xl m-5'>$descrip_materia</p>";
                                $tabla .= "</div>";
                        $tabla .= "</div>";
                    $tabla .= "</div>";
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