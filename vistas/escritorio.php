<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();
phpinfo();
if (!isset($_SESSION["nombre"]))
  {
    header("Location: login.html");
  }
else
  {
  require 'header.php';
  if ($_SESSION['escritorio']==1)
    {
    ?>
  <!--Contenido-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="sistema">        
          <!-- Main content -->
          <section class="content">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="small-box" style="background-color:#A9D0F5">
                      <div class="inner">
                          <h3 style="color:#f9f9f9;">Pacientes</h3>                         
                      </div>
                      <div class="icon">
                          <i class="fa fa-users"></i>
                      </div>
                      <a href="./paciente.php" class="small-box-footer">
                      Consultar <i class="fa fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="small-box"  style="background-color:#A9D0F5" >
                      <div class="inner">
                          <h3 style="color:#f9f9f9;">Programar C.</h3>                         
                      </div>
                      <div class="icon">
                          <i class="fa fa-medkit"></i>
                      </div>
                      <a href="./atencion.php" class="small-box-footer">
                      Consultar <i class="fa fa-arrow-circle-right"></i>
                      </a>
                  </div>                  
              </div>
              <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="small-box"  style="background-color:#A9D0F5" >
                      <div class="inner">
                          <h3 style="color:#f9f9f9;">Consulta</h3>                          
                      </div>
                      <div class="icon">
                          <i class="fa fa-heartbeat"></i>
                      </div>
                      <a href="./plan.php" class="small-box-footer">
                      Consultar <i class="fa fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              
              
              <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="small-box"  style="background-color:#A9D0F5" >
                        <div class="inner">
                            <h3 style="color:#f9f9f9;">Historial</h3>                            
                        </div>
                        <div class="icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <a href="./historias.php" class="small-box-footer">
                            Consultar <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  </div>

          </div><!--fin row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
    <!--Fin-Content-->
  <?php
  }
  else
  {
    require 'noacceso.php';
  }

  require 'footer.php';
  ?>
  <script type="text/javascript" src="scripts/escritorio.js"></script>
  <!-- <script>setTimeout('document.location.reload()',10000); </script> -->
  <?php 
  }
    ob_end_flush();
?>


