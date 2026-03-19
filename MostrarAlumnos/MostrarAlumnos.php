<?php
    function conectar(){
        $conexion=new mysqli("localhost", "root", "", "alumnos")
    }

    funtion mostrarAlumnos(){
        $sql="SELECT nombre FROM alumnos";
        $resultado=$conexion->query($sql);

        $fila1=$resultado->fetch_array();
            echo '<p>';
            echo 'Nombre alumno: '.$fila1['nombre'];
            echo '</p>';

        $fila2=$resultado->fetch_array();
            echo '<p>';
            echo 'Nombre alumno: '.$fila2['nombre'];
            echo '</p>';

        $fila3=$resultado->fetch_array();
            echo '<p>';
            echo 'Nombre alumno: '.$fila3['nombre'];
            echo '</p>';
    }
?>