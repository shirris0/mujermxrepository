$( document ).ready(function() {
    
    var host = '/';

    $("#main").load(host+"indexContent.html",function(){
        //cargarCarousel();
    });
    $("#bannerHome").show();

    abrirMenu = function(obj,to){
        $("#menuBar li").removeClass("active");
        $("#bannerHome").remove();
        $("#main").load(host+to,function(){
        });
        $("#"+obj.id).addClass("active");     
        $('.back-to-top').trigger("click");  
    }

});





        