<?php 

    require "ConsultaProductos.php";

    function contructor(){
        $pdo= new ConsultaProductosClass();
        $clase = $pdo->ConsultaProductos();
        return $clase;
    }
    

    if (isset($_POST['getDetalleById'])) {
        $id = $_POST['getDetalleById'];
        $class = new ConsultaProductosClass();
        $class->ConsultaProductos();
        $var = $class->getDetalleById($id);
        echo $var[0]['detalle'];
    }

    if (isset($_POST['getDetalleImgById'])) {
        $id = $_POST['getDetalleImgById'];
        $class = new ConsultaProductosClass();
        $class->ConsultaProductos();
        $var = $class->getDetalleImgById($id);

        foreach($var as $key=>$value){
            $newArrData[$key] =  $var[$key];
            $newArrData[$key]['img'] = base64_encode($var[$key]['img']);
        }

        header('Content-type: application/json');
        echo json_encode($newArrData);
    }

?>