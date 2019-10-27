<?php
    include("includes/connection.php");

    $resCoverInfo="SELECT restaurant.resId,restaurant.resName,restaurant.address,restaurant.website,restaurant.resCoverPic
                  FROM restaurant 
                  where districtName='$districtName'"; 
    
                             
      $runResCoverInfo = mysqli_query($con,$resCoverInfo);  
      while($row = mysqli_fetch_array($runResCoverInfo)){
 	      
            $resId= $row['resId'];
            $resName= $row['resName'];
            $address= $row['address'];
            $website= $row['website'];
            $resCoverPic= $row['resCoverPic'];
                                             
                             
 echo"<div class='col col-12 col-sm-6 col-md-6 col-lg-4 myPadding hotel res'>";
          echo"<div class='rp rest clearfix'>";
          echo"<img class='packageBanner' src='$resCoverPic' alt=''>";
          echo"<div class='hotelrate'>";
          echo"<div class='blur'>";
          echo"</div>";
          echo"<div class='hStar rating'>";
          echo" <ul>";
          echo"<li><span class='fas fa-star checked'></span></li>
               <li><span class='fas fa-star checked'></span></li>
               <li><span class='fas fa-star checked'></span></li>
               <li><span class='fas fa-star checked'></span></li>
               <li><span class='fas fa-star checked'></span></li>";
          echo"</ul>";
          echo" </div>";
          echo" </div>";
          echo"<h5>$resName</h5>";

         echo"<i class='fas fa-map-marker-alt loc' style='color:#267e3a'></i>";
         echo"<p class='addr'><span>$address</span></p>";
         echo"<span class='item'>Menues: </span>";
         echo "<p class='resAmi'>";
          
                $flag=1;
                $resMenuName= "SELECT menuName 
                   FROM resmenu 
                   WHERE resId = '$resId'";
                $runResMenuName = mysqli_query($con,$resMenuName);  
                while($row2 = mysqli_fetch_array($runResMenuName)){
                    $menuName =$row2['menuName']; 
                    if($flag==1){
                         echo $menuName;
                        $flag=0;
                    }
                    else{
                        
                        echo ', '.$menuName;
                    }
                    
                }
        
          echo"</p>";
          
          
          
         echo"<div class='facilities'>";

            echo" <sub><a class='hSite' href='http://.$website'><i class='fas fa-desktop'></i> <span>Website</span></a></sub>
             <button>details</button>";
         echo"</div>";

      echo"</div>";
   echo"</div>";
   
   }
?>      