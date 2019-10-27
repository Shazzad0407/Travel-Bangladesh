<?php
    include("includes/connection.php");
    
$pname="";
$f=1;
    if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        $searchQuery ="SELECT* 
                      FROM place NATURAL JOIN 
                      district WHERE placeName LIKE '%$searchq%' OR districtName LIKE '%$searchq%' OR divisionName LIKE '%$searchq%'";
        $query= mysqli_query($con,$searchQuery); 
        $count = mysqli_num_rows($query);
        if($count ==0){
            $output ='Thee was no earch reults!';
        }else{
            while($row = mysqli_fetch_array($query)){
                $placeName = $row['placeName'];
                $disName = $row['districtName'];
            
            
                if($f==1){
                    $pname="placeName='".$placeName."' OR districtName='".$disName."' OR divisionName='".$disName."'";
                    $f=0;
                }
                else{
                    $pname=$pname." OR placeName='".$placeName."' OR districtName='".$disName."' OR divisionName='".$disName."'";
                }
            
                
                
                
                
            }
           // echo $pname;
            echo'<input type="hidden" value="$pname" name="pname" id="uff">';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh| Places</title>
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
      <?php include("template/header.php");  ?>
         

      <div class="searchPlace">
          <img class="d-block w-100" src="img/placeBg1.jpg" alt="">
      </div>
      <div class="searchPlaces">
          <form method="post" class="container" action="sp.php">
              <h1>search places by name, location or type of place </h1>
              <input type="text" id='searchField' placeholder="" name="search">
              <input type="submit" id="searching" name="searchPlace" value="Search Places">
          </form>
      </div>
      <!--- end div searchBar --> 
      
      
        <div class="container">
          <div class="row  middle">
              
              <!-----place  filter ----->
                <?php include("template/placeFilter.php");?>
              
              <div id="placeContent" class="col-lg-9 col-md-8  content"> 
                  <?php include("template/searchPlace.php");?>
              </div>
              
              
              
              
              
      </div><!--- end div container --> 
    </div> <!--- end div middle -->
      
      
      <!--- Footer -->
      <?php include("template/footer.php") ?>
      
     
       
       
      <script src="js/myJs.js"></script>
      
   </body>
</html>