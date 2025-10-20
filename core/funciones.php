<?php

/*
Función para crear la conexión con base de datos
Si hay un error en la conexión nos informa 
*/

function crearConexion() {
	
	include("config.bbdd.php");
    
    $conexion = new mysqli($servidor, $usuario, $password, $bbdd);

    if ($conexion->connect_error) {
        die("❌ Error de conexión: " . $conexion->connect_error);
    }

    
    $conexion->set_charset("utf8mb4");

    return $conexion;
}

/*
Función para contar el número de Pokemon que hay en la Pokedex
*/


function contarPokemon() {
	
	$conexion = crearConexion();
	
    $resultado = $conexion->query("SELECT * FROM mispokemon");

    if ($resultado) {
        return $resultado->num_rows; // Devuelve el número de filas
    } else {
        return 0; // Si falla la consulta, devuelve 0
    }
	$resultado->close();
}

/*
	Función para mostrar todos los pokemon que hay en la pokédex
*/

function mostrarPokemon() {
	$conexion = crearConexion();
    $sql = "SELECT * FROM mispokemon";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        while ($pokemon = $resultado->fetch_assoc()) {
            echo "<tr>";
                echo "<td><b>" . htmlspecialchars($pokemon['nombre']) . "</b></td>";
                echo "<td>" . htmlspecialchars($pokemon['categoria']) . "</td>";
                echo "<td>" . htmlspecialchars($pokemon['tipo']) . "</td>";
                echo "<td>" . htmlspecialchars($pokemon['peso']) . "</td>";
                echo "<td>" . htmlspecialchars($pokemon['altura']) . "</td>";
                echo "<td><img height='80' width='80' src='data:image/jpeg;base64," 
                     . base64_encode($pokemon['foto']) . "'/></td>";
            echo "</tr>";
        }
        $resultado->close();
    } else {
        echo "<tr><td colspan='6'>⚠️ No hay Pokémon en la Pokédex.</td></tr>";
    }
}





?>