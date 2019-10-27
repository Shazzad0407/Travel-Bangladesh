<?php
    include("includes/connection.php");
   $placeId= $_GET['id'];
    $placeAllInfo= "SELECT * FROM place WHERE placeId='$placeId'";
    $runPlaceAllInfo = mysqli_query($con,$placeAllInfo);  
    $row = mysqli_fetch_array($runPlaceAllInfo);
    {
        $pName= $row['placeName'];
        $districtName= $row['districtName'];
        $latitude= $row['latitude'];
        $longitude= $row['longitude'];
        $description= $row['description'];
        $address= $row['address'];
        $zip= $row['zip'];
        $offDay= $row['offDay'];
        $website= $row['website'];
        $placeCoverPic= $row['placeCoverPic'];
    
    }
?>




<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh|Restaurant Name</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js"></script>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.css">
      <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/default-skin/default-skin.css>

      <link rel="stylesheet" href="css/font.css">
      <link rel="stylesheet" href="css/style.css" >
      <link rel="stylesheet" href="css/viewPlace.css">
      
   </head>
   <body>
      
     <!--header--->
      <?php include("template/header.php");  ?>
      
      
      
     <!---search place-->        
          <div class="searchPlace">
              <img class="d-block w-100" src="img/placeBg1.jpg" alt="">
          </div>
          <div class="searchPlaces">
              <form method="" class="container">
                  <h1>search places by name, location or type of place </h1>
                  <input type="text" placeholder="">
                  <input type="submit" name="searchPlace" value="Search Places">
              </form>
          </div>
      <!--- end div searchBar --> 
      
      
      
      
      
      
      
      
      
        <div class="container">
          <div class="row  middle">
             
             
           <!-----place detail filter ----->
                <?php include("template/placeDetailFilter.php");?>
              
              
              <div class="col-lg-9 col-md-8  content recP allPackage resDetailContent placeDetailContent">   
                  <div class="row foodMenu">
                    <h2><?php echo $pName;?></h2>    <!----name of the place-->
                 </div>
                 
                 
                  
                 
                 <!-----place info + gallery----->
                 <?php include("template/placeDetailContentGellary.php");?>
                
                 <!-----end of gallery code----->
                 
                 
                 
                 <div class="topP resDetails placeDetail">
                    <div class="row">
                     
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">What To Do</a>
                            <a class="nav-item nav-link" id="nav-blog-tab" data-toggle="tab" href="#nav-blog" role="tab" aria-controls="nav-blog" aria-selected="false">Blogs</a>
                            <a class="nav-item nav-link" id="nav-package-tab" data-toggle="tab" href="#nav-package" role="tab" aria-controls="nav-package" aria-selected="false">Packages</a>
                            <a class="nav-item nav-link" id="nav-hotel-tab" data-toggle="tab" href="#nav-hotel" role="tab" aria-controls="nav-contact" aria-selected="false">Hotels</a>
                            <a class="nav-item nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-res" role="tab" aria-controls="nav-res" aria-selected="false">Restaurant</a>
                            <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</a>
                          </div>
                        </nav>
                    
                    <div class="tab-content" id="nav-tabContent" style="width: 100%;">
                     
                     
                     
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <h4><b>Location: </b><span><?php echo"$address";?></span></h4>
                          <h4><b>catagory: </b><span>
                              <?php
                                $catOfPlace="SELECT catName FROM placecat NATURAL JOIN catagory WHERE placeId='$placeId'";
                                $runCatOfPlace = mysqli_query($con,$catOfPlace);  
                                    $flag=1;
                                    while($row = mysqli_fetch_array($runCatOfPlace))
                                    {
                                        $catName= $row['catName'];
                                        if($flag==1){
                                            echo $catName;
                                            $flag=0;
                                        }
                                        else{
                                            echo ", ".$catName;
                                        }
                                        
                                    }
                              ?>
                          
                          
                          </span></h4>
                          <h4><b>Off day: </b><span><?php echo"$offDay";?></span></h4>
                          <h4><b>website: </b><a href="<?php echo "http://$website";?>" style="color: #9c1c30;"><span><?php echo"$website";?></span></a></h4>
                          <p>
                              <b>Description: </b><?php echo"$description";?>
                          </p>
                      </div>
                      
                      
                      
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <ul>
                           <?php
                                $allWtd= "SELECT description  FROM whattodo WHERE placeId='$placeId'";
                                $runAllWtd = mysqli_query($con,$allWtd);
                                $i=1;
                                while($row = mysqli_fetch_array($runAllWtd)){
                                    $wtdDes= $row['description'];
                                    
                                    echo'<ol>';
                                    echo $i.') '.$wtdDes;
                                    echo'</ol>';
                                    $i++;
                                }
                            ?>
                            
                          </ul>
                             
                            
                          
                      </div>
                      
                      
                      <div class="tab-pane fade" id="nav-blog" role="tabpanel" aria-labelledby="nav-blog-tab">
                          <div class="row recB blogForPlace">
                            <div class="row">
                               <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                  <div class="rb clearfix">
                                     <img class="rbImg" src="img/rp1.jpg" alt="">
                                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                                     <div class="wnd float-left clearfix">
                                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                                        <p class="time">july 4, 2018</p>
                                     </div>
                                     <!--- end div wnd -->
                                     <div class="cld float-right clearfix">
                                        <span>12</span><a href="#"><i class="far fa-thumbs-up"></i></a>
                                        <span>2</span><a href="#"><i class="far fa-thumbs-down"></i></a>
                                        <span>5</span><a href="#"><i class="far fa-comments"></i></a>
                                     </div>
                                     <!--- end div cld -->
                                     <p>চট্টগ্রাম থেকে আমরা ১৬ জন গিয়েছিলাম নিঝুম দ্বীপ।আমাদের ট্যুর প্ল্যানটাই এখানে বিস্তারিত দেয়া হলো।
                                        ইচ্ছা ছিলো লঞ্চে করে যাবো।কিন্তু যাওয়ার আগের রাত্রে জানতে পারলাম যে আগামীকাল লঞ্চ অফ।বাধ্য হয়ে বাসে যেতে হলো।চট্টগ্রামের কদমতলী থেকে নোয়াখালীর চেয়ারম্যানঘাটের উদ্দেশ্যে বাস ছাড়ে।ভাড়া ২৫০ টাকা।সেখান থেকে ট্রলারে করে আপনাকে যেতে হবে হাতিয়ার নলচিরা<span>....</span>
                                     </p>
                                     <a href="#"><span>continue reading....</span></a>
                                  </div>
                                  <!--- end div rp -->
                               </div>
                               <!--- end div col -->
                               <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                  <div class="rb clearfix">
                                     <img class="rbImg" src="img/b1.jpg" alt="">
                                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                                     <div class="wnd float-left clearfix">
                                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                                        <p class="time">july 4, 2018</p>
                                     </div>
                                     <!--- end div wnd -->
                                     <div class="cld float-right clearfix">
                                        <span>12</span><a href="#"><i class="far fa-thumbs-up"></i></a>
                                        <span>2</span><a href="#"><i class="far fa-thumbs-down"></i></a>
                                        <span>5</span><a href="#"><i class="far fa-comments"></i></a>
                                     </div>
                                     <!--- end div cld -->
                                     <p>চট্টগ্রাম থেকে আমরা ১৬ জন গিয়েছিলাম নিঝুম দ্বীপ।আমাদের ট্যুর প্ল্যানটাই এখানে বিস্তারিত দেয়া হলো।
                                        ইচ্ছা ছিলো লঞ্চে করে যাবো।কিন্তু যাওয়ার আগের রাত্রে জানতে পারলাম যে আগামীকাল লঞ্চ অফ।বাধ্য হয়ে বাসে যেতে হলো।চট্টগ্রামের কদমতলী থেকে নোয়াখালীর চেয়ারম্যানঘাটের উদ্দেশ্যে বাস ছাড়ে।ভাড়া ২৫০ টাকা।সেখান থেকে ট্রলারে করে আপনাকে যেতে হবে হাতিয়ার নলচিরা<span>....</span>
                                     </p>
                                     <a href="#"><span>continue reading....</span></a>
                                  </div>
                                  <!--- end div rp -->
                               </div>
                               <!--- end div col -->
                               <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                  <div class="rb clearfix">
                                     <img class="rbImg" src="img/slider1.jpg" alt="">
                                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                                     <div class="wnd float-left clearfix">
                                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                                        <p class="time">july 4, 2018</p>
                                     </div>
                                     <!--- end div wnd -->
                                     <div class="cld float-right clearfix">
                                        <span>12</span><a href="#"><i class="far fa-thumbs-up"></i></a>
                                        <span>2</span><a href="#"><i class="far fa-thumbs-down"></i></a>
                                        <span>5</span><a href="#"><i class="far fa-comments"></i></a>
                                     </div>
                                     <!--- end div cld -->
                                     <p>চট্টগ্রাম থেকে আমরা ১৬ জন গিয়েছিলাম নিঝুম দ্বীপ।আমাদের ট্যুর প্ল্যানটাই এখানে বিস্তারিত দেয়া হলো।
                                        ইচ্ছা ছিলো লঞ্চে করে যাবো।কিন্তু যাওয়ার আগের রাত্রে জানতে পারলাম যে আগামীকাল লঞ্চ অফ।বাধ্য হয়ে বাসে যেতে হলো।চট্টগ্রামের কদমতলী থেকে নোয়াখালীর চেয়ারম্যানঘাটের উদ্দেশ্যে বাস ছাড়ে।ভাড়া ২৫০ টাকা।সেখান থেকে ট্রলারে করে আপনাকে যেতে হবে হাতিয়ার নলচিরা<span>....</span>
                                     </p>
                                     <a href="#"><span>continue reading....</span></a>
                                  </div>
                                  <!--- end div rp -->
                               </div>
                               <!--- end div col -->
                            </div>
                            <!--- end div row -->
                         </div>
                      </div>
                      
                      
                      <div class="tab-pane fade" id="nav-package" role="tabpanel" aria-labelledby="nav-package-tab">
                          <div class="content recP allPackage packageForPlace" style="width: 100%;">  
                             <div class="topP">
                                <div class="row">
                                    <!---- all the hotel related this place--->
                                     <?php include("template/placeDetailRelatedPackageContent.php");?>
                                </div><!--- end div row --> 
                            </div>
                          </div>
                      </div>
                      
                        
                      <div class="tab-pane fade" id="nav-hotel" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <div class="content recP allPackage hotelForPlace" style="width: 100%;"> 
                             <div class="topP">
                                <div class="row">
                                     <!---- all the hotel related this place--->
                                     <?php include("template/placeDetailRelatedHotelContent.php");?>
                                </div> 
                             </div>

                           </div><!--- end div row --> 
                      </div>

                      
                      
                      <div class="tab-pane fade" id="nav-res" role="tabpanel" aria-labelledby="nav-res-tab">
                         <div class="content recP allPackage hotelForPlace" style="width: 100%;"> 
                          <div class="topP">
                            <div class="row">
                                  
                                    <!---- all restaurant related this place--->
                                     <?php include("template/placeDetailRelatedRestaurantContent.php");?>
                                 

                               </div><!--- end div row --> 
                          </div>
                      </div>
                        </div>
                      
                      
                      <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                 <div class="givedRate">
                                     <h1>Ratings <span>4.6</span></h1>
                                      <div class=" rating foodRating">
                                       <ul>
                                         <li><b>45</b> people review</li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          
                                       </ul>
                                     </div>
                                 </div>
                                  
                      </div>

                    
                    
                         
                           
                               
                     </div>     <!--- end div row --> 
                       <!---------pegination----
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
                          </div>   ----->
                </div>
                     
              </div>
      </div><!--- end div container --> 
    </div> <!--- end div middle -->
       </div>   
      
      
       <!--- Footer -->
       <?php include("template/footer.php") ?>
       
       <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBbI-llXn9aSfYITdUAYDy2xxpVTXPQ5s&callback=initMap">
    </script>
      <script src="js/myJs.js"></script>
   </body>
</html>