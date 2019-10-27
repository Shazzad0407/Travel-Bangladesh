<?php
    include("includes/connection.php");
    $resId='2';
    $countRestaurantInfo="SELECT* 
                        FROM restaurant 
                        WHERE resId='$resId'";
    //run the query & get the table in $runAllPostQuery 
   $runCountRestaurantInfo = mysqli_query($con,$countRestaurantInfo);
    $row = mysqli_fetch_array($runCountRestaurantInfo);

  		//	resEmail 	resDescription 	addingDate 	verified 	districtName 	emailAddress
    $resName= $row['resName'];
    $website= $row['website'];
    $address = $row['address'];
    $resPhone=$row['resPhone'];
    $countRestaurantInfo2="SELECT resggellary.path 
                        FROM restaurant NATURAL JOIN resggellary";
    

    $runCountRestaurantInfo2 = mysqli_query($con,$countRestaurantInfo2);
   
    
    
?>
 <div class="row foodMenu">
                    <h2><?php echo $resName; ?></h2>    <!----name of the restaurant-->
                 </div>
                 
                 
                    <div class=" resInfo">
                        
                         <div class="website">
                             <i class="fas fa-desktop"></i>
                             <a href="<?php echo $website; ?>"><h6>website</h6></a>
                         </div>
                         <div class="phone">
                             <i class="fas fa-phone"></i>
                             <h6><?php echo $resPhone; ?></h6>
                         </div>
                         <div class="address">
                            <i class="fas fa-map-marker-alt loc"></i>
                             <h6><?php echo $address; ?></h6>
                         </div>
                     </div>
                 
                 <!-----restaurant info + gallery----->
                 <?php
                         while($row2= mysqli_fetch_array($runCountRestaurantInfo2))
                        {
                            $imagePath=$row2['path'];
                             
                             echo "<div class='myGallery'>";
                             echo   "<div class='galleryImage' id='kurbani'>";
                             echo  "<div class='myimgShow'><img class='galleryImg' src='$imagePath'></div>";
                              echo  "<img class='galleryImg'src='$imagePath' width='50%' height='202px' style='float: left'>";
                                echo "<img class='galleryImg' src='$imagePath' width='50%' height='202px' style='float: left'>
                                ";
                             echo "</div>";
                             echo "</div>";
                        }
                                     

               
                     ?>
    
    
                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe. 
                         It's a separate element as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. 
                            PhotoSwipe keeps only 3 of them in the DOM to save memory.
                            Don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--share" title="Share"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div> 
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>

                        </div>

                    </div>

                </div>
                 
                 
                 <!-----end of gallery code----->
                 