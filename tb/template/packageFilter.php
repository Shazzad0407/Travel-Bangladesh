<?php
    include("includes/connection.php");

    //Query for get a place related info (count) information 
    $sellersQry= "
               SELECT emailAddress, companyName
				FROM packageowner
				ORDER BY rating DESC
				LIMIT 5";
				
	$typeQry= "SELECT DISTINCT type
				FROM package";

    //run the query & get the table in $runAllPostQuery 
   $runSQry = mysqli_query($con,$sellersQry);
   $runTQry = mysqli_query($con,$typeQry);
    
    
?>


					<div class="topSeller searchByDivision">
                      <h3 class="filterHead">Top Sellers</h3>
                      <ul class="filterOption">
					  <?php
						while ($row=mysqli_fetch_array($runSQry)){
							$name=$row['companyName'];
							$email=$row['emailAddress'];
							echo"<li>
                              <label class='myCheck'>".$name."
                                  <input type='checkbox'>
                                  <span class='checkmark'></span>
                              </label>
                          </li>";
						}
					  ?>
                      </ul>
                  </div>
                  
                  <div class="tourType searchByDivision typeOfp">
                      <h3 class="filterHead">Tour Type</h3>
                      <ul class="filterOption">
					  <?php
						while ($row=mysqli_fetch_array($runTQry)){
							$type=$row['type'];
							
							echo"<li>
                              <label class='myCheck'>".$type."
                                  <input type='checkbox'>
                                  <span class='checkmark'></span>
                              </label>
							</li>";
						}
					  ?>
                         
                      </ul>
                  </div>