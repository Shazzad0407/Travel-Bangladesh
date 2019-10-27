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
    $packageInfo= "SELECT * FROM(
                (SELECT packageId, packageName,placeId, durationDay, durationNight, price, companyName
                FROM package NATURAL JOIN packageowner NATURAL JOIN packageofferplaces)  as a
                NATURAL JOIN
                (SELECT placeId,placeName FROM place) as b
                )
                WHERE placeId ='$placeId'";

    //run the query & get the table in $runAllPostQuery 
   $runPackageInfo = mysqli_query($con,$packageInfo);
    
    
?>
                 
                 
                 
						<?php
							while($row = mysqli_fetch_array($runPackageInfo)){
                                $packageId= $row['packageId'];
                                $packageName= $row['packageName'];
                                $durationDay= $row['durationDay'];
                                $durationNight= $row['durationNight'];
                                $price= $row['price'];
                                $companyName= $row['companyName'];
                                $address="";
                                //for find all offering places
                                $offerPlace ="SELECT placeName
                                            FROM packageofferplaces NATURAL JOIN place 
                                            WHERE packageId=$packageId";
                                $runOfferPlace = mysqli_query($con,$offerPlace); 
                                $flag=1;
                                while($row = mysqli_fetch_array($runOfferPlace)){
                                      $addr= $row['placeName'];
                                    if($flag==1){
                                        $address= $address.$addr;
                                        $flag=0;
                                    }else{
                                         $address= $address.', '.$addr;
                                    }
                                    
                                }

                                $r1= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(id) as numberOfReview
                                                                    FROM packagereview
                                                                    WHERE packageid=".$packageId));
                                $numberOfReview= $r1['numberOfReview'];

                                echo "<div class='col col-12 col-sm-6 col-md-6 col-lg-4 myPadding'>
                                  <div class='rp clearfix'>
                                     <img class='packageBanner' src='img/rp1.jpg' alt=''>
                                     <h5>".$packageName."</h5>
                                     <i class='fas fa-map-marker-alt loc'></i>
                                     <p><span>".$address.".</span></p>
                                      <i class='loc duration'><img src='img/duration.png'></i>
                                     <p><span>Duration: ".$durationDay." days & ".$durationNight." nights</span></p>
                                     <div class='seller'>
                                        <h6><strong>seller: </strong>".$companyName."</h6>
                                        <div class='rating'>
                                           <ul>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                              <li><span class='fas fa-star checked'></span></li>
                                           </ul>
                                        </div>
                                        <p>".$numberOfReview." reviews</p>
                                     </div>
                                     <div class='from'>
                                        <p>From</p>
                                        <h6>BDT <strong>".$price."</strong><i>৳</i></h6>
                                        <a href= 'packageDetail.php?id=".$packageId."'><button>details</button></a>
                                     </div>
                                  </div>
                               </div>";

							}
						?>
						               
                                         
                                         
                                         
                                         
                                         