<?php
    include("includes/connection.php");

    //Query for get a place related info (count) information 
    $amenitiesQry= "
               SELECT amenityName, amenityId
               FROM amenities";

    //run the query & get the table in $runAllPostQuery 
   $runAmenities = mysqli_query($con,$amenitiesQry);
    
    
?>
                 
                 
                 
                 
                 
                 
                 <div class="col-lg-3 col-md-4  filter hotelFilter">
                  <button>
                      <i class="fas fa-map-marker-alt"></i>
                      click to find HOTELS near you
                  </button>
                  
                  <div class="dropdown mysort mysortHotel">
                      <button class="btn btn-secondary dropdown-toggle sortBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="lth" style="display: block;float: left;"><i class="fas fa-sort-amount-up"></i> Sort by price (low to high)</span>
                          <span class="htl" style="display: none; float: left;"><i class="fas fa-sort-amount-down"></i> Sort by price (high to low)</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <p class="dropdown-item ltho"> <i class="fas fa-sort-amount-up"></i> Low To High</p>
                        <p class="dropdown-item htlo"><i class="fas fa-sort-amount-down"></i> High To Low</p>
                      </div>
                    </div>
                    
                  <div class="priceRange searchByDivision">
                      <h3 class="filterHead">Price Range/Night</h3>
                      <form method="" class="filterOption">
                          <div class="start w-100 float-left">
                              <label>from</label> <input type="number" value="0"><sub>tk</sub>
                          </div>
                          <div class="end">
                              <label>   to  </label> <input type="number" value="3000"><sub>tk</sub>
                          </div>
                          <button class="rangeGo" >go</button>
                      </form>
                  </div>
                  
                      
                  
                  
                  <div class="searchByDivision">
                      <h3 class="filterHead">Amenities</h3>
                      <ul class="filterOption">
                          
						 <?php
						  while ($row=mysqli_fetch_array($runAmenities)){
							$amenityName=$row['amenityName'];
							$amenityId=$row['amenityId'];
							echo"<li>
                              <label class='myCheck'>".$amenityName."
                                  <input type='checkbox'>
                                  <span class='checkmark'></span>
                              </label>
							</li>";
						  }
						 ?>
						  
                      </ul>
                  </div>
                  
                  
                  <div class="topSeller searchByDivision hotelClass">
                      <h3 class="filterHead">Hotel Class</h3>
                      <ul class="filterOption">
                         <li>
                             <label class="myCheck"><div class="star">5 star</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck"><div class="star">4 star</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck"><div class="star">3 star</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck"><div class="star">2 star</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck"><div class="star">1 star</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star checked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck"><div class="star">unrated</div>
                                 <div class="rating hotelRating">
                                       <ul>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                          <li><span class="fas fa-star unchecked"></span></li>
                                       </ul>
                                    </div>
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                      </ul>
                  </div>
                  
                  
        
              </div>