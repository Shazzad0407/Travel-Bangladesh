<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Travel Bangladesh</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/font.css">
      <link rel="stylesheet" href="css/style.css" >
   </head>
   <body>
      <!--header--->
      <?php include("template/header.php");?>
     
      <!--- Image Slider -->
      <div class="container-fluide">
         <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><i class="fas fa-circle"></i></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"><i class="fas fa-circle"></i></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"><i class="fas fa-circle"></i></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
                     <div class="container">
                        <div class="carousel-caption d-md-block slideContent col-xs-12 col-md-6">
                           <h5>Find your next tour</h5>
                           <p>from more than 200 tourist palces</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
                     <div class="carousel-caption d-md-block slideContent col-xs-12 col-md-6">
                        <h5>FIND the best packages <br><span>or</span><br>make your package</h5>
                        <p>start your own business</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img class="d-block w-100" src="img/slider1.jpg" alt="Third slide">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <i class="fas fa-chevron-circle-left"  aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <i class="fas fa-chevron-circle-right"  aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!--- search box -->
            <div class="container">
               <div class="searchBox">
                  <div class="a">
                     <h1>Search Tours</h1>
                     <h6>discover the beauty of Bangladesh</h6>
                     <form>
                        <div class="form-row">
                           <div class="col-xl-9 in">
                              <span>
                              <input type="text" class="form-control" id="validationDefault01" placeholder="Search Tour" value="" >
                              <i class="fas fa-search"></i>
                              </span>
                              <span>
                              <input type="text" class="form-control" id="validationDefault01" placeholder="Destination" value="" >
                              <i class="fas fa-location-arrow"></i>
                              </span>
                              <span class="slc">
                                 <select class="custom-select slct">
                                    <option selected>Destination Type</option>
                                    <option value="1">Historical place</option>
                                    <option value="2">River side</option>
                                    <option value="3">Hill track</option>
                                 </select>
                                 <i class="fas fa-caret-down"></i>
                              </span>
                           </div>
                        </div>
                        <div class="col-xl-9 searchSubmit">
                           <button class="btn btn-primary" type="submit">Find Tours</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!--- end div container -->
            <!--- location box -->
            <div class="container-fluide locationBG">
               <div class="container">
                  <div class="row location">
                     <div class="col-sm-12 col-md-7">
                        <p>National zoo, Botanical Garden and 7 more local beautiful places around you.</p>
                        <button>click for details</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---search box only for 576 px------->
      <div class="container mySearchBox">
         <div class="searchBox">
            <div class="a">
               <h1>Search Tours</h1>
               <h6>discover the beauty of Bangladesh</h6>
               <form>
                  <div class="form-row">
                     <div class="in">
                        <span>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Search Tour" value="" >
                        <i class="fas fa-search"></i>
                        </span>
                        <span>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Destination" value="" >
                        <i class="fas fa-location-arrow"></i>
                        </span>
                        <span class="slc">
                           <select class="custom-select slct">
                              <option selected>Destination Type</option>
                              <option value="1">Historical place</option>
                              <option value="2">River side</option>
                              <option value="3">Hill track</option>
                           </select>
                           <i class="fas fa-caret-down"></i>
                        </span>
                     </div>
                  </div>
                  <div class="searchSubmit">
                     <button class="btn btn-primary" type="submit">Find Tours</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--- end div container -->
      <!--- Top places -->
      <div class="container">
         <div class="row topP">
            <h1>Top Places</h1>
         </div>
         <div class="topPlaceSlider container ">
            <div class="owl-carousel owl-theme row topP">
               <div class="item">
                  <div class="col">
                     <a href="#">
                        <img src="img/topP1.jpg" alt="">
                        <div class="rating">
                           <ul class="">
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <h3>SHUNDARBANS MANGROVE FOREST</h3>
                        <p>25 PACKAGES, 10 HOTELLS, 50 GUIDES, 15 REAURANTS 40 BLOGS & 12,000 PEOPLES ARE REVIEW ON THIS PLACE</p>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="col">
                     <a href="#">
                        <img src="img/topP2.jpg" alt="">
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <h3>COX BAZAR SEA BEACH</h3>
                        <p>42 PACKAGES, 30 HOTELLS, 60 GUIDES, 55 REAURANTS 70 BLOGS & 60,000 PEOPLES ARE REVIEW ON THIS PLACE</p>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="col">
                     <a href="#">
                        <img src="img/topP3.jpg" alt="">
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <h3>SRIMANGAL</h3>
                        <p>42 PACKAGES, 30 HOTELLS, 60 GUIDES, 55 REAURANTS 70 BLOGS & 60,000 PEOPLES ARE REVIEW ON THIS PLACE</p>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="col">
                     <a href="#">
                        <img src="img/topP4.jpg" alt="">
                        <div class="rating">
                           <ul>
                              <li><i class="fas fa-star"></i></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <h3>RANGAMATI KAPTAI LAKE</h3>
                        <p>22 PACKAGES, 30 HOTELLS, 60 GUIDES, 55 REAURANTS 70 BLOGS & 60,000 PEOPLES ARE REVIEW ON THIS PLACE</p>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="col">
                     <a href="#">
                        <img src="img/os3.jpg" alt="">
                        <div class="rating">
                           <ul class="">
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <h3>SHUNDARBANS MANGROVE FOREST</h3>
                        <p>25 PACKAGES, 10 HOTELLS, 50 GUIDES, 15 REAURANTS 40 BLOGS & 12,000 PEOPLES ARE REVIEW ON THIS PLACE</p>
                     </a>
                  </div>
               </div>
            </div>
            <div class="owl-nav">
               <div class="owl-prev"><i class="fas fa-angle-left"></i></div>
               <div class="owl-next"><i class="fas fa-angle-right"></i></div>
            </div>
         </div>
      </div>
      <!--- recent packagess -->
      <div class="container">
         <div class="row recP">
            <h1>recent pacakages</h1>
            <div class="row">
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/os3.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp2.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp1.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp2.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/b1.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp2.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp1.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
               <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="rp clearfix">
                     <img  class="packageBanner" src="img/rp2.jpg" alt="">
                     <h5>Cox's Bazar Student Package 2N3D</h5>
                     <i class="fas fa-map-marker-alt loc"></i>
                     <p><span>Cox's Bazar, Chittagong.</span></p>
                      <i class="loc duration"><img src="img/duration.png"></i>
                     <p><span>Duration: 30 days & 2 nights</span></p>
                     <div class="seller">
                        <h6><strong>seller: </strong>tour.com.bd</h6>
                        <div class="rating">
                           <ul>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                              <li><span class="fas fa-star checked"></span></li>
                           </ul>
                        </div>
                        <p>6 reviews</p>
                     </div>
                     <div class="from">
                        <p>From</p>
                        <h6>BDT <strong>3,000</strong><i>৳</i></h6>
                        <button>details</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
                                                                  <!--- recent Blogs -->
      <div class="container">
         <div class="row recB">
            <h1>recent Blogs</h1>
            <h6>Sharing travel experiences - one story at a time</h6>
            <div class="row">
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="rb clearfix">
                     <img class="rbImg" src="img/rp1.jpg" alt="">
                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                     <div class="wnd float-left clearfix">
                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                        <p>july 4, 2018</p>
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
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="rb clearfix">
                     <img class="rbImg" src="img/b1.jpg" alt="">
                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                     <div class="wnd float-left clearfix">
                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                        <p>july 4, 2018</p>
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
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="rb clearfix">
                     <img class="rbImg" src="img/slider1.jpg" alt="">
                     <h5>ঘুরে আসতে পারেন নাপিত্তাছড়া ঝর্ণা থেকে</h5>
                     <div class="wnd float-left clearfix">
                        <h6><a href="#">Shamima Akter Ritu</a></h6>
                        <p>july 4, 2018</p>
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
         <!--- end div row recP -->
      </div>
      <!--- end div container -->
      <!---GUIDE--->
      <div class="container-fluide guideBg">
         <div class="container">
            <div class="guide row">
               <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12   fg">
                  <h1>Find Guides</h1>
                  <ul class="g row">
                     <li class="col-xs-12 col-sm-4">
                        <div class="middleG">
                           <a href="#">
                              <img src="img/g1.jpg" alt="">
                              <div class="guideImgTag">
                                 <h6>name: <span>Shakil Ahmed Shahan</span></h6>
                                 <h6>age: <span>23</span></h6>
                                 <h6>location: <span>Dhaka, nator</span></h6>
                                 <h6>rating: </h6>
                                 <div class="rating">
                                    <ul>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                    </ul>
                                 </div>
                                 <!--- end div rating -->
                              </div>
                              <!--- end div guideImgTag -->
                           </a>
                        </div>
                        <!--- end div middleG -->
                     </li>
                     <li class="col-xs-12 col-sm-4">
                        <div class="middleG">
                           <a href="#">
                              <img src="img/g2.jpg" alt="">
                              <div class="guideImgTag">
                                 <h6>name: <span>Ashraf Uddinn Shahed</span></h6>
                                 <h6>age: <span>22</span></h6>
                                 <h6>location: <span>Dhaka, Barisal</span></h6>
                                 <h6>rating: </h6>
                                 <div class="rating">
                                    <ul>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                    </ul>
                                 </div>
                                 <!--- end div rating -->
                              </div>
                              <!--- end div guideImgTag -->
                           </a>
                        </div>
                        <!--- end div middleG -->
                     </li>
                     <li class="col-xs-12 col-sm-4">
                        <div class="middleG">
                           <a href="#">
                              <img src="img/g3.jpg" alt="">
                              <div class="guideImgTag">
                                 <h6>name: <span>MM hasan Ovi</span></h6>
                                 <h6>age: <span>22</span></h6>
                                 <h6>location: <span>Dhaka</span></h6>
                                 <h6>rating: </h6>
                                 <div class="rating">
                                    <ul>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                       <li><span class="fas fa-star checked"></span></li>
                                    </ul>
                                 </div>
                                 <!--- end div rating -->
                              </div>
                              <!--- end div guideImgTag -->
                           </a>
                        </div>
                        <!--- end div middleG -->
                     </li>
                  </ul>
                  <div class="ng">
                     <P>Need a local guide to make your tour easier, Hassle free & knowledgeable. Then find your guide</P>
                     <ul class="ourGuide">
                        <li><i class="far fa-hand-point-right"></i> from <span>270</span> guides</li>
                        <li><i class="far fa-hand-point-right"></i> for <span>120</span> locations</li>
                        <li><i class="far fa-hand-point-right"></i> with online communication</li>
                     </ul>
                  </div>
                  <!--- end div ng -->
                  <div class="gbtn clearfix">
                     <button>Find Guide</button>
                  </div>
               </div>
               <!--- end div col -->
               <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 jag">
                  <h1>Job as Guide</h1>
                  <div class="video-container">
                     <iframe  src="https://www.youtube.com/embed/-tvA50XvJNo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                  <ul>
                     <li><i class="far fa-hand-point-right"></i> Are you a new or experienced local guide?</li>
                     <li><i class="far fa-hand-point-right"></i> Are you passionate and knowledgeable about your region?</li>
                     <li><i class="far fa-hand-point-right"></i> Do you strive to show visitors your city’s unique and memorable places?</li>
                  </ul>
                  <P>If you answered yes to any of these questions, you may be a perfect fit for this job.If you have an idea for a great tour and want to become a tour guide we invite you to apply.</P>
                  <div class="gbtn clearfix">
                     <button>Apply</button>
                  </div>
               </div>
               <!--- end div col -->
            </div>
            <!--- end div guide -->
         </div>
         <!--- end div container -->
      </div>
      <!--- end div container fluide -->
      <!--- other services -->
      <div class="container">
         <div class="row otherServices">
            <h1>Our other Services</h1>
            <h6>make your travel easier & enjoyable</h6>
            <div class="row os">
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="osContent">
                     <a href="#">
                        <div class="osI"><img src="img/os1.jpg" alt=""></div>
                        <div class="caption">
                           <h3>Find & book the nearest hotel from your destination</h3>
                        </div>
                        <!--- end div caption -->
                     </a>
                  </div>
                  <!--- end div osContent -->
               </div>
               <!--- end div col -->
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="osContent">
                     <a href="#">
                        <img src="img/os2.jpg" alt="">
                        <div class="caption">
                           <h3>Find & book the nearest hotel from your destination</h3>
                        </div>
                        <!--- end div caption -->
                     </a>
                  </div>
                  <!--- end div osContent -->
               </div>
               <!--- end div col -->
               <div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="osContent">
                     <a href="#">
                        <img src="img/os3.jpg" alt="">
                        <div class="caption">
                           <h3>Find & book the nearest hotel from your destination</h3>
                        </div>
                        <!--- end div caption -->
                     </a>
                  </div>
                  <!--- end div osContent -->
               </div>
               <!--- end div col -->
            </div>
            <!--- end div os -->
         </div>
         <!--- end div other services -->
      </div>
      <!--- end div container -->
      <!--- Footer -->
      <?php include("template/footer.php") ?>
 
      <!--- end div container-fluide -->
      <script type="text/javascript">
         $('.carousel').carousel()
             
      </script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/myJs.js"></script>
   </body>
</html>