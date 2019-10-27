
 <?php
        include("includes/connection.php");

?>
        <div class="row">
        <div class="col headingOfForm">
            <h1>UPDATE/DELETE PLACE </h1>
        </div>
    </div>
    <div class="row updateBody" style="min-height: 500px; ">
     
    <form method="post" id="multiple_select" style="width:100%;" action="" enctype="multipart/form-data" data-ajax="false">  
         <div class="form-group selPlace">
              <label for="exampleFormControlSelect2">select the place which you want to update/delete</label>
                <select name="uPlace" id="uPlace" class="form-control selectpicker" data-live-search="true" onchange="getval2(this);" title="select a place">
                   
                  <?php
                    $PlaceQuery= "SELECT placeName, placeId 
                                     FROM place 
                                     WHERE place.email ='11152018' || place.adminId='11152018'";
                    $runPlaceQuery = mysqli_query($con,$PlaceQuery);
                    while($row = mysqli_fetch_array($runPlaceQuery)){
                                    $placeName= $row['placeName'];
                                    $placeId= $row['placeId'];
                                    echo "<option value='$placeId'>$placeName</option>";
                    }
                  ?>
                </select>
                <input type="hidden" id="currentPlaceId" value='' name="currentPlaceId"/>
         </div>
         
         
         <div id="updatePage"> 
         
         
         </div>
         
         
         
         
         <div class="form-row">
             <div class="form-group col-md-6">
                 <input type="submit" name="update" id="sub" class="btn btn-info addpl" value="UPDATE" style="width: 100%;"/>  
            </div>
            <div class="form-group col-md-6">
                 <input type="submit" name="delete" id="sub2" class="btn btn-info  btn-danger addpl" value="DELETE" style="width: 100%;" onclick="return confirm('Are you sure you want to delete?')"/>  
            </div>
        </div>
         
    </form>
