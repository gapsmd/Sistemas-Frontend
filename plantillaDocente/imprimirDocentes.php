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
        $cont = "1";
        $datos = "";
        if($ResultSet->num_rows > 0){
            while($Row = $ResultSet->fetch_assoc()){
                $IdMaestro = $Row['id_maestro'];
                $NombreMaestro = $Row['nombre_maestro'];
                if($cont == "1"){
                    $datos .= "<div class='flex flex-row justify-center'>";
                }
                $datos .="<div class='flex flex-col bg-zinc-300 m-4 rounded-xl' style='width: 350px;'>
                            <div class='flex flex-row justify-center'>
                                <img src='img/itver-logo.png' alt='' style='width: 10rem; height: 10rem;'>
                            </div>
                            <div class='flex flex-row justify-center font-semibold'>
                                <h3 class='mx-4'>" .$Row['nombre_maestro']. "</h3>
                            </div>
                            <div class='flex flex-row justify-center'>
                                <a href='perfilMaestro.php?Valor=".$IdMaestro."' 
                                class='bg-[#50d71e] mb-3 mt-3 p-2 rounded font-semibold'>Ver mas</a>    
                            </div>
                        </div>";
                $cont = $cont + "1";
                if($cont == "4"){
                    $datos .= "</div>";
                    $cont = "1";
                }
            }
        }
        return $datos;
    }
?>