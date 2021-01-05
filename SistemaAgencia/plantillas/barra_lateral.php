<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= $base_url ?>index.html" class="brand-link">
      <span class="brand-text font-weight-light">Agencia de Viajes</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="<?= $base_url ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                     Clientes
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/cliente/registroCliente.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registro de Cliente</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/cliente/catalogoCliente.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Catalogo de Clientes</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-header">SERVICIOS</li>

            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-umbrella-beach"></i>
                  <p>
                     Tours
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/tours/registro-tour.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Publicar Tour</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/tours/ver_rour.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver Tours</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/tours/registro_reserva.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registrar Reserva</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>
                     Paquetes
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/paquetes/registro-paquete.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Publicar Tour</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/paquetes/ver_paquete.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver Tours</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/paquetes/registro_reserva.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registrar Reserva</p>
                     </a>
                  </li>
               </ul>
            </li>

            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-star"></i>
                  <p>
                     Sitios turisticos
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/sitios/registrar_sitio.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registrar Sitio</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/sitios/ver_sitios.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver sitios</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/contactos/ver-contactos.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver Contactos</p>
                     </a>
                  </li>
               </ul>

            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                     Vehiculos
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">

                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vehiculos/disponibilidad.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Disponibilidad de Reserva</p>
                     </a>
                  </li>

               </ul>
            </li>
            <!--INCIA CARGO EXPRES MENU-->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-mail-bulk"></i>
                  <p>
                     Encomiendas
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/registroEncomienda.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registro Encomienda</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/verEncomienda.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Modificación Encomienda</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/calculoEncomienda.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Calculo Encomienda</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/actualizacionEnvio.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Actualizacion de Envio</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/producto.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registro de producto</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/encomiendas/verProducto.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver productos</p>
                     </a>
                  </li>
               </ul>
            </li>
            <ul class="sub-menu children dropdown-menu">
               <li><i class="fa fa-user"></i>
               </li>
            </ul>
            <!--TERMINA CARGO EXPRES MENU-->
            <!--INCIA ASESORIA MIGRATORIA MENU-->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-balance-scale-right"></i>
                  <p>
                     Asesoría Migratoria
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/programacionCitas.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Generar Cita</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/registroMigratoria.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Llenado de Formulario</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/Formularios.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Formularios</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/registroPreguntas.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registro de Preguntas</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/ModificarAbiertas.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Preguntas Abiertas</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/Asesoria/ModificarCerradas.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Preguntas Cerradas</p>
                     </a>
                  </li>
               </ul>
            </li>
            <!--TERMINA ASESORIA MIGRATORIA MENU-->
            <!--INCIA VUELOS MENU-->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-plane"></i>
                  <p>
                     Información Vuelos
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/mostrarCotizaciones.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Mostrar Cotizaciones</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/mostrarAerolineas.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Información de Aerolineas</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/mostrarTipoClase.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Tipos de Clase</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/mostrarTipoViaje.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Tipos de Viaje</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/condiciones.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Condiciones</p>
                     </a>
                  </li>
               </ul>
            </li>
            <!--TERMINA VUELOS MIGRATORIA MENU-->
            <li class="nav-header">COTIZACIONES</li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file-invoice-dollar"></i>
                  <p>
                     Cotización
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vuelos/cotizarVuelo.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Cotización de Vuelo</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>home.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Cotización de Paquete</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>home.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Cotización de Tours</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vehiculos/cotizarVehiculo.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Cotización de Vehiculo</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-header">CONTROL</li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>
                     Servicios Adicionales
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?=$base_url?>vistas/servicios/registro_servicio.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registro Servicios</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/servicios/ver_servicios.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver Servicios</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/contactos/ver-contactos.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Ver Contactos</p>
                     </a>
                  </li>

               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                     Renta Cars
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>

               <ul class="nav nav-treeview">

                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                           Registros
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>

                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="<?= $base_url ?>vistas/vehiculos/registroVehiculo.php" class="nav-link">
                              <i class="fas fa-ellipsis-v nav-icon"></i>
                              <p>Registro de Vehiculo</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="<?= $base_url ?>vistas/vehiculos/registroRentaCars.php" class="nav-link">
                              <i class="fas fa-ellipsis-v nav-icon"></i>
                              <p>Registro de Renta Cars</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="<?= $base_url ?>vistas/vehiculos/mantenimiento.php" class="nav-link">
                              <i class="fas fa-ellipsis-v nav-icon"></i>
                              <p>Registrar Mantenimiento</p>
                           </a>
                        </li>
                     </ul>

                  </li>


                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vehiculos/mostrarRegistros.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Mostrar Registros de Flota</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vehiculos/verMantenimientos.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Mantenimientos Realizados</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>vistas/vehiculos/mostrarServicios.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Servicios Adicionales</p>
                     </a>
                  </li>


               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-hand-holding-usd"></i>
                  <p>
                     Ingresos
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>home.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Estadisticas</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>
                     Usuarios
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= $base_url ?>home.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Registrar Usuario</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= $base_url ?>home.php" class="nav-link">
                        <i class="fas fa-ellipsis-v nav-icon"></i>
                        <p>Bitácora</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>