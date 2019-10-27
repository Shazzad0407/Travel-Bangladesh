<?php 
     include("includes/connection.php");
      $resId='2';
    $countRestaurantInfo="SELECT* 
                        FROM food NATURAL JOIN foodreview
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
                         <div class="col col-12 col-sm-6 col-md-6 col-lg-4 myPadding hotel foodInfo">
                          <div class="rp clearfix foodItem">
                             <img class="packageBanner" src="img/f1.jpg" alt="">
                             <h5 class="foodName">pasta basta</h5>
                             <p class="foodDesc">White sauce, tomato sauce, chicken, cheese, garlic, mushroom, capsicum, oregano</p>
                             
                             <div class=" rating foodRating">
                                   <ul>
                                     <li><p>(<i>75</i> reviews)</p></li>
                                      <li><span class="fas fa-star checked"></span></li>
                                      <li><span class="fas fa-star checked"></span></li>
                                      <li><span class="fas fa-star checked"></span></li>
                                      <li><span class="fas fa-star checked"></span></li>
                                      <li><span class="fas fa-star checked"></span></li>
                                   </ul>
                             </div>
                              <div class="viewReview">
                                  <!-- view comments -->
                                    <button type="button" class="btn btn-primary viewComment myBtn" data-toggle="modal" data-target="#exampleModalLong">
                                      comments
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">comments</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            
                                                <div class="comment">
                                                    <ul>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g1.jpg">
                                                                </div>
                                                               <div class="userName"><h1>shakil Ahmed Shahan</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g2.jpg">
                                                                </div>
                                                               <div class="userName"><h1>Ashraf Uddin Shahed</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g3.jpg">
                                                                </div>
                                                               <div class="userName"><h1>MM Hasan Ovi</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g1.jpg">
                                                                </div>
                                                               <div class="userName"><h1>shakil Ahmed Shahan</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g2.jpg">
                                                                </div>
                                                               <div class="userName"><h1>Ashraf Uddin Shahed</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                        <li>
                                                           <div class="commentHeader">
                                                                <div class="userPhoto">
                                                                    <img src="img/g3.jpg">
                                                                </div>
                                                               <div class="userName"><h1>MM Hasan Ovi</h1></div>
                                                               <div class="commentTime"><span>4th july, 2018, 9.30pm</span></div>
                                                           </div>
                                                           <div class="commentBody">
                                                               <div class="commentDesc">
                                                                   <p>Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price suitable for all vegetarian people.Loved the food and the staff was very professional and friendly in terms.Enjoyed the service </p>
                                                               </div>
                                                               <div class="ratingFood">
                                                                   <div class="ratingForService">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                         <p>Service</p>
                                                                   </div>
                                                                   <div class="ratingForFood">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Food</p>
                                                                   </div>
                                                                   <div class="ratingForPrice">
                                                                       <div class="rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Price</p>
                                                                   </div>
                                                                   <div class="ratingForAtmos">
                                                                       <div class=" rating">
                                                                               <ul>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                                  <li><span class="fas fa-star checked"></span></li>
                                                                               </ul>
                                                                         </div>
                                                                       <p>Atmosphere</p>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    
                                <!---give comments---->
                                
                                <button type="button" class="btn btn-primary giveReview myBtn" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">give review</button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form id="ratingForm">
                                         
                                         
                                          <div class="form-group">
                                            <label for="message-text" class="col-form-label wR">Write your review :</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                          </div>
                                            <div class="rf">
                                                
                                                <fieldset class="rating1">
                                                    <input type="radio" id="star5_1" name="rating_1" value="5" />
                                                    <label class = "full" for="star5_1" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half_1" name="rating_1" value="4 and a half" />
                                                    <label class="half" for="star4half_1" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4_1" name="rating_1" value="4" />
                                                    <label class = "full" for="star4_1" title=" good - 4 stars"></label>
                                                    <input type="radio" id="star3half_1" name="rating_1" value="3 and a half" />
                                                    <label class="half" for="star3half_1" title="average - 3.5 stars"></label>
                                                    <input type="radio" id="star3_1" name="rating_1" value="3" />
                                                    <label class = "full" for="star3_1" title="average - 3 stars"></label>
                                                    <input type="radio" id="star2half_1" name="rating_1" value="2 and a half" />
                                                    <label class="half" for="star2half_1" title="low - 2.5 stars"></label>
                                                    <input type="radio" id="star2_1" name="rating_1" value="2" />
                                                    <label class = "full" for="star2_1" title="bad - 2 stars"></label>
                                                    <input type="radio" id="star1half_1" name="rating_1" value="1 and a half" />
                                                    <label class="half" for="star1half_1" title="very bad - 1.5 stars"></label>
                                                    <input type="radio" id="star1_1" name="rating_1" value="1" />
                                                    <label class = "full" for="star1_1" title="terrible - 1 star"></label>
                                                    <input type="radio" id="starhalf_1" name="rating_1" value="half" />
                                                    <label class="half" for="starhalf_1" title="worst - 0.5 stars"></label>
                                                 </fieldset>
                                                 <h5>review food</h5>
                                            </div>
                                                
                                                   
                                                    <br>
                                                    
                                            <div class="rs">
                                                
                                                <fieldset class="rating1">
                                                    <input type="radio" id="star5_2" name="rating_2" value="5" />
                                                    <label class = "full" for="star5_2" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half_2" name="rating_2" value="4 and a half" />
                                                    <label class="half" for="star4half_2" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4_2" name="rating_2" value="4" />
                                                    <label class = "full" for="star4_2" title=" good - 4 stars"></label>
                                                    <input type="radio" id="star3half_2" name="rating_2" value="3 and a half" />
                                                    <label class="half" for="star3half_2" title="average - 3.5 stars"></label>
                                                    <input type="radio" id="star3_2" name="rating_2" value="3" />
                                                    <label class = "full" for="star3_2" title="average - 3 stars"></label>
                                                    <input type="radio" id="star2half_2" name="rating_2" value="2 and a half" />
                                                    <label class="half" for="star2half_2" title="low - 2.5 stars"></label>
                                                    <input type="radio" id="star2_2" name="rating_2" value="2" />
                                                    <label class = "full" for="star2_2" title="bad - 2 stars"></label>
                                                    <input type="radio" id="star1half_2" name="rating_2" value="1 and a half" />
                                                    <label class="half" for="star1half_2" title="very bad - 1.5 stars"></label>
                                                    <input type="radio" id="star1_2" name="rating_2" value="1" />
                                                    <label class = "full" for="star1_2" title="terrible - 1 star"></label>
                                                    <input type="radio" id="starhalf_2" name="rating_2" value="half" />
                                                    <label class="half" for="starhalf_2" title="worst - 0.5 stars"></label>
                                                 </fieldset>
                                                 <h5>review service</h5>
                                            </div>

                                                
                                                    <br>
                                                    
                                            <div class="rv">
                                                
                                                <fieldset class="rating1">
                                                    <input type="radio" id="star5_3" name="rating_3" value="5" />
                                                    <label class = "full" for="star5_3" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half_3" name="rating_3" value="4 and a half" />
                                                    <label class="half" for="star4half_3" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4_3" name="rating_3" value="4" />
                                                    <label class = "full" for="star4_3" title=" good - 4 stars"></label>
                                                    <input type="radio" id="star3half_3" name="rating_3" value="3 and a half" />
                                                    <label class="half" for="star3half_3" title="average - 3.5 stars"></label>
                                                    <input type="radio" id="star3_3" name="rating_3" value="3" />
                                                    <label class = "full" for="star3_3" title="average - 3 stars"></label>
                                                    <input type="radio" id="star2half_3" name="rating_3" value="2 and a half" />
                                                    <label class="half" for="star2half_3" title="low - 2.5 stars"></label>
                                                    <input type="radio" id="star2_3" name="rating_3" value="2" />
                                                    <label class = "full" for="star2_3" title="bad - 2 stars"></label>
                                                    <input type="radio" id="star1half_3" name="rating_3" value="1 and a half" />
                                                    <label class="half" for="star1half_3" title="very bad - 1.5 stars"></label>
                                                    <input type="radio" id="star1_3" name="rating_3" value="1" />
                                                    <label class = "full" for="star1_3" title="terrible - 1 star"></label>
                                                    <input type="radio" id="starhalf_3" name="rating_3" value="half" />
                                                    <label class="half" for="starhalf_3" title="worst - 0.5 stars"></label>
                                                 </fieldset>
                                                 <h5>review value</h5>
                                            </div>
                                               
                                                      <br>
                                                    
                                            <div class="ra">
                                                
                                                <fieldset class="rating1">
                                                    <input type="radio" id="star5_4" name="rating_4" value="5" />
                                                    <label class = "full" for="star5_4" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half_4" name="rating_4" value="4 and a half" />
                                                    <label class="half" for="star4half_4" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4_4" name="rating_4" value="4" />
                                                    <label class = "full" for="star4_4" title=" good - 4 stars"></label>
                                                    <input type="radio" id="star3half_4" name="rating_4" value="3 and a half" />
                                                    <label class="half" for="star3half_4" title="average - 3.5 stars"></label>
                                                    <input type="radio" id="star3_4" name="rating_4" value="3" />
                                                    <label class = "full" for="star3_4" title="average - 3 stars"></label>
                                                    <input type="radio" id="star2half_4" name="rating_4" value="2 and a half" />
                                                    <label class="half" for="star2half_4" title="low - 2.5 stars"></label>
                                                    <input type="radio" id="star2_4" name="rating_4" value="2" />
                                                    <label class = "full" for="star2_4" title="bad - 2 stars"></label>
                                                    <input type="radio" id="star1half_4" name="rating_4" value="1 and a half" />
                                                    <label class="half" for="star1half_4" title="very bad - 1.5 stars"></label>
                                                    <input type="radio" id="star1_4" name="rating_4" value="1" />
                                                    <label class = "full" for="star1_4" title="terrible - 1 star"></label>
                                                    <input type="radio" id="starhalf_4" name="rating_4" value="half" />
                                                    <label class="half" for="starhalf_4" title="worst - 0.5 stars"></label>
                                                 </fieldset>
                                                 <h5>review Atmosphere</h5>
                                            </div>
                                                
                                                
                                                <div class="Myclearfix"></div>
                                                
                                          
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         <button type="button" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                
                                
                              </div>
                              <div class="fprice"><h6>price: <i>৳ </i><strong>150</strong> </h6></div>
                             
                          </div>
                       </div> 
                       
                      