<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh| Packages</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="css/font.css">
      <link rel="stylesheet" href="css/style.css" >
      
      
   </head>
   <body>
      <!--header--->
      <?php include("template/header.php");?>
         
         
          <div class="searchPlace searchPackage">
              <img class="d-block w-100" src="img/placeBg1.jpg" alt="">
          </div>
          <div class="searchPlaces searchPackages">
              <form method="" class="container">
                  <h1>search packages by name or location</h1>
                  <input type="text" placeholder="">
                  <input type="submit" name="searchPlace" value="Search Package">
              </form>
          </div>
      <!--- end div searchBar --> 
      
      
        <div class="container">
          <div class="row  middle">
              <div class="col-lg-3 col-md-4  filter">
                 
                  <div class="dropdown mysort">
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
                      <h3 class="filterHead">Price Range</h3>
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
                  
                      
                  <!-- FilterStart -->
					<?php
						include("template/packageFilter.php");
					?>
				  <!-- FilterEnd -->
        
              </div>
              <!-- phpstart -->
			  
			  <?php
			  include("template/packageContent.php");
			  ?>
			  
			  <!-- phpend -->
			  
      </div><!--- end div container --> 
    </div> <!--- end div middle -->
      
      
      <!--- Footer -->
      <?php include("template/footer.php")?>
      
      
      
      
      
      
      
      <script src="js/myJs.js"></script>
   </body>
</html>