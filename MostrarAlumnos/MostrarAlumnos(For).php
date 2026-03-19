<?php
    function conectar(){
        $conexion=new mysqli("localhost", "root", "", "alumnos")
    }

    funtion mostrarAlumnos(){
        $sql="SELECT nombre FROM alumnos";
        $resultado=$conexion->query($sql);

        for($i=0;$<3;$i++){
            $fila=$resultado->fetch_array();
            echo '<p>';
            echo 'Nombre alumno: '.$fila['nombre'];
            echo '</p>';
        }
    }
?>