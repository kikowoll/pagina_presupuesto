<?php

require 'config.php';

class Cliente {
    public function Consultar() {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT * FROM clientes');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function ConsultarPorId($id_cliente) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('SELECT * FROM clientes WHERE id_cliente = :id_cliente');
        $stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
        
    }

    public function Guardar($nombre,$primer_ape,$segundo_ape,$via,$domicilio,$codigo,$localidad,$provincia,$pais) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('INSERT INTO clientes (nombre_cliente, primer_apellido, segundo_apellido, via, domicilio, codigo_postal, localidad, ciudad, pais) VALUES (:nombre,:primero,:segundo,:via,:domicilio,:codigo,:localidad,:provincia,:pais) ');

        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':primero', $primer_ape, PDO::PARAM_STR);
        $stmt->bindValue(':segundo', $segundo_ape, PDO::PARAM_STR);
        $stmt->bindValue(':via', $via, PDO::PARAM_STR);
        $stmt->bindValue(':domicilio', $domicilio, PDO::PARAM_STR);
        $stmt->bindValue(':codigo', $codigo, PDO::PARAM_STR);
        $stmt->bindValue(':localidad', $localidad, PDO::PARAM_STR);
        $stmt->bindValue(':provincia', $provincia, PDO::PARAM_STR);
        $stmt->bindValue(':pais', $pais, PDO::PARAM_STR);

        if($stmt->execute()) {
            return 'bien';
        } else {
            return 'mal';
        }
        
    }

    public function Modificar($id_cliente,$nombre,$primer_ape,$segundo_ape,$via,$domicilio,$codigo,$localidad,$provincia,$pais) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('UPDATE clientes SET nombre=:nombre, primer_apellido=:primero, segundo_apellido=:segundo, via=:via, domicilio=:domicilio, codigo_posta=:codigo, localidad=:localidad, ciudad=:provincia, pais=:pais WHERE id_cliente = :$id_cliente');

        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':primero', $primer_ape, PDO::PARAM_STR);
        $stmt->bindValue(':segundo', $segundo_ape, PDO::PARAM_STR);
        $stmt->bindValue(':via', $via, PDO::PARAM_STR);
        $stmt->bindValue(':domicilio', $domicilio, PDO::PARAM_STR);
        $stmt->bindValue(':codigo', $codigo, PDO::PARAM_STR);
        $stmt->bindValue(':localidad', $localidad, PDO::PARAM_STR);
        $stmt->bindValue(':provincia', $provincia, PDO::PARAM_STR);
        $stmt->bindValue(':pais', $pais, PDO::PARAM_STR);
        $stmt->bindValue('id_cliente', $id_cliente, PDO::PARAM_INT);

        if($stmt->execute()) {
            return 'ok';
        } else {
            return 'Error al modificar';
        }
    }

    public function Eliminar($id_cliente) {
        $conexion = new Conexion();
        $stmt = $conexion->prepare('DELETE FROM clientes WHERE id_cliente = :$id_cliente ');

        $stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);

        if($stmt->execute()) {
            return 'ok';
        } else {
            return 'Error al eliminar';
        }
    }
}