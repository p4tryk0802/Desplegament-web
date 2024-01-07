<?php

/**
 * Classe Connexio
 * 
 * Conté informació sobre les dades necessàries per contectar-se a la base de dades
 * 
 * @author Patryk
 * @version 1.0
 */

class Connexio {
    //Dades de la connexió a la base de dades la_meva_botiga.
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";

    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
