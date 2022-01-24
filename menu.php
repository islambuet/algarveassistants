<?php
$user=User::get_user();
?>
      <section id="index-ext_menu-0" data-rv-view="0">
         <nav class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container">
               <div class="mbr-table">
                  <div class="mbr-table-cell">
                     <div class="navbar-brand">
                        <a href="#top" class="navbar-logo"><img src="assets/images/logo-126x128-85.png" alt="AA"></a>
                        <a class="navbar-caption" href="#top">Algarve Assistants</a>
                     </div>
                  </div>
                  <div class="mbr-table-cell">
                     <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                     </button>
                     <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="index.php#index-header3-0">OUR SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link link" href="index.php#Carsimulator">Car Tax Simulator</a></li>
                        <li class="nav-item"><a class="nav-link link" href="index.php#propertyFilter">Property Filter</a></li>
                         <?php
                         if(!$user){
                             ?>
                             <li class="nav-item" id="agent_link"><a class="nav-link link" href="agent.php">Agent</a></li>
                            <?php
                         }
                         ?>
                         <?php
                         if($user && $user['user_group']=='Admin'){
                             ?>
                             <li class="nav-item" id="agent_list_link"><a class="nav-link link" href="admin_agent_list.php">Agent List</a></li>
                         <?php
                         }
                         ?>
                         <?php
                         if($user){
                             ?>
                             <li class="nav-item" id="add_house_link"><a class="nav-link link" href="add_house.php">Add House</a></li>
                         <?php
                         }
                         ?>

                        <li class="nav-item"><a class="nav-link link" href="index.php#index-header3-1">FAQ'S</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link" href="index.php#index-header3-2" aria-expanded="false">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link link" href="index.php#index-header3-3">CONTACT US</a></li>
                         <?php
                         if(!$user){
                             ?>
                             <li class="nav-item" id="login_link"><a class="nav-link link" href="login.php">Login</a></li>
                             <?php
                            }
                             else{
                                 ?>
                                 <li class="nav-item" id="login_link"><a class="nav-link link" href="logout.php">Logout</a></li>
                                <?php
                             }
                         ?>


                        <li class="nav-item nav-btn"><a class="nav-link btn btn-primary" href="index_pt.html"><span class="etl-icon icon-flag mbr-iconfont mbr-iconfont-btn"></span>PT</a></li>
                     </ul>
                     <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                     </button>
                  </div>
               </div>
            </div>
         </nav>
      </section>