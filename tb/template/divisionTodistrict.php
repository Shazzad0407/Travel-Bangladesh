<?php
//Include the database configuration file
 include("../includes/connection.php");
$a = $_POST['division_id'];

if(!empty($_POST['division_id'])){
    
    //Fetch all state data
    $query="SELECT district.districtName
            FROM division NATURAL JOIN district
            WHERE divisionName='$a'";
    $runQuery= mysqli_query($con,$query);
    
    //Count total number of rows
    while($row = mysqli_fetch_array($runQuery)){
        $disName= $row['districtName'];
        echo "<option value='$disName'>$disName</option>";
    }
    
}

?>