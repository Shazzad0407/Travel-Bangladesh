
                 
<?php
    include("../includes/connection.php");
$NoOfCatId="";
$NoOfLocId="";
$NoOfLocId2="";
$abc="";
    $flag=1;
    $flag1=1;
    if(isset($_POST['id'])){
        
        
        foreach($_POST['id'] as $catagoryId){
            
            
            
            
            //echo $catagoryId;
           
            if($catagoryId[0]>='0' && $catagoryId[0]<='9')
            {   
                if($flag==1){
                $NoOfCatId="catId=".$catagoryId;
                $flag=0;
                }
                else{
                    $NoOfCatId=$NoOfCatId." OR catId=".$catagoryId;
                }
            }
            else{
                if($flag1==1){
                    $NoOfLocId="districtName='".$catagoryId."'";
                    $NoOfLocId2="divisionName='".$catagoryId."'";
                    $flag1=0;
                }
                else{
                    $NoOfLocId=$NoOfLocId." OR districtName='".$catagoryId."'";
                    $NoOfLocId2=$NoOfLocId2." OR divisionName='".$catagoryId."'";
                }
            }
            
        }
        
        
        if($NoOfCatId==null){
            $abc= $NoOfLocId." OR ".$NoOfLocId2;
        }else if($NoOfLocId==null){
            $abc= $NoOfCatId;
        }
        else{
            $abc=  $NoOfCatId." OR ".$NoOfLocId." OR ".$NoOfLocId2;
        }
        
        
    }
       
    
    $filterCountPlaceInfo="
        SELECT* FROM
(SELECT* FROM
( SELECT place.placeId, place.placeName,place.placeCoverPic,place.districtName,b.numberOfPackage,b.numberOfHotels,b.numberOfRestaurant,b.numberOfGuide,b.numberOfblog,b.numberOfReview
	FROM place
    LEFT JOIN

	(SELECT* 
               FROM

                (SELECT COUNT(placeId) as numberOfPackage, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN packageofferplaces
                group BY placeId) AS

                packageNum NATURAL JOIN

                (SELECT COUNT(hotel.hotelId) AS numberOfHotels, place.placeId,place.placeName, place.placeCoverPic
                FROM place INNER JOIN hotel 
                ON place.districtName = hotel.districtName
                GROUP BY place.placeId) AS

                hotelNum NATURAL JOIN

                (SELECT COUNT(restaurant.resId) AS numberOfRestaurant, place.placeId,place.placeName , place.placeCoverPic
                FROM place INNER JOIN restaurant 
                ON place.districtName = restaurant.districtName 
                GROUP BY place.placeId) AS 

                restaurantNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfGuide, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN guideofferplace
                group BY placeId) AS

                guideNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfblog, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN aboutblogplace
                group BY placeId) AS 

                blogNum NATURAL JOIN


                (SELECT COUNT(place.placeId) as numberOfReview, place.placeId, placeName,  placeCoverPic
                FROM giveplacereview INNER JOIN place
                ON giveplacereview.placeId = place.placeId
                GROUP BY place.placeId) AS reviewNum
     )as b
     
    
     ON place.placeId = b.placeId
 ) as saki NATURAL JOIN placecat) as ritu
 NATURAL JOIN district
        WHERE $abc GROUP BY placeId
    ";

