<?php
    include("includes/connection.php");


//calculate distance from longitude and latitude    
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

      $theta = $lon1 - $lon2;
      $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
      $dist = acos($dist);
      $dist = rad2deg($dist);
      $miles = $dist * 60 * 1.1515;
      $unit = strtoupper($unit);

      if ($unit == "K") {
        return ($miles * 1.609344);
      } else if ($unit == "N") {
          return ($miles * 0.8684);
        } else {
            return $miles;
          }
    }

//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";



    //Query for get a place related info (count) information 
    $hotelInfo= "
               SELECT hotelId, hotelName, address, website, startingPrice, hotelCoverPic
               FROM hotel";

    //run the query & get the table in $runAllPostQuery 
   $runHotelInfo = mysqli_query($con,$hotelInfo);
    
    
?>
                 
                 
                 
                 
                 
                 
                 <div class="col-lg-9 col-md-8  content recP allPackage">   
                  <div class="row topP">
                    <h1>All Hotels</h1>
                 </div>
                 <div class="topP">
                    <div class="row">
                         
                         
                        <?php 
						 while($row = mysqli_fetch_array($runHotelInfo)){
							 
							 $hotelId= $row['hotelId'];
                             $hotelName= $row['hotelName'];
							 $address= $row['address'];
                             $website= $row['website'];
                             $startingPrice= $row['startingPrice'];
							 $hotelCoverPic= $row['hotelCoverPic'];
							 
							echo"<div class='col col-12 col-sm-6 col-md-6 col-lg-4 myPadding hotel'>
                              <div class='rp clearfix'>
                                 <img class='packageBanner' src='".$hotelCoverPic."' alt=''>
                                 <div class='hotelrate'>
                                      <div class='blur'>
                                      </div>
                                        <div class='hStar rating'>
                                           <ul>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                           </ul>
                                        </div>
                                  </div>
                                 
                                 <h5>".$hotelName."</h5>
                                 <i class='fas fa-map-marker-alt loc' style='color:#267e3a'></i>
                                 <p class='addr'><span>".$address.".</span></p>
                                 <div class='vl'></div>
                                 
                                 <div class='facilities'>";
								 
								 $hotelAmenities = "SELECT amenityName, icon,aminityColor
													FROM amenities NATURAL JOIN hotelamenity
													WHERE hotelId='".$hotelId."'
													LIMIT 4";
								 $runHotelAmenities= mysqli_query($con, $hotelAmenities);
								 
                                echo"<!--  show only four list  --->
                                     <ul>";
										 while ($row1 = mysqli_fetch_array($runHotelAmenities)){
										 $icon=$row1['icon'];
										 $name=$row1['amenityName'];
                                         $aminityColor= $row1['aminityColor'];
                                         echo"<li><i class='".$icon."' style='$aminityColor'></i> <span>".$name."</span></li>";
										 }
                                     echo "</ul>
                                     <sub><a class='hSite' href=http://".$website." target='_blank'><i class='fas fa-desktop'></i> <span>hotel Website</span></a></sub>
                                 </div>
                                 
                                 <div class='from'>
                                    <p>From</p>
                                    <h6>BDT <strong>".$startingPrice."</strong><i>৳</i></h6>
                                    <a href='hotelDetail.php?id=".$hotelId."'><button>details</button></a>
                                 </div>
                              </div>
                           </div>";
						 }
						?>
						
						<!-- Link for the button: href='hotelDetail.php?id=$hotelId' -->
                         
                       </div><!--- end div row --> 
                       <!---------pegination--------->
                         <div class="row peg">
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                      <span class="page-link">Previous</span>
                                    </li>
                                    
                                    <li class="page-item active">
                                      <span class="page-link">
                                        1
                                        <span class="sr-only">(current)</span>
                                      </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                      <a class="page-link" href="#">Next</a>
                                    </li>
                                  </ul>
                                </nav>
                          </div>
                     </div>
                     
              </div>