
    <?php
        include("../includes/connection.php");
    $placeId = $_POST['place_id'];

if(!empty($_POST['place_id'])){
    
    //Fetch all state data
    $query="SELECT * 
            FROM place NATURAL JOIN district
            WHERE placeId = '$placeId'";  
    $runQuery= mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($runQuery);
        

        $pName= $row['placeName'];
        $districtName= $row['districtName'];
        $latitude= $row['latitude'];
        $longitude= $row['longitude'];
        $description= $row['description'];
        $address= $row['address'];
        $zip= $row['zip'];
        $offDay= $row['offDay'];
        $website= $row['website'];
        $placeCoverPic= $row['placeCoverPic'];
        $divisionName= $row['divisionName'];
    
    }
    


        
?>    
      
           <div class="form-group">
        <label for="exampleFormControlInput1">Place Name<strong>*</strong></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="place name" name="placeName" value="<?php echo $pName;?>" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Place Address<strong>*</strong></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="place address" name="placeAddress" value="<?php echo $address;?>">
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="exampleFormControlSelect1">Division<strong>*</strong></label>
            <select class="form-control" id="division2 exampleFormControlSelect1" name="division" onchange="getval(this);" required>
             <option disable hidden value="">select the place division</option>
              <?php
                    $allDivisionQuery= "SELECT divisionName
                                             FROM division";
                    $runAllDivisionQuery = mysqli_query($con,$allDivisionQuery);
                    while($row = mysqli_fetch_array($runAllDivisionQuery)){
                                    $dName= $row['divisionName'];
                                    if ($dName==$divisionName){echo "<option value='$dName'  selected='selected'>$dName</option>"; }
                                    else{echo "<option value='$dName'>$dName</option>"; }
                                    
                    }
            ?>
            </select>
        </div>
        <div class="form-group col-md-5">
         <label for="exampleFormControlSelect1" required>District<strong>*</strong></label>
            <select id="district2" class="form-control" id="exampleFormControlSelect1" name="district">
                <option disable hidden value="">Select District</option>
                <?php
                     $query="SELECT district.districtName
                            FROM division NATURAL JOIN district
                            WHERE divisionName='$divisionName'";
                    $runQuery= mysqli_query($con,$query);

                    //Count total number of rows
                    while($row = mysqli_fetch_array($runQuery)){
                        $disName= $row['districtName'];
                        if ($disName==$districtName){echo "<option value='$disName'  selected='selected'>$disName</option>"; }
                                    else{echo "<option value='$disName'>$disName</option>"; }
                    }
                        
                    
                ?>
                
                                    
            </select>
        </div>
         <div class="form-group col-md-2">
         <label for="exampleFormControlSelect1">zip</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="Zip" name="zip" value="<?php echo $zip;?>" >
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">latitude</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="latitude" name="latitude" value="<?php echo $latitude;?>" >
        </div>
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">longitude</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="longitude" name="longitude" value="<?php echo $longitude;?>" >
        </div>
      </div>
      
 
           
        <div class="form-row">
              <div class="form-group col-md-7" style="margin-bottom: 0;padding: 0 6px;">
                   <div id="image-preview2">
                     <input type='hidden' name='imgAddress[]' value=''/>
                      <?php
                            $placeGelleryQuery= "SELECT path FROM placegellary WHERE placeId ='$placeId'";
                            $runPlaceGelleryQuery = mysqli_query($con,$placeGelleryQuery);
                            while($row = mysqli_fetch_array($runPlaceGelleryQuery)){
                                $imgPath = $row['path'];
                                echo"<div>
                                       <img class='image' src='$imgPath'/>
                                       <input type='hidden' name='imgAddress[]' value='$imgPath' />
                                       <button class='removeButton'><i class='fas fa-times-circle cross'></i></button> 
                                    </div>";
                            }
                            
                       ?> 
                  </div> 
              </div>
              
              <div class="col-md-5" style=" padding-top: 0px; margin-top:-7px;">
            <div class="form-group">
                <label>Upload Cover Image</label>
                <div class="input-group" style="">
                   <input type="text" class="form-control imgShow" readonly>
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file2">
                            Browse… <input type="file" id="imgInp2" name="coverpic" value="<?php echo $placeCoverPic; ?>" accept="image/*">
                            <input type="hidden" name="placeCoverImg" value="<?php echo $placeCoverPic; ?>">
                        </span>
                    </span>

                </div>
                <img id='img-upload2' src='<?php echo $placeCoverPic; ?>'/>
                
            </div>
        </div>
              
               <div class="form-group col-md-3"> 
                      <span class="btn btn-primary btn-file  btn-danger" style="width: 100%; border-bottom-left-radius: 5px; border-top-left-radius: 5px;border: none;">
                        <input type="file" name="postImage[]" id="file2" class="" accept="image/*" multiple onchange="imagePreview2(this)" style="width: 0;height: 0;">
                          update gellary
                      </span>
                </div>  
             
          
          
           
          
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description"><?php echo $description; ?></textarea>
      </div>
      
      <div class="form-group"> 
          <div class="wtd table-responsive"> 
              <label for="exampleFormControlTextarea1">What To Do</label> 
               <table class="table table-bordered " id="dynamic_field2">
                   <tr>
                        <td class="col-md-12"><input type="text" name="name[]" placeholder="add activity of the place" class="form-control name_list" /></td>    
                         <td><button type="button" name="add" id="add2" class="btn btn-success" >Add More</button></td>  
                    </tr>   
                    <?php
                            $allWtd= "SELECT description  FROM whattodo WHERE placeId='$placeId'";
                            $runAllWtd = mysqli_query($con,$allWtd);
                            $i=0;
                            while($row = mysqli_fetch_array($runAllWtd)){
                                $wtdDes= $row['description'];
                                $i++;
                                $id="row2".$i;
                                
                                echo"<tr id='$id'>
                                        <td>
                                            <input type='text' name='name[]' placeholder='add activity of the place' class='form-control name_list' value='$wtdDes' />
                                        </td>
                                        <td>
                                            <button type='button' name='remove' id='$i' class='btn btn-danger btn_remove2'>X</button>
                                        </td>
                                        
                                    </tr>";
                                
                                
                            }
                             $i++;
                             echo"<input type='hidden' id='valueOfI' value='$i'>";
                            
                    ?>
                     
               </table>  
              
          </div>
     </div> 
       

        
        
      <div class="form-row">
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">off day</label>
          <select class="form-control" id="exampleFormControlSelect1" name="offDay">
                <option disable hidden value="">Select weekly off day</option>
                <option <?php if($offDay=='Saturday') echo"selected='selected'"?> value=''>Saturday</option>
                <option <?php if($offDay=='Sunday') echo"selected='selected'"?> value=''>Sunday</option>
                <option <?php if($offDay=='Monday') echo"selected='selected'"?> value=''>Monday</option>
                <option <?php if($offDay=='Tuesday') echo"selected='selected'"?> value=''>Tuesday</option>
                <option <?php if($offDay=='Wednesday') echo"selected='selected'"?> value=''>Wednesday</option>
                <option <?php if($offDay=='Thursday') echo"selected='selected'"?> value=''>Thursday</option>
                <option <?php if($offDay=='Friday') echo"selected='selected'"?> value=''>Friday</option>
          </select>
        </div>
        <div class="form-group col-md-6">
         <label for="exampleFormControlSelect1">website</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="website for the place(if has)" name="website" value="<?php echo $website;?>" >
        </div>
      </div>
      
      
          
    
      
      
  