//echo $filterCountPlaceInfo;



    $heading="Places Of Bangladesh";
	
	$resultsPerPage=9;
	

    //Query for get a place related info (count) information 
    $countPlaceInfo="
               SELECT place.placeId, place.placeName,place.placeCoverPic,b.numberOfPackage,b.numberOfHotels,b.numberOfRestaurant,b.numberOfGuide,b.numberOfblog,b.numberOfReview
	FROM place
    LEFT JOIN

	(SELECT* 
               FROM

                (SELECT COUNT(placeId) as numberOfPackage, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN packageofferplaces
                group BY placeId) AS

                packageNum NATURAL JOIN

                (SELECT COUNT(hotel.hotelId) AS numberOfHotels, place.placeId,place.placeName, place.placeCoverPic
                FROM place INNER JOIN hotel 
                ON place.districtName = hotel.districtName
                GROUP BY place.placeId) AS

                hotelNum NATURAL JOIN

                (SELECT COUNT(restaurant.resId) AS numberOfRestaurant, place.placeId,place.placeName , place.placeCoverPic
                FROM place INNER JOIN restaurant 
                ON place.districtName = restaurant.districtName 
                GROUP BY place.placeId) AS 

                restaurantNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfGuide, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN guideofferplace
                group BY placeId) AS

                guideNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfblog, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN aboutblogplace
                group BY placeId) AS 

                blogNum NATURAL JOIN


                (SELECT COUNT(place.placeId) as numberOfReview, place.placeId, placeName,  placeCoverPic
                FROM giveplacereview INNER JOIN place
                ON giveplacereview.placeId = place.placeId
                GROUP BY place.placeId) AS reviewNum
     )as b
     
    
     ON place.placeId = b.placeId";

    //run the query & get the table in $runAllPostQuery 
    if(isset($_POST['id'])){
        
        $runCountPlaceInfo = mysqli_query($con,$filterCountPlaceInfo);
    }
    else{
        
        $runCountPlaceInfo = mysqli_query($con,$countPlaceInfo);
    }
   
    
   $numberOfResults = mysqli_num_rows($runCountPlaceInfo);
   $numberOfPages = ceil($numberOfResults/$resultsPerPage);

   if (!isset($_GET['page'])){
	   $page = 1;
   } else {
	   $page = $_GET['page'];
   }
   
   $startLimit = ($page-1)*$resultsPerPage;
   
   $sql = "
               SELECT place.placeId, place.placeName,place.placeCoverPic,b.numberOfPackage,b.numberOfHotels,b.numberOfRestaurant,b.numberOfGuide,b.numberOfblog,b.numberOfReview
	FROM place
    LEFT JOIN

	(SELECT* 
               FROM

                (SELECT COUNT(placeId) as numberOfPackage, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN packageofferplaces
                group BY placeId) AS

                packageNum NATURAL JOIN

                (SELECT COUNT(hotel.hotelId) AS numberOfHotels, place.placeId,place.placeName, place.placeCoverPic
                FROM place INNER JOIN hotel 
                ON place.districtName = hotel.districtName
                GROUP BY place.placeId) AS

                hotelNum NATURAL JOIN

                (SELECT COUNT(restaurant.resId) AS numberOfRestaurant, place.placeId,place.placeName , place.placeCoverPic
                FROM place INNER JOIN restaurant 
                ON place.districtName = restaurant.districtName 
                GROUP BY place.placeId) AS 

                restaurantNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfGuide, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN guideofferplace
                group BY placeId) AS

                guideNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfblog, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN aboutblogplace
                group BY placeId) AS 

                blogNum NATURAL JOIN


                (SELECT COUNT(place.placeId) as numberOfReview, place.placeId, placeName,  placeCoverPic
                FROM giveplacereview INNER JOIN place
                ON giveplacereview.placeId = place.placeId
                GROUP BY place.placeId) AS reviewNum
     )as b
     
    
     ON place.placeId = b.placeId
	 LIMIT ".$startLimit.",".$resultsPerPage;

    $sqlFilter = "
              SELECT* FROM
(SELECT* FROM
( SELECT place.placeId, place.placeName,place.placeCoverPic,place.districtName,b.numberOfPackage,b.numberOfHotels,b.numberOfRestaurant,b.numberOfGuide,b.numberOfblog,b.numberOfReview
	FROM place
    LEFT JOIN

	(SELECT* 
               FROM

                (SELECT COUNT(placeId) as numberOfPackage, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN packageofferplaces
                group BY placeId) AS

                packageNum NATURAL JOIN

                (SELECT COUNT(hotel.hotelId) AS numberOfHotels, place.placeId,place.placeName, place.placeCoverPic
                FROM place INNER JOIN hotel 
                ON place.districtName = hotel.districtName
                GROUP BY place.placeId) AS

                hotelNum NATURAL JOIN

                (SELECT COUNT(restaurant.resId) AS numberOfRestaurant, place.placeId,place.placeName , place.placeCoverPic
                FROM place INNER JOIN restaurant 
                ON place.districtName = restaurant.districtName 
                GROUP BY place.placeId) AS 

                restaurantNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfGuide, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN guideofferplace
                group BY placeId) AS

                guideNum NATURAL JOIN

                (SELECT COUNT(placeId) as numberOfblog, placeId, placeName, placeCoverPic
                FROM place NATURAL JOIN aboutblogplace
                group BY placeId) AS 

                blogNum NATURAL JOIN


                (SELECT COUNT(place.placeId) as numberOfReview, place.placeId, placeName,  placeCoverPic
                FROM giveplacereview INNER JOIN place
                ON giveplacereview.placeId = place.placeId
                GROUP BY place.placeId) AS reviewNum
     )as b
     
    
     ON place.placeId = b.placeId
 ) as saki NATURAL JOIN placecat) as ritu
 NATURAL JOIN district
        WHERE $abc GROUP BY placeId
	 LIMIT ".$startLimit.",".$resultsPerPage;

    if(isset($_POST['id'])){
        
        $runCountPlaceInfo = mysqli_query($con,$sqlFilter);
    }
    else{
        
        $runCountPlaceInfo = mysqli_query($con,$sql);
    }


