<?php

require_once "bd/conexion.php";

function icono($Area){
    $ruta_img = "";
    switch($Area){
        case 'Programacion':
            $ruta_img = 'img/iconos/programacion.png';
            break;
        case 'Asignaturas Comunes':
            $ruta_img = 'img/iconos/asignaturas-comunes.png';
            break;
        case 'Redes':
            $ruta_img = 'img/iconos/redes.png';
            break;
        case 'Bases de datos':
            $ruta_img = 'img/iconos/bases-datos.png';
            break;
        case 'Electronica':
            $ruta_img = 'img/iconos/electronica.png';
            break;
        case 'Ingenieria':
            $ruta_img = 'img/iconos/ingenieria.png';
            break;
        case 'Sistemas operativos':
            $ruta_img = 'img/iconos/sistemasop.png';
        break;
        case 'Calculo':
            $ruta_img = 'img/iconos/calculo.png';
        break;
        case 'Estadistica':
            $ruta_img = 'img/iconos/estadistica.png';
        break;
        case 'Automatas':
            $ruta_img = 'img/iconos/automatas.png';
        break;
        case 'Investigacion':
            $ruta_img = 'img/iconos/investigacion.png';
        break;
        case 'Matematicas Aplicada':
            $ruta_img = 'img/iconos/algebra.png';
        break;
        case 'Web':
            $ruta_img = 'img/iconos/programacion-web.png';
        break;
        case 'Administracion':
            $ruta_img = 'img/iconos/administracion.png';
        break;
        case 'IA':
            $ruta_img = 'img/iconos/inteligencia-artificial.png';
        break;
    }
    return $ruta_img;
}

function imprimir($NumeroSemestre){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='$NumeroSemestre'";
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
            $ruta_img = icono($area_materia);

    // Cuadro de materia
            $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
                $tabla .= "<h1 class='text-white self-start rounded-md text-center w-full font-semibold py-3 bg-blue-700'>$nombre_materia</h1>";
                $tabla .= "<div class='flex items-center '>";
                    $tabla .= "<img class='h-16 ml-2' src='$ruta_img' alt=''>";
                    $tabla .= "<p class='text-sm text-justify mx-4 my-2 hidden md:block'>$descrip_materia</p>";
                $tabla .= "</div>";
                $tabla .= "<div class='flex justify-center items-center'>";
                     $tabla .= "<a class='my-4 p-3 w-24 self-center font-semibold rounded-md amarillo text-black hover:bg-blue-600 hover:text-white'
                                data-bs-toggle='modal' data-bs-target='#modalReticula" .$id_materia ."'aria-label='Close'>Ver más</a>";
                $tabla .= "</div>";
            $tabla .= "</div>";
    // Modal de "Ver más"
            $tabla .= "<div class='modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto'
                        id='modalReticula" .$id_materia ."' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modal' aria-hidden='true'>";
                $tabla .= "<div class='modal-dialog modal-lg relative w-auto'>";
                    $tabla .= "<div class='modal-content shadow-lg relative flex flex-col w-full pointer-events-auto bg-zinc-300 bg-clip-padding rounded-md'>";
                        $tabla .= "<div class='modal-header flex flex-shrink-0 rounded-md items-center bg-blue-700 justify-between p-4 border-b border-gray-200 rounded-t-md'>";
                            // titulo del modal
                            $tabla .= "<h5 class='text-2xl font-semibold text-white'>$nombre_materia</h5>";
                            //ícono para cerrar modal
                            $tabla .= "<svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' class='cursor-pointer w-8 h-8 p-1' 
                                        preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512' data-bs-dismiss='modal' aria-label='Close'>
                                        <path fill='currentColor' d='m289.94 256l95-95A24 24 0 0 0 351 127l-95 95l-95-95a24 24 0 0 0-34 
                                        34l95 95l-95 95a24 24 0 1 0 34 34l95-95l95 95a24 24 0 0 0 34-34Z'/>
                                        </svg>";
                        $tabla .= "</div>";
                        //contenido del modal
                        $tabla .= "<div class='modal-body relative grid grid-col-1 p-4'>";
                                $tabla .= "<div class='flex flex-col justify-center items-center'>";
                                    $tabla .= "<div class='flex flex-col justify-center items-center'>";
                                        //descripción del modal
                                        $tabla .= "<p class='text-justify md:text-xl m-5'>$descrip_materia</p>";
                                    $tabla .= "</div>";
                                    //vídeo a reproducir
                                    //$tabla .= "<iframe class='aspect-video w-4/5 md:w-full' src='$url_materia'
                                    //frameborder='0'></iframe>";
                                    $tabla .= "<iframe class='aspect-video w-4/5 md:w-full' src='https://www.youtube.com/embed/hw7dMbJWuhc'
                                    frameborder='0'></iframe>";
                                    $tabla .= "<a class='my-4 p-3 w-auto font-semibold rounded-md amarillo text-black hover:bg-blue-600 hover:text-white'
                                    >Ver programa de la materia</a>";
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

function imprimir1erSemestre(){
    return imprimir("1");
}

function imprimir2doSemestre(){
    return imprimir("2");
}

function imprimir3erSemestre(){
    return imprimir("3");
}

function imprimir4toSemestre(){
    return imprimir("4");
}

function imprimir5toSemestre(){
    return imprimir("5");
}

function imprimir6toSemestre(){
    return imprimir("6");
}

function imprimir7moSemestre(){
    return imprimir("7");
}

function imprimir8voSemestre(){
    return imprimir("8");
}

function imprimir9noSemestre(){
    return imprimir("9");
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