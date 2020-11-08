$( document ).ready(function() {
    var contador = 0;
  
    productos = new ProductosController();


    verDetalleProducto = function(id){
        productos.getDetalleById(id);
        productos.getDetalleImgById(id);
    }

    setDetalleProducto = function(response,type){
        if(type == 1){
            document.getElementById("detalleProd").innerHTML = response;
            contador++;
        }else{
            debugger;
            var str = ""
            $(response).each(function(x,y){
                str += "<div class='carousel-item active itemArt'><img src='data:image/jpeg;base64,"+y.img+"'></div>";
            });
            $("#conentImgDetalle").html(str);
            contador++;
        }
        
        if(contador == 2){
            $('#modalDetalleProducto').modal('show'); 
            contador = 0;
        }
        
    }







});





        