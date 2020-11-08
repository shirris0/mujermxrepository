<?php
    require "Conexion.php";

    class ConsultaProductosClass extends ConexionClass{
       
        public function ConsultaProductos(){
            parent::Conexion();
        }


        public function getProductos(){
            $sql = "
            Select 
            producto.id idProducto,
            producto.titulo  tituloProducto,
            producto.img imagenProducto,
            productor.img imagenMarca,
            producto.etiqueta as etiqueta,
            producto.descripcion as descripcionProducto,
            productor.nombre as nombreMarca
            from tblProductos as producto
            inner join tblMarca productor on productor.id = producto.idProductor";

            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }

        public function getProductores(){
            $sql = "select * from tblMarca";

            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }

        public function getDetalleById($id){
            $sql = "
            select detalle from tblProductos
            where id = :id";
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }

        public function getDetalleImgById($id){
            $sql = "
            select img from tblProductoImagen
            where idProducto = :id";
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }

          
    }

    
    


?>
