<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh|Restaurant</title>
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
         
          <div class="searchPlace searchPackage">
              <img class="d-block w-100" src="img/restaurantBg.jpg" alt="">
          </div>
          <div class="searchPlaces searchPackages">
              <form method="" class="container">
                  <h1>search Restaurants by name or location name</h1>
                  <input type="text" placeholder="">
                  <input type="submit" name="searchPlace" value="Search Restaurant">
              </form>
          </div>
      <!--- end div searchBar --> 
      
      
        <div class="container">
          <div class="row  middle">
              <div class="col-lg-3 col-md-4  filter hotelFilter">
                  <button>
                      <i class="fas fa-map-marker-alt"></i>
                        find Restaurants near you
                  </button>
                  
                  
                  <div class="searchByDivision">
                      <h3 class="filterHead">Meals</h3>
                      <ul class="filterOption">
                          <li>
                              <label class="myCheck">Breakfast
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">brunch
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">lunch
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">dinner
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                      </ul>
                  </div>
                  
                  
                  
                  
                  <div class="searchByDivision">
                      <h3 class="filterHead">menu</h3>
                      <ul class="filterOption">
                          <li>
                              <label class="myCheck">set menu
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">rice
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">soup
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">chinese
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">desert
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">pasta
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">burger
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                          <li>
                              <label class="myCheck">pizza
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                              </label>
                          </li>
                      </ul>
                  </div>
                  
                  
                  
        
              </div>
              <div class="col-lg-9 col-md-8  content recP allPackage">   
                  <div class="row topP">
                    <h1>All Restaurants</h1>
                 </div>
                 <div class="topP">
                    <div class="row">
                         
                         
                           <?php include("template/restaurantContent.php");?>
           
                          
                          
                       </div><!--- end div row --> 
                       <!---------pegination--------->
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
                          </div>
                     </div>
                     
              </div>
      </div><!--- end div container --> 
    </div> <!--- end div middle -->
      
      
      <!--- Footer -->
      <?php include("template/footer.php") ?>
      
      
      
      
      
      
      
      <script src="js/myJs.js"></script>
   </body>
</html>