ProductosController = function(){
    var that = this;


    this.getDetalleById = function(id){
        $.ajax({
            url: '../mujerMXRural/global/phpController.php',
            type: 'post',
            data: { "getDetalleById": id},
            success: function(response) { 
                setDetalleProducto(response,1);
             }
        });
        
    }

    this.getDetalleImgById = function(id){
        $.ajax({
            url: '../mujerMXRural/global/phpController.php',
            type: 'post',
            data: { "getDetalleImgById": 1},
            success: function(response) { 
                setDetalleProducto(response,2);
             }
        });
        
    }




    



}