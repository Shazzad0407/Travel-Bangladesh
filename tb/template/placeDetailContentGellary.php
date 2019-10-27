<?php
    $placeGellary="SELECT path FROM placegellary WHERE placeId ='$placeId'";
    $runPlaceGellary = mysqli_query($con,$placeGellary);  

    $img1= mysqli_fetch_array($runPlaceGellary)['path'];
    $img2= mysqli_fetch_array($runPlaceGellary)['path'];   
    $img3= mysqli_fetch_array($runPlaceGellary)['path']; 
     
?> 
<div class="myGallery">
     <h2>GALLERY</h2>
    <div class="galleryImage" id="kurbani">
        <div class="myimgShow">
        <img class="galleryImg" src="<?php echo $img1;?>" >
        </div>
        <img class="galleryImg" src="<?php echo $img2;?>" width="50%" height="202px" style="float: left">
        <img class="galleryImg" src="<?php echo $img3;?>" width="50%" height="202px" style="float: left">

    </div>

</div>


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
           <?php
                while($row = mysqli_fetch_array($runPlaceGellary)){
                      $path= $row['path'];
                     echo"<div class='pswp__item'>";
                     echo"<img class='galleryImg' src='$path'>";
                     echo"</div>";
                 }
            ?>
            
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
                 
                 