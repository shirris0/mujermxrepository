<?php
   require 'global/ConsultaProductos.php';

   $conextion = new ConsultaProductosClass();
   $conextion->ConsultaProductos();

   $listaProductos = $conextion->getProductos();

   //$listaProductores = $conextion->getProductores();
    

?>

<div class="breadcrumbsWhite" data-aos="fade-in" >
    
</div><!-- End Breadcrumbs -->


<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Conoce los productos del campo mexicano</h2>
        <p>Mercado Rural Digital</p>
      </div>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Productos</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Productores</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

               <!-- ======= Popular Courses Section ======= -->
                    <section id="popular-courses" class="courses productos">
                        <div class="container" data-aos="fade-up">
                
                        <div class="row" data-aos="zoom-in" data-aos-delay="100">
                          
                            <?php foreach($listaProductos as $producto){?>

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch contenedorProducto">
                                <div class="course-item producto-item">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode( $producto["imagenProducto"] ); ?>" />
                                    <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4><?php echo $producto["etiqueta"]?></h4>
                                        <p class="price">$$</p>
                                    </div>
                    
                                    <h3><a onclick="verDetalleProducto(<?php echo $producto['idProducto']?>)"><?php echo $producto["tituloProducto"]?></a></h3>
                                    <div style="min-height: 110px; max-height: 110px;">
                                    <p><?php echo $producto["descripcionProducto"]?></p>
                                    </div>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode( $producto["imagenMarca"] ); ?>" />
                                        <span><?php echo $producto["nombreMarca"]?></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div> 

                           <?php } ?>
                            
                
                        </div>
                
                        </div>
                    </section><!-- End Popular Courses Section -->

        </div>
        

      </div>   

    </div>
  </section><!-- End Events Section -->


<!-- Modal -->
<div id="modalDetalleProducto" class="modal bd-example-modal-lg" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Queso de cabra al Aguacate</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="conentImgDetalle">
            <!--<div class="carousel-item active itemArt">
                <img src="assets/img/articulos/1.jpg">
              </div>
              <div class="carousel-item itemArt">
                <img src="assets/img/articulos/2.jpg">
              </div>-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
          <div class="col-md-6" id="detalleProd">
            <!-- En este espacio se coloca las caracteristicas obtenidas desde la base de datos -->
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

  </div>