?>
                 
                 
                 
                 
                   
                  <div class="row topP">
                    <h1><?php echo $heading;?></h1>
                 </div>
                 <div class="topPlaceSlider" style="width: 100%;">
                    <div class="row topP">
                        <?php
                            //teake all the table and split every column data
                            while($row = mysqli_fetch_array($runCountPlaceInfo)){

                                                $placeId= $row['placeId'];
                                                $placeName= $row['placeName'];
                                                $placeCoverPic= $row['placeCoverPic'];
                                
                                                $numberOfPackage= $row['numberOfPackage']; if($numberOfPackage==null)$numberOfPackage=0;
                                                $numberOfHotels= $row['numberOfHotels']; if($numberOfHotels==null)$numberOfHotels=0;
                                                $numberOfRestaurant= $row['numberOfRestaurant']; if($numberOfRestaurant==null)$numberOfRestaurant=0;
                                                $numberOfGuide= $row['numberOfGuide']; if($numberOfGuide==null)$numberOfGuide=0;
                                                $numberOfblog= $row['numberOfblog']; if($numberOfblog==null)$numberOfblog=0;
                                                $numberOfReview= $row['numberOfReview']; if($numberOfReview==null)$numberOfReview=0;
                                
                                echo" <div class='col col-12 col-sm-6 col-md-6 col-lg-4 myPadding'> ";
                                echo" <a href='placeDetails.php?id=$placeId'> ";
                                echo" <img src='$placeCoverPic' alt=''>";
                                echo" <div class='rating'>";
                                   echo"<ul class=''>";
                                      echo"<li><span class='fas fa-star checked'></span></li>";
                                      echo"<li><span class='fas fa-star checked'></span></li>";
                                      echo"<li><span class='fas fa-star checked'></span></li>";
                                      echo"<li><span class='fas fa-star checked'></span></li>";
                                      echo"<li><span class='fas fa-star checked'></span></li>";
                                   echo"</ul>";
                                echo"</div>";
                                echo"<h3>$placeName</h3>";
                                echo"<p>$numberOfPackage PACKAGES, $numberOfHotels HOTELLS, $numberOfGuide GUIDES, $numberOfRestaurant REAURANTS $numberOfblog BLOGS & $numberOfReview PEOPLES ARE REVIEW ON THIS PLACE</p>";
                             echo"</a>";
                          echo"</div>";
                                
                                
                                
                                
                                
                            }
                        ?>
                          
                          
                          
                          
                          
                       </div><!--- end div row --> 
                       <!---------pegination--------->		   
                         <div class="row peg">
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                      <?php 
									  if ($page>1){
										$prevlink = "<span class='page-link'><a href='place.php?page=".($page-1)."'>Previous</a></span>"; 
										echo $prevlink;
									  }
									  ?>
                                    </li>
                                    
                                    <!-- <li class="page-item active">
                                      <span class="page-link">
										<?php
											echo $page;
										?>
                                        <span class="sr-only">(current)</span>
                                      </span>
                                    </li> -->
									<?php
										for ($page=1;$page<=$numberOfPages;$page++){
											echo "<li class='page-item'><a class='page-link' href='place.php?page=".$page."'>".$page."</a></li>";
										}
									?>
                                    <li class="page-item">
                                      <?php									  
										if ($page<$numberOfPages){
											$nextlink = "<span class='page-link'><a href='place.php?page=".($page+1)."'>Next</a></span>"; 
											echo $nextlink;
										}
									  ?>
                                    </li>
                                  </ul>
                                </nav>
                          </div>
                     </div>