<script>
   //show upload photo for post
window.imagePreview2 = function (t) {
    if (t.files && t.files[0]) {
        for (var i = 0; t.files.length > i; i++) {
            var reader = new FileReader();
            reader.onload = function (e) { 
                var thumbnail = '<div>';
                    thumbnail += '<img class="image" src="' + e.target.result + '"/>';
                    thumbnail += '<button class="removeButton"><i class="fas fa-times-circle cross"></i></button>';
                    thumbnail += '</div>';
                $('#image-preview2').append(thumbnail); 
                
                $(".removeButton").on("click", function(){
                   $(this).closest('div').remove();
                   document.getElementById("file2").value = "";
                    
                    
                });
                
            };
            reader.readAsDataURL(t.files[i]);
        }
    }
}


$(".removeButton").on("click", function(){
                   $(this).closest('div').remove();
                   document.getElementById("file2").value = "";
                    
                    
                });
 
</script>

                    
                 
 <script>  
 $(document).ready(function(){  
  var i; 
    i= document.getElementById('valueOfI').value;
     console.log(i);
  $('#add2').click(function(){  
       i++;  
       $('#dynamic_field2').append('<tr id="row2'+i+'"><td><input type="text" name="name[]" placeholder="add activity of the place" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2">X</button></td></tr>');  
  });  
  $(document).on('click', '.btn_remove2', function(){  
       var button_id = $(this).attr("id");   
       $('#row2'+button_id+'').remove();  
  });  
 });  
 </script>
      
      


   
   
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
                    $('#district2').html(html);
                }
            }); 
        }
  </script>
  
  
 <script>
    
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
        
		});

		$('.btn-file2 :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
               
		    } else {
		        if( log );
                
                
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload2').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
                
		    }
		}

		$("#imgInp2").change(function(){
		    readURL(this);
            
		}); 	
	});
    
    </script>
