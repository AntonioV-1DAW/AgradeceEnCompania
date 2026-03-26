<?php
    include'configdb.php';
    
    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        return $conexion;
    }

    function mostrarAlumnos($conexion){
        $conexion=conectar();
        $sql="SELECT idAlumno, nombre FROM alumnos";
        $resultado=$conexion->query($sql);

        while($fila=$resultado->fetch_array()){
            echo '<option  value="'.$fila['idAlumno'].'">';
            echo $fila['idAlumno'].'-'.$fila['nombre'];
            echo '</option>';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="author" content="San Francisco Javier">
        <link rel="StyleSheet" href="./Estilos.css" type="text/css"/>
    </head>
    <body>
        <header id="Agradecer">
            <img src="./imagenes/titulo.png"/>
        </header>
        <nav>
			<a class="botones" href="./agradecer.php">Agradecer</a>
			<a class="botones" href="./MisAgradecimientos.html">Mis Agradecimientos</a>
            <a class="botones" href="./cerrar_sesion.php">Cerrar sesión</a>
        </nav>
        <section class="principal">
            <label for="nombre" placeholder="Selecciona un alumno">Para: </label>
            <select name="nombre" id="nombre">
                <?php
                    mostrarAlumnos($conexion);
                ?>
            </select>
            <label for="infoJesuita">Agradecimiento:</label><br>
            <input type="text" id="infoJesuita" name="infoJesuita" placeholder="Introduce tu mensaje" class="mensaje" required><br><br>
        </section>
        <aside>
            <img src="./imagenes/jesuita.png" class="jesuita"/>
            <p>
                <h4>San Francisco Javier:</h4>
                <div>¿De qué le sirve al hombre ganar el mundo entero, si pierde su alma?</div>
            </p>
        </aside>
    </body>
</html>