                     
               

$(document).ready(function(){
    
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
  //  autoplay: 1000,
    responsive:{
        0:{
            items:1
        },
         577:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
//owl carasoul 


var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.owl-prev').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
$('.owl-next').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});


    
});


// photo gallery
        var index;
        
        
        $('.galleryImg').click(function (event) {
                index=$(this).index()
                document.getElementById('kurbani').onclick = openPhotoSwipe;

            });
       
        var openPhotoSwipe = function(){
            var pswpElement = document.querySelectorAll('.pswp')[0];
            //build items array now
            var length= document.getElementsByClassName("galleryImg").length;
            
            var items=[];
            var i,j;
            console.log(index);
           
            for(i=index,j=0; j<length; j++,i++){
                
                var selectedImg= document.getElementsByClassName("galleryImg")[i].getAttribute('src') ;
                
                
                var img = document.getElementsByClassName("galleryImg")[i];
                    console.log("pre Width",img.naturalWidth);
                    console.log("pre Height",img.naturalHeight);
                    var width= img.naturalWidth ;
                    var height= img.naturalHeight ;
                    
                    console.log("post Width",width);
                    console.log("post Height",height);
                
                items[j]={
                    src: selectedImg,
                    w: width,
                    h:height
                }
                if(i == (length-1)){
                    i=-1;
                }
            }
            console.log(items);
            
            var options = {
                history: false,
                focus: false,
                showAnimationDuration: 0,
                hideAnimationDuration:0
            };
            var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };
        
 




//filter
function myFunction() {
  // Get the checkbox
    var n=document.getElementsByClassName("myCheck1").length;
    for(var i=0; i<n; i++){
        var checkBox = document.getElementsByClassName("myCheck1")[i];
         // Get the output text
          var text = document.getElementsByClassName("text")[i];

          // If the checkbox is checked, display the output text
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
            text.style.display = "none";
          }
    }
}





//filter header toggole for small resoulation

    jQuery(document).ready(function(){
        
        
        if ( $(window).width() < 768) {
        
            jQuery('.filterHead').on('click', function(event) {
                        event.preventDefault();
                 jQuery(this).next('.filterOption').toggle('slide');
                console.log("filter toggol working");
            });
        }
    });
    
    
    

                         


 //sort item identity


$(document).ready(function(){
        $('.ltho').on('click', function(event) {
        			event.preventDefault();
             $(".htl").css("display", "none");
            $(".lth").css("display", "block");
        });
    });


$(document).ready(function(){
        $('.htlo').on('click', function(event) {
        			event.preventDefault();
             $(".htl").css("display", "block");
            $(".lth").css("display", "none");
        });
    });




//textarea send new lines and spaces
function addNewLines(){
    text = document.getElementById('userField').value;
    text = text.replace(/  /g, "[sp][sp]");
    text = text.replace(/\n/g, "[nl]");
    document.getElementById('Msg').value = text;
    return false;
}



// for google map
function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: {lat: -34.397, lng: 150.644}
            });
            var geocoder = new google.maps.Geocoder();

              geocodeAddress(geocoder, map);
          }

          function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
              console.log(address);
            geocoder.geocode({'address': address}, function(results, status) {
              if (status === 'OK') {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                });
              } else {
                alert('Geocode was not successful for the following reason: ' + status);
              }
            });
          }





          
                         
                         
                         
                         
                         