<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh| Hotels</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
   
      
      
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
              <img class="d-block w-100" src="img/hotelBg.jpg" alt="">
          </div>
          <div class="searchPlaces searchPackages">
              <form method="" class="container">
                  <h1>search Hotels by name or location name</h1>
                  <input type="text" placeholder="">
                  <input type="submit" name="searchPlace" value="Search Hotel">
              </form>
          </div>
      <!--- end div searchBar --> 
      
      
        <div class="container">
          <div class="row  middle">
              <!--FilterStart-->
			  <?php
				include("template/hotelFilter.php");
			  ?>
              <!--FilterEnd-->
			  <!--phpstart -->
			  <?php
				include("template/hotelContent.php");
			  ?>
			  <!-- phpend -->
			  
      </div><!--- end div container --> 
    </div> <!--- end div middle -->
      
      
      <!--- Footer -->
     <?php include("template/footer.php")?>
      
      
      
      <script src="js/myJs.js"></script>
   </body>
</html>