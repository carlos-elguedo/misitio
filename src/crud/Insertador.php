<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Insertador{
    
    var $conexion;
    
    public function __construct() {
        //echo "Creo el ojeto";
        //$this->conexion = new mysqli("localhost", "root", "", "misitio");
        $this->conexion = new mysqli("sql312.epizy.com", "epiz_22495724", "lpbr5D1Xgwyn", "epiz_22495724_visitas");
        
    }
    
    
    
    public function registrarVisitante($ip, $fecha_hora, $pais){
       
        $ret = false;
        
        $sql = "INSERT INTO visitas (ip, fecha_hora, pais) VALUES ('{$ip}', '{$fecha_hora}', '{$pais}')";
       
       $resultado = mysqli_query($this->conexion, $sql) or die ("No pudo insertar en la tabla" . mysqli_error($this->conexion));
       
       if($resultado){
           $ret = true;
       }
       
       return $ret;
    }


    
    
    /**
     * Funcion para insertar una nueva mesa en la base de datos
     */
    public function insertarMesaNueva($nombre, $contra, $nombre_usuario, $correo_usuario){
        $retorno = false;
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        
        $sql_usuario = "INSERT INTO usuario (nombre, correo, password, direccion, fecha_registro, tipo_usuario, estado)"
                . " VALUES "
                . " ('{$nombre}', '{$nombre}', '{$contra}', '-cliente-', '{$fecha}', 3, 1)";
                
        $sql = "INSERT INTO cliente (id_usuario, nombre_mesa, contra_mesa, hora_registro, fecha_registro, estado)"
                . " VALUES"
                . "((SELECT id FROM usuario WHERE nombre = '{$nombre}' AND password = '{$contra}'), '{$nombre}', '{$contra}', '{$hora}', '{$fecha}', 1)";
                
        $res_ins_usuario = mysqli_query($this->conexion, $sql_usuario) or die ("No pudo insertar en la tabla usuario: " . mysqli_error($this->conexion));
        
        if($res_ins_usuario){
            $res_ins_cliente = mysqli_query($this->conexion, $sql) or die ("No pudo insertar el cliente: " . mysqli_error($this->conexion));
            if($res_ins_cliente){
                $retorno = true;
            }
        }
        
        return $retorno;
    }
    
    /**
     * Funcion para ingresar productos al menu
     */
    public function insertarProducto($id, $nombre, $tipo, $desc, $precio, $ruta_img){
        $retorno = false;
        $fecha = date("Y-m-d");
        
        $sql = "INSERT INTO producto (id_usuario, nombre, descripcion, ruta_imagen, precio, fecha_registro, estado, tipo_producto)"
                . " VALUES"
                . " ({$id}, '{$nombre}', '{$desc}', '{$ruta_img}', {$precio}, '{$fecha}', 1, {$tipo})";
        
        $resultado = mysqli_query($this->conexion, $sql) or die ("No pudo insertar el nuevo producto: " . mysqli_error($this->conexion));
        
        if($resultado){
            $retorno = true;
        }
        return $retorno;
    }
    
    
    public function insertarPedidoNuevo($id_cliente){
        $retorno = false;
        $retorno_identificador = "mal";
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        
        $identificacion = $fecha . "-" . $hora;
        
        $sql_insertar_pedido = "INSERT INTO pedido"
                . " (id_cliente, estado, fecha, hora, cadena_identificadora)"
                . " VALUES"
                . " ({$id_cliente}, 1, '{$fecha}', '{$hora}', '{$identificacion}')";
                
        $resultado = mysqli_query($this->conexion, $sql_insertar_pedido) or die ("No pudo insertar el nuevo pedido: " . mysqli_error($this->conexion));
        
        if($resultado){
            $retorno = true;
        }
        if($retorno){
            $retorno_identificador = $identificacion;
        }
        return $retorno_identificador;
    }
    
    
    public function insertarEnlaceDePedido($id_pedido, $id_producto, $id_cliente, $comentarios, $cantidad, $cad_identificador){
        $retorno = false;
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        
        $sql = "INSERT INTO pedido_enlace"
                . " (id_pedido, id_producto, id_cliente, comentario, cantidad, fecha, hora, estado, cadena_identificadora)"
                . " VALUES"
                . " ({$id_pedido}, {$id_producto} , {$id_cliente}, '{$comentarios}', {$cantidad}, '{$fecha}', '{$hora}', 1, '{$cad_identificador}')";
                
        $resultado = mysqli_query($this->conexion, $sql) or die ("No pudo insertar el enlace: " . mysqli_error($this->conexion));
        
        if($resultado){
            $retorno = true;
        }
        return $retorno;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}//Fin de la clase