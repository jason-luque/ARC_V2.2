
     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="perfil/online.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                        <p>Administrador</p>
                <div class="pull-left info">
                    <p><?php echo $fullname; ?></p>
                    <i class="fa fa-circle text-success"></i> En linea</a>
                </div>
                         
                        </div>
                    </div>
            
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="dashboard.php"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="#"><i class="material-icons">assessment</i>Todas las órdenes</a></li>

                      <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">add_shopping_cart
                    </i>O. Normales<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#">En tránsito</a></li>
                                <li><a href="#">Entregadas</a></li>
                                <li><a href="#">Terminadas</a></li>
                                  </ul>
                             </div>
                          </li>

                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">work</i>Áreas<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="adddepartment.php">Agregar área</a></li>
                                <li><a href="managedepartments.php">Administrar áreas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">loyalty</i>Marcas<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="addleavetype.php">Agregar marca</a></li>
                                <li><a href="manageleavetype.php">Administrar marcas</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">unarchive</i>Mis archivos<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="subirpdf/index.php">Ver archivos</a></li>
                            </ul>
                        </div>
                    </li>
                  <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">people</i>Admin. Usuarios<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="addemployee.php">Agregar usuario</a></li>
                                <li><a href="manageemployee.php">Administrar usuarios</a></li>
       
                            </ul>
                        </div>
                    </li>
                       <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">contacts
                    </i>Admin. General<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="leaves.php">Ordenes pendientes </a></li>
                                <li><a href="pending-leavehistory.php">Ordenes pendientes de tienda</a></li>
                                <li><a href="approvedleave-history.php">Catálogo de órdenes</a></li>
                                  <li><a href="notapproved-leaves.php">Ordenes terminadas</a></li>
       
                            </ul>
                        </div>
                    </li>

               



                           <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">find_in_page
                    </i>Reportes<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#">E-Commerce</a></li>
                             </ul>
                             </div>
                          </li>



                    


                           <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">person
                         </i>Dependientes<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#">Listado</a></li>
                             </ul>
                             </div>
                          </li>



                    

                     <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">local_offer</i>Admin. Marcas<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="leaves.php">Todas las marcas</a></li>
                                <li><a href="pending-leavehistory.php">Marcas pendientes </a></li>
                                <li><a href="approvedleave-history.php">Marcas aprobadas</a></li>
                                  <li><a href="notapproved-leaves.php">Marcas no aprobadas</a></li>
       
                            </ul>
                        </div>
                    </li>
                        <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php"><i class="material-icons">exit_to_app</i>Cerrar sesión</a>
                            </li>  
                 

                 
              
                </ul>
                   <div class="footer">
                    <p class="copyright"><a href="https://www.cole.mx/">Cole Collection</a> ©</p>

                
                </div>
                </div>
            </aside>