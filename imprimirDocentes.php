<?php
    require_once "bd/conexion.php";

    function obtenerInformacion(){
        $cn = conexion();
        $sqlSelect = "SELECT * FROM maestro";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }
    function imprimirDatos(){
        $ResultSet = obtenerInformacion();
        $tabla = "";
        if($ResultSet->num_rows > 0){
            $tabla .= "<div class='grid grid-cols-2 gap-8 mx-8 md:mx-16 my-4 md:grid-cols-3'>";
            while($row = $ResultSet->fetch_assoc()){
                $id_maestro = $row['id_maestro'];
                $nombre_maestro = $row['nombre_maestro'];
                $palabras_maestro = $row['palabras_maestro'];
                $informacion_maestro = $row['informacion_maestro'];
                $materias_maestro = $row['materias_maestro'];
                $contacto_maestro = $row['contacto_maestro'];
                $url_imagen = $row['url_imagen'];
        //Docentes
                $tabla .= "<div class='grid grid-cols-1 justify-items-center rounded-md shadow-lg bg-zinc-300'>";
                    $tabla .= "<div class='flex flex-row justify-center'>
                                    <img class= 'rounded-full p-1 azul-medio object-center mt-4' src='img/hector_trujillo.jpg' alt='' style='width: 10rem; height: 10rem;'>
                                </div>";
                    $tabla .= "<h1 class='text-black self-start rounded-md text-center w-full font-semibold py-3 text-xl'>$nombre_maestro</h1>";
                    $tabla .= "<div class='flex justify-center items-center'>";
                         $tabla .= "<a class='mt-2 mb-4 p-3 w-24 self-center font-semibold rounded-md amarillo text-black hover:bg-blue-600 hover:text-white'
                                    data-bs-toggle='modal' data-bs-target='#modalDocente" .$id_maestro ."'aria-label='Close'>Ver más</a>";
                    $tabla .= "</div>";
                $tabla .= "</div>";
        // Modal de "Ver más"
                $tabla .= "<div class='modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto'
                            id='modalDocente" .$id_maestro ."' tabindex='-1' aria-labelledby='modal' aria-hidden='true'>";
                    $tabla .= "<div class='modal-dialog relative w-auto pointer-events-none'>";
                        $tabla .= "<div class='modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-zinc-300 bg-clip-padding rounded-md outline-none text-current'>";
                            $tabla .= "<div class='modal-header flex flex-shrink-0 items-center justify-between p-1 rounded-t-md'>";
                                //ícono para cerrar modal
                                $tabla .= "<svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' class='cursor-pointer w-8 h-8 p-1' 
                                        preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512' data-bs-dismiss='modal' aria-label='Close'>
                                        <path fill='currentColor' d='m289.94 256l95-95A24 24 0 0 0 351 127l-95 95l-95-95a24 24 0 0 0-34 
                                        34l95 95l-95 95a24 24 0 1 0 34 34l95-95l95 95a24 24 0 0 0 34-34Z'/>
                                        </svg>";
                            $tabla .= "</div>";
                            //contenido
                            $tabla .= "<div class='modal-body relative grid grid-col-3'>";                              
                                    $tabla .= "<div class='flex flex-row justify-center'>
                                                <img class= 'rounded-full p-1 azul-medio object-center mt-4 w-60 md:h-80' src='img/hector_trujillo.jpg' alt=''>
                                               </div>";
                                    $tabla .= "<div class='row-span-1 col-span-1 amarillo mt-4'>
                                                    <h1 class='text-black self-start rounded-md text-2xl text-center w-full font-semibold py-3'>$nombre_maestro</h1>
                                                </div>";
                                    $tabla .= "<div class='row-span-2 col-span-1'>
                                                <p class='text-justify md:text-xl m-5'>$palabras_maestro</p>
                                               </div>";
                                    $tabla .= "<div class='row-span-2 col-span-2'>
                                                <h5 class='text-black self-start rounded-md text-center w-full font-semibold py-3'>Información Académica</h5>
                                                <p class='text-justify md:text-xl m-5'>$informacion_maestro</p>
                                               </div>";
                                    $tabla .= "<div class='row-span-2 col-span-2'>
                                                <h5 class='text-black self-start rounded-md text-center w-full font-semibold py-3'>Materias que imparte</h5>
                                                <p class='text-justify md:text-xl m-5'>$materias_maestro</p>
                                               </div>";    
                                    $tabla .= "<div class='row-span-2 col-span-2'>
                                                <h5 class='text-black self-start rounded-md text-center w-full font-semibold py-3'>Contacto</h5>
                                                <p class='text-justify md:text-xl m-5'>$contacto_maestro</p>
                                               </div>";       
                            $tabla .= "</div>";
                        $tabla .= "</div>";
                    $tabla .= "</div>";
                $tabla .= "</div>";
    
            }
            $tabla .= "</div>";
        }
        return $tabla;
    }
?>