</div>

    
      
      <?php
    if(isset($_POST["update"])){
            $updatePlaceId= $_POST["uPlace"];
        
         $pName= $_POST['placeName'];
         $districtName= $_POST['district'];
         $latitude= $_POST['latitude'];
         $longitude= $_POST['longitude'];
         $description= $_POST['description'];
         $address= $_POST['placeAddress'];
         $zip= $_POST['zip'];
         $offDay= $_POST['offDay'];
         $website= $_POST['website'];
         $divisionName= $_POST['division'];
        
        
        //make the cover pic path name
        $placeCoverPic= $_POST['placeCoverImg'];
        
        $coverpic = $_FILES['coverpic']['name'];
        $flag=0;
        if($coverpic != null){
            $size = $_FILES['coverpic']['size'];
            $tempName  = $_FILES['coverpic']['tmp_name'];

            $fileExtention = explode('.', $coverpic);
            $extention = strtolower(end($fileExtention));

            $finalFile = uniqid().'.'.$extention;

            $clocation = 'img/places/'.$finalFile;
            
            $updatePlace="UPDATE place SET placeName='$pName',latitude='$latitude',longitude='$longitude',districtName='$districtName',description='$description',address='$address',zip='$zip',offDay='$offDay',website='$website',placeCoverPic='$clocation' WHERE placeId='$updatePlaceId'";
            
            $flag=1;
        }
        else{
            $updatePlace="UPDATE place SET placeName='$pName',latitude='$latitude',longitude='$longitude',districtName='$districtName',description='$description',address='$address',zip='$zip',offDay='$offDay',website='$website' WHERE placeId='$updatePlaceId'";
            
            $flag=0;
        }
        
        
        
        
        $runUpdate = mysqli_query($con,$updatePlace);
        if($runUpdate){
            //insert the cover pic to the img/places folder
            if($flag==1){
                move_uploaded_file($tempName, $clocation);
                unlink($placeCoverPic);
            }
            
            //update thewhat to do for place
            $del="DELETE FROM whattodo WHERE whattodo.placeId=$updatePlaceId";
            $runAllDel = mysqli_query($con,$del);
        
            for($i=0; $i< count($_POST["name"]); $i++){
                $a= $_POST["name"][$i];
                if ($a!=null){
                    $up ="INSERT INTO whattodo(description, placeId) VALUES ('$a','$updatePlaceId')";
                    $runAllUp = mysqli_query($con,$up);
                }

            }    
//update the place gellery
        /*update the photo gellary for place
            $delfromFolder ="SELECT * FROM placegellary WHERE placeId=$updatePlaceId";
            $rundelfromFolder = mysqli_query($con,$delfromFolder);
            while($row = mysqli_fetch_array($rundelfromFolder)){
                 $path= $row['path'];
                 unlink($path);
            }*/
        
           $del="DELETE FROM placegellary WHERE placegellary.placeId=$updatePlaceId";
            $runAllDel = mysqli_query($con,$del);
            
        

        for($i=0; $i< count($_POST["imgAddress"]); $i++){
                $a= $_POST["imgAddress"][$i];
                if ($a!=null){
                    $up ="INSERT INTO placegellary(path, placeId) VALUES ('$a','$updatePlaceId')";
                    $runAllUp = mysqli_query($con,$up);
                }

         }    
        //checking is there any image selected or not
        $flagPost=0;
        if(!empty($_FILES['postImage'])){
            if(is_uploaded_file($_FILES['postImage']['tmp_name'][0])) {
                $flagPost = 1;
            }else $flagPost = 0;
        }
        
        // upload images
          if($flagPost==1){
              for($x=0; $x<count($_FILES['postImage']['tmp_name']); $x++ ) {

                    $name = $_FILES['postImage']['name'][$x];
                    $size = $_FILES['postImage']['size'][$x];
                    $tempName  = $_FILES['postImage']['tmp_name'][$x];

                    $fileExtention = explode('.', $name);
                    $extention = strtolower(end($fileExtention));

                    $finalFile = uniqid().'.'.$extention;

                    $location = 'img/places/'.$finalFile;

                    //insert image into post_picture
                    $insertQurey = "INSERT INTO placegellary(path, placeId) VALUES ('$location','$updatePlaceId')";

                     $runInsertQuery = mysqli_query($con,$insertQurey);
                     if($runInsertQuery){
                        move_uploaded_file($tempName, $location);
                     }else echo"unsucessfull";
                } // endfor
            } 
        
        
        
            echo"<script>alert('Place update successfully');
                </script>";
            
            
        }
        else{
            echo"<script>alert('Place update fail, try again');
                </script>";
        }
        
        
        
             
        
        
    }




    if(isset($_POST["delete"])){
        
        
        $updatePlaceId= $_POST["uPlace"];
//whattodo
$whattodo="DELETE FROM whattodo WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$whattodo);
        
//placecat
$placecat="DELETE FROM placecat WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$placecat);
        
//place gallery
$gallery= "DELETE FROM placegellary WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$gallery);
        
//packageofferplaces
$packageofferplaces="DELETE FROM packageofferplaces WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$packageofferplaces);

//aboutblogplace
$aboutblogplace="DELETE FROM aboutblogplace WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$aboutblogplace);

//give place review
$givePlaceReview="DELETE FROM giveplacereview WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$givePlaceReview);

//guideofferplace
$guideofferplace="DELETE FROM guideofferplace WHERE placeId='$updatePlaceId'";
$runAllDel = mysqli_query($con,$guideofferplace);

//place
$place="DELETE FROM place WHERE placeId='$updatePlaceId'";
    $runAllDel = mysqli_query($con,$place);

if($runAllDel){
    echo"<script>alert('successfully removed');
            </script>";
}
    
}
?>
     


<script>
    function getval2(place){
            var placeID =place.value;
            document.getElementById('currentPlaceId').value = placeID;
            console.log(placeID);
            document.getElementById("sub").style.display = "block";
            document.getElementById("sub2").style.display = "block";
            if(placeID==""){
                
                return;
            }
        $.ajax({
                type:'POST',
                url:'template/placeUpdate.php',
                data:'place_id='+placeID,
                success:function(html){
                    $('#updatePage').html(html);
                }
            }); 
        }
  </script>

<script>
    /*
  $('form').on('submit',function(e) {
      e.preventDefault();
      $.post( 'path/to/script', $('form').serialize(), function( data ) {
           alert( data ); 
      } );
});  */
</script>
    