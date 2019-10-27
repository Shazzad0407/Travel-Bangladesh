    
        <header>
         <div class="container-fluide bg">
            <hr>
            <div class="container">
               <div class="d-flex headerTop">
                  <div class="mr-auto d-none d-md-block left">
                     <ul class="nav  flex-row">
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                     </ul>
                  </div>
                  <div class="r8 s">
                     <ul class="nav ml-md-auto d-md-flex">
                        <li class="nav-item">
                           <a class="nav-link" href="#">login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">sign up</a>
                        </li>
                     </ul>
                  </div>
                  <div class=" searchUp">
                     <form role="form">
                        <input class="useFontAwesomeFamily" type="text" placeholder="&#xf002; search..">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="container-fluide bg2 clearfix myBigNav">
         <!-- Navigation -->
         <div class="container">
            <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-dark">
               <a class="navbar-brand logo" href="#">
                  <img src="img/logo.png" width="74px" height="74px"/>
                  <span class="logoName">TRAVEL <span>BANGLADESH</span></span><br>
                  <h6>know your country</h6>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'index.php'){
                            echo'<li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                 </li>';
                        }else echo'<li class="nav-item">
                                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                   </li>';
                    ?>
                    
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'place.php' || basename($_SERVER['PHP_SELF']) == 'addPlace.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Places
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="place.php">View Places</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPlace.php">Add place</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tour Places
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                           <a class="dropdown-item" href="place.php">View Places</a>
                                           <div class="dropdown-divider"></div>
                                           <a class="dropdown-item" href="addPlace.php">Add place</a>
                                        </div>
                                   </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findPackage.php' || basename($_SERVER['PHP_SELF']) == 'addPackage.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Packages  
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu">
                                       <a class="dropdown-item " href="findPackage.php">Find Packages</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPackage.php">Add Your Package</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Packages  
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu">
                                       <a class="dropdown-item " href="findPackage.php">Find Packages</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPackage.php">Add Your Package</a>
                                    </div>
                                 </li>';
                    ?>
                     
                  <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findHotel.php' || basename($_SERVER['PHP_SELF']) == 'addHotel.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hotels
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="findHotel.php">Find Hotels</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addHotel.php">Hotel Owners</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hotels
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="findHotel.php">Find Hotels</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addHotel.php">Hotel Owners</a>
                                    </div>
                                 </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findRestaurent.php' || basename($_SERVER['PHP_SELF']) == 'addRestaurant.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Restaurents
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu3">
                                       <a class="dropdown-item" href="findRestaurent.php">Find Restaurants</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addRestaurant.php">Add Restaurants</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Restaurents
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu3">
                                           <a class="dropdown-item" href="findRestaurent.php">Find Restaurants</a>
                                           <div class="dropdown-divider"></div>
                                           <a class="dropdown-item" href="addRestaurant.php">Add Restaurants</a>
                                        </div>
                                     </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findGuide.php' || basename($_SERVER['PHP_SELF']) == 'addGuide.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Guides
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu4">
                                       <a class="dropdown-item" href="findGuide.php">Find Your Guide</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addGuide.php">Apply For Guide Job</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Guides
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu4">
                                       <a class="dropdown-item" href="findGuide.php">Find Your Guide</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addGuide.php">Apply For Guide Job</a>
                                    </div>
                                 </li>';
                    ?>
                    <?php
                    if(basename($_SERVER['PHP_SELF']) == 'blog.php'){
                        echo'<li class="nav-item active">
                                <a class="nav-link" href="blog.php">Blogs</a>
                            </li>';
                    }else echo'<li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blogs</a>
                                </li>';
                    ?> 
                  </ul>
               </div>
            </nav>
         </div>
         <!--- end div container --> 
      </div>
      <!--- end div myBigNav --> 
      <!--header & nav only for max 992px-->
      <div class="container-fluide bg mynav">
         <div class="myHeader">
            <div class="mylogo">
               <a class="logo" href="#">
                  <img src="img/logo.png" width="74px" height="74px"/>
                  <span class="logoName">TRAVEL <span>BANGLADESH</span></span><br>
                  <h6>know your country</h6>
               </a>
            </div>
            <!--end div mylogo-->
            <div class="d-flex headerTop mylogin">
               <div class="r8 s">
                  <ul class="nav ml-md-auto d-md-flex">
                     <li class="nav-item">
                        <a class="nav-link" href="#">login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">sign up</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!--end div myHeader-->
         <div class="container-fluide float-left myMenuBar">
            <!-- Navigation -->
            <nav class="navbar navbar-expand-md navbar-dark">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="login.php">Login</a>
                     </li>
                     <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="login.php">Sign Up</a>
                     </li>
                     <?php
                      if(basename($_SERVER['PHP_SELF']) == 'index.php'){
                            echo'<li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                 </li>';
                        }else echo'<li class="nav-item">
                                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                   </li>';
                    ?>
                    
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'place.php' || basename($_SERVER['PHP_SELF']) == 'addPlace.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Places
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="place.php">View Places</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPlace.php">Add place</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tour Places
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                           <a class="dropdown-item" href="place.php">View Places</a>
                                           <div class="dropdown-divider"></div>
                                           <a class="dropdown-item" href="addPlace.php">Add place</a>
                                        </div>
                                   </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findPackage.php' || basename($_SERVER['PHP_SELF']) == 'addPackage.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Packages  
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu">
                                       <a class="dropdown-item " href="findPackage.php">Find Packages</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPackage.php">Add Your Package</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tour Packages  
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu">
                                       <a class="dropdown-item " href="findPackage.php">Find Packages</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addPackage.php">Add Your Package</a>
                                    </div>
                                 </li>';
                    ?>
                     
                  <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findHotel.php' || basename($_SERVER['PHP_SELF']) == 'addHotel.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hotels
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="findHotel.php">Find Hotels</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addHotel.php">Hotel Owners</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hotels
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu1">
                                       <a class="dropdown-item" href="findHotel.php">Find Hotels</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addHotel.php">Hotel Owners</a>
                                    </div>
                                 </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findRestaurent.php' || basename($_SERVER['PHP_SELF']) == 'addRestaurant.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Restaurents
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu3">
                                       <a class="dropdown-item" href="findRestaurent.php">Find Restaurants</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addRestaurant.php">Add Restaurants</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Restaurents
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu3">
                                           <a class="dropdown-item" href="findRestaurent.php">Find Restaurants</a>
                                           <div class="dropdown-divider"></div>
                                           <a class="dropdown-item" href="addRestaurant.php">Add Restaurants</a>
                                        </div>
                                     </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'findGuide.php' || basename($_SERVER['PHP_SELF']) == 'addGuide.php'){
                            echo'<li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Guides
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu4">
                                       <a class="dropdown-item" href="findGuide.php">Find Your Guide</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addGuide.php">Apply For Guide Job</a>
                                    </div>
                                 </li>';
                        }else echo'<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Guides
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sMenu4">
                                       <a class="dropdown-item" href="findGuide.php">Find Your Guide</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="addGuide.php">Apply For Guide Job</a>
                                    </div>
                                 </li>';
                    ?>
                    <?php
                    if(basename($_SERVER['PHP_SELF']) == 'blog.php'){
                        echo'<li class="nav-item active">
                                <a class="nav-link" href="blog.php">Blogs</a>
                            </li>';
                    }else echo'<li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blogs</a>
                                </li>';
                    ?> 
                  </ul>
               </div>
            </nav>
         </div>
         <!--- end div myBigNav --> 
      </div>
      <!--end div mynav-->