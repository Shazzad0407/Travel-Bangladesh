 <?php
        include("includes/connection.php");

?>
    <div class="row">
        <div class="col headingOfForm">
            <h1>Fill Up The Form </h1>
        </div>
    </div>
     

    
    
     <form method="post" id="multiple_select_form" enctype="multipart/form-data">
        
        
         
         
         
      <div class="form-group">
        <label for="exampleFormControlInput1">Place Name<strong>*</strong></label>
        <input type="text" class="form-control" id="placeName" placeholder="place name" name="placeName" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Place Address<strong>*</strong></label>
        <input type="text" class="form-control" id="placeAddress" name="placeAddress" placeholder="place address">
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="exampleFormControlSelect1">Division<strong>*</strong></label>
            <select class="form-control" id="division" name="division" onchange="getval(this);" required>
             <option disable hidden value="">select the place division</option>
              <?php
                    $allDivisionQuery= "SELECT divisionName
                                             FROM division";
                    $runAllDivisionQuery = mysqli_query($con,$allDivisionQuery);
                    while($row = mysqli_fetch_array($runAllDivisionQuery)){
                                    $dName= $row['divisionName'];
                                    echo "<option value='$dName'>$dName</option>";
                    }
            ?>
            </select>
        </div>
        <div class="form-group col-md-5">
         <label for="exampleFormControlSelect1" required>District<strong>*</strong></label>
            <select id="district" class="form-control"  name="district" required>
                
            </select>
        </div>
         <div class="form-group col-md-2">
         <label for="exampleFormControlSelect1">zip</label>
          <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">latitude</label>
          <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude">
        </div>
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">longitude</label>
          <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude">
        </div>
      </div>
      
       <div class="form-row">
          <div class="form-group col-md-6" id="mulCat">
              <label for="exampleFormControlSelect1">Catagory</label>
                <select name="catagory[]" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
                    
                  <?php
                    $allCatagoryQuery= "SELECT* FROM catagory";
                    $runAllCatagoryQuery = mysqli_query($con,$allCatagoryQuery);
                    
                    while($row = mysqli_fetch_array($runAllCatagoryQuery)){
                                    $catId= $row['catId'];
                                    $catName= $row['catName'];
                                    echo "<option value='$catId'>$catName</option>";
                    }
                  ?>
                    <option disable hidden value="others" selected></option>
                </select>
                
                
          </div>
           <div class="col-md-6">
            <div class="form-group">
                <label>Upload Cover Image</label>
                <div class="input-group" style="">
                   <input type="text" class="form-control imgShow" readonly>
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" accept="image/*" name="coverpic" required>
                        </span>
                    </span>

                </div>
                <img id='img-upload'/>
            </div>
        </div>
          
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description"></textarea>
      </div>
      
      <div class="form-group"> 
          <div class="wtd table-responsive"> 
              <label for="exampleFormControlTextarea1">What To Do</label> 
               <table class="table table-bordered " id="dynamic_field">  
                    <tr>  
                         <td class="col-md-12"><input type="text" name="name[]" placeholder="add activity of the place" class="form-control name_list" /></td>  
                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
               </table>  
               
          </div>
     </div> 
      
      
       
     
        
      <div class="form-row">
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">off day</label>
          <select class="form-control" id="exampleFormControlSelect1" name="offDay">
                <option disable hidden value="">Select weekly off day</option>
                <option value=''>Saturday</option>
                <option value=''>Sunday</option>
                <option value=''>Monday</option>
                <option value=''>Tuesday</option>
                <option value=''>Wednesday</option>
                <option value=''>Thursday</option>
                <option value=''>Friday</option>
          </select>
        </div>
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">website</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="website for the place(if has)" name="website">
        </div>
      </div>
      
      <div class="form-row">
          <div id="image-preview"></div>
          
           <div class="form-group col-md-6"> 
                  <span class="btn btn-primary btn-file  btn-danger" style="width: 100%; border-bottom-left-radius: 5px; border-top-left-radius: 5px;border: none;">
                    <input type="file" name="postImage[]" id="file" class="" accept="image/*" multiple onchange="imagePreview(this)" style="width: 0;height: 0;">
                      Select Images for the place gellary
                  </span>
            </div>  
            <div class="form-group col-md-6">
                <input type="submit" name="submit" id="submit" class="btn btn-info addplacebtn" value="Submit" style="width: 100%;" /><br>
               <!-- <button id = "formsubmit" class="btn btn-info addplacebtn " style="width: 100%;">my submit</button>  -->
            </div>
      </div> 
        
</form>


<?php
    if(isset($_POST["submit"])){
        $adminId= '11152018';
        $userId='';
        $placeName= $_POST["placeName"];
        $placeAddress= $_POST["placeAddress"];
        $division= $_POST["division"];
        $district= $_POST["district"];
        $zip= $_POST["zip"];
        $latitude= $_POST["latitude"];
        $longitude= $_POST["longitude"];
        $description= $_POST["description"];
        $name= $_POST["name"];
        $offDay= $_POST["offDay"];
        $website= $_POST["website"];
        $verify='1';
        
        //make a random place Id
                $a1 = rand(65,90);  //A-Z
                $a2 = rand(97,122); //a-z
                $a3 = rand(2345,7899);
                $a4 = rand(0, 30900);
                $a5 = rand(33,126);
                $date = date("d-m-y");
                $time = time("h:i:s");

                $c1 = chr($a1);
                $c2 = chr($a2);
                $c3 = chr($a5);

                $placeId= $date.$time.$c1.$a3.$c3.$a4.$c2.$a5;
        
        //make the cover pic path name
                    $coverpic = $_FILES['coverpic']['name'];
                    $size = $_FILES['coverpic']['size'];
                    $tempName  = $_FILES['coverpic']['tmp_name'];

                    $fileExtention = explode('.', $coverpic);
                    $extention = strtolower(end($fileExtention));

                    $finalFile = uniqid().'.'.$extention;

                    $clocation = 'img/places/'.$finalFile;
        
        
        
        
        //insert parent values for a place inthe database
        
        if($adminId!='null'){
            $placeInsert= "INSERT INTO place
        (placeId, placeName, latitude, longitude, districtName, description, address, zip, offDay, website, adminId, addingDate, verified, placeCoverPic) 
        VALUES ('$placeId','$placeName','$latitude','$longitude','$district','$description','$placeAddress','$zip','$offDay','$website','$adminId',NOW(),'1','$clocation')";
        }
        else {
            $placeInsert= "INSERT INTO place
        (placeId, placeName, latitude, longitude, districtName, description, address, zip, offDay, website, email, addingDate, verified, placeCoverPic) 
        VALUES ('$placeId','$placeName','$latitude','$longitude','$district','$description','$placeAddress','$zip','$offDay','$website','$userId',NOW(),'$verify','$clocation')";
        }
        
        
        
        
        $runAllUp = mysqli_query($con,$placeInsert);
        
        if($runAllUp){
            //insert the cover pic to the img/places folder
            move_uploaded_file($tempName, $clocation);
            
            
            //insert what to do for a place into database
    
            for($i=0; $i< count($_POST["name"]); $i++){
                    $a= $_POST["name"][$i];
                    if ($a!=null){
                        $up ="INSERT INTO whattodo(description, placeId) VALUES ('$a','$placeId')";
                        $runAllUp2 = mysqli_query($con,$up);
                    }

            }
            //insert place catagory for a place into database
            
            for($i=0; $i< count($_POST["catagory"]); $i++){
                $b= $_POST['catagory'][$i];
                $up ="INSERT INTO placecat(placeId, catId) VALUES('$placeId','$b')";
                $runAllUp3 = mysqli_query($con,$up);

            }
            //inser photo gellery
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
                            $insertQurey = "INSERT INTO placegellary(path, placeId) VALUES ('$location','$placeId')";

                             $runInsertQuery = mysqli_query($con,$insertQurey);
                            echo"saki";
                             if($runInsertQuery){
                                move_uploaded_file($tempName, $location);
                             }else echo"unsucessfull";
                        } // endfor
                    } 

            
            
            if($runAllUp){
                echo"<script>alert('Place add sucesfully');
                </script>";
            }
        }
        else{
            echo"<script>alert('Unsuccessfull Attempt,try again');
            </script>";
            
        } 
}


?>



<script>
    function getval(sel){
            var divisionID =sel.value;
            console.log(divisionID);
            if(divisionID==""){
                
                return;
            }
        $.ajax({
                type:'POST',
                url:'template/divisionTodistrict.php',
                data:'division_id='+divisionID,
                success:function(html){
                    $('#district').html(html);
                }
            }); 
        }
  </script>
  
 
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="add activity of the place" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
 });  
 </script>


<script>
    
   //show upload photo for post
window.imagePreview = function (t) {
    if (t.files && t.files[0]) {
        for (var i = 0; t.files.length > i; i++) {
            var reader = new FileReader();
            reader.onload = function (e) { 
                var thumbnail = '<div>';
                    thumbnail += '<img class="image" src="' + e.target.result + '"/>';
                    thumbnail += '<button class="removeButton"><i class="fas fa-times-circle cross"></i></button>';
                    thumbnail += '</div>';
                $("#image-preview").css("display","block");
                $('#image-preview').append(thumbnail); 
                
                $(".removeButton").on("click", function(){
                   $(this).closest('div').remove();
                   document.getElementById("file").value = "";
                });
                
            };
            reader.readAsDataURL(t.files[i]);
        }
    }
}

 
</script>



<script>
    
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
        
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
               
		    } else {
		        if( log ) ;
                
                
		    };
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
                
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
            
		}); 	
	});
    
    </script>