<?php

require 'config.php';

class Distancia {
    public function ConsultarComunidad() {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT DISTINCT Comunidad FROM datos_locales');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function ConsultarCiudad($comunidad) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT DISTINCT Provincia FROM datos_locales WHERE Comunidad = :comunidad');
        $stmt->bindValue(':comunidad', $comunidad, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function ConsultarLocal($provincia) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT * FROM datos_locales WHERE Provincia = :provincia');
        $stmt->bindValue(':provincia', $provincia, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function ConsultarDatos($municipio) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT * FROM datos_locales WHERE Municipio = :municipio');
        $stmt->bindValue(':municipio', $municipio, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

   
}