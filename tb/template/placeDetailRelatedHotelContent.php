<?php
    include("includes/connection.php");
    

    //Query for get a place related info (count) information 
    $hotelInfo= "
               SELECT hotelId, hotelName, address, website, startingPrice, hotelCoverPic
               FROM hotel where districtName='$districtName'";

    //run the query & get the table in $runAllPostQuery 
   $runHotelInfo = mysqli_query($con,$hotelInfo);
?>
                                        
                                        
     
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
                                 <div class='hotelrate' >
                                      <div class='blur' style='min-width: 253px;margin-top:  1px;'>
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
						
                      