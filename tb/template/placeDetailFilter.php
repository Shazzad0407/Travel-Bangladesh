<?php 
    $allDivision ="SELECT * FROM division";
    $runAllDivision= mysqli_query($con,$allDivision); 

?>   

                 <div class="col-lg-3 col-md-4  filter">
                  <button>
                      <i class="fas fa-map-marker-alt"></i>
                      click for find places near you
                  </button>
                  <div class="searchByDivision map">
                      <h3 class="filterHead">view on map</h3>
                      <div class="myMap">
                           <div id="floating-panel">
                              <input id="address" class="d-none" type="textbox" value="shundarban national park">
                            </div>
                            <div id="map"></div>
                            
                      </div>
                  </div>
                  <div class="searchByDivision">
                      <h3 class="filterHead">Search By Division</h3>
                      <ul class="filterOption">
                        
                        
                        
                         <?php 
                            while ($row3 = mysqli_fetch_array($runAllDivision)){
                             $divisionName= $row3['divisionName'];
                            echo"<li>";
                            echo"  <label class='myCheck'>"; echo $divisionName;
                            echo"      <input type='checkbox'  class='myCheck1' onclick='myFunction()'>";
                            echo"      <span class='checkmark'></span>";
                            echo" </label>";
                              echo"<ul class='text' style='display:none'>";
                                
                                $allDistrict ="SELECT * FROM district WHERE divisionName = '$divisionName'";
                                $runAllDistrict= mysqli_query($con,$allDistrict); 
                                 while ($row4 = mysqli_fetch_array($runAllDistrict)){
                                    $disName= $row4['districtName'];
                                     echo"<li>";
                                      echo"<label class='myCheck'>";echo $disName;
                                      echo"<input type='checkbox'>";
                                          echo"<span class='checkmark'></span>";
                                      echo"</label>";
                                  echo"</li>";
                                 }
                              echo'</ul>
                          </li>';
                        }
                          ?>
                         
                         
                      </ul>
                  </div>
                  <div class="searchByPlaces typeOfp">
                      <h3 class="filterHead">Type Of Places</h3>
                      <ul class="filterOption">
                         <?php
                            $placeType="SELECT * FROM catagory";
                            $runAllPlaceType= mysqli_query($con,$placeType); 
                            while ($row5 = mysqli_fetch_array($runAllPlaceType)){
                                $placeType=$row5['catName'];
                                echo"<li>";
                                     echo"<label class='myCheck'>";
                                     echo $placeType;
                                     echo"<input type='checkbox'>";
                                     echo" <span class='checkmark'></span>";
                                     echo"</label>";
                                echo"</li>";
                            }  
                        ?>
                          
                      </ul>
                  </div>
              </div>
              
             
            
           
          
         
        
       
      
     
    
   
  
 




