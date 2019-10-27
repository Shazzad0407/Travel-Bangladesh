<?php
session_start();
include("includes/connection.php");
if(!$con){
    echo "Database Connection ERROR!";
}
else{
    if(isset($_POST['bt']))
    {
        $fname=$_POST['fn'];
        $lname=$_POST['ln'];
        $email=$_POST['em']; 
        $pass=$_POST['pass']; 
        $cpass=$_POST['cpass'];
        $userType=$_POST['signUpAs'];
     //checking email address already exist or not
        $check_email="SELECT * 
                      FROM users
                      WHERE email='$email'";
        $check_email_query=mysqli_query($con,$check_email);
        $num_of_row=mysqli_num_rows($check_email_query);
        if($num_of_row==0)
        {
          if(strcmp($pass,$cpass)==0)
          {
              if($userType=="visitor")
              {
                  $user_info="INSERT INTO users (fName, lName, email, pass)
                          VALUES ('$fname', '$lname', '$email', '$pass')";
                  $user_insert=mysqli_query($con,$user_info);
              
                  if($user_insert==1){echo "Successfully registration";} 
              }
              else if($userType=="travel agency")
              {
                  $user_info="INSERT INTO packageowner (firstName, lastName ,emailAddress ,	pass )
                          VALUES ('$fname', '$lname', '$email', '$pass')";
                  $user_insert=mysqli_query($con,$user_info);
              
                  if($user_insert==1){echo "Successfully registration";} 
              }
               else if($userType=="hotel owner")
              {
                  $user_info="INSERT INTO hotelowner (firstName, lastName, emailAddress, pass )
                          VALUES ('$fname', '$lname', '$email', '$pass')";
                  $user_insert=mysqli_query($con,$user_info);
              
                  if($user_insert==1){echo "Successfully registration";} 
              }
               else if($userType=="restaurant owner")
              {
                  $user_info="INSERT INTO resowner (firstName, lastName, emailAddress, pass )
                          VALUES ('$fname', '$lname', '$email', '$pass')";
                  $user_insert=mysqli_query($con,$user_info);
              
                  if($user_insert==1){echo "Successfully registration";} 
              }
               else if($userType=="guide")
              {
                  $user_info="INSERT INTO guide (fName, lName, guideEmail, pass)
                          VALUES ('$fname', '$lname', '$email', '$pass')";
                  $user_insert=mysqli_query($con,$user_info);
              
                  if($user_insert==1){echo "Successfully registration";} 
              }
                 
                 
          } 
          else{ 
            
              echo "<script> document.getElementById('alert_message').innerHTML='<h5>password do not match! please try again</h5>';</script>"; 
          }    
        }
        else{ echo "Email already exist!";}
         
    }
    if(isset($_POST['l_bt']))
        {
              $email=$_POST['em']; 
              $pass=$_POST['pass'];
              $userType=$_POST['logInAs'];
                if($userType=="visitor"){
                    //check email valid or not and  pass correct or not
                  $check_email="SELECT * 
                      FROM users
                      WHERE email='$email'";
                    
                }
                else if($userType=="travel agency"){
                    //check email valid or not and  pass correct or not
                  $check_email="SELECT * 
                      FROM packageowner
                      WHERE emailAddress ='$email'";
                    
                }
                else if($userType=="hotel owner"){
                    //check email valid or not and  pass correct or not
                  $check_email="SELECT * 
                      FROM hotelowner
                      WHERE emailAddress ='$email'";
                    
                }
                 else if($userType=="restaurant owner"){
                    //check email valid or not and  pass correct or not
                  $check_email="SELECT * 
                      FROM resowner 
                      WHERE emailAddress ='$email'";
                    
                }
                 else if($userType=="guide"){
                    //check email valid or not and  pass correct or not
                  $check_email="SELECT * 
                      FROM guide
                      WHERE guideEmail ='$email'";
                    
                }
         
               $check_email_query=mysqli_query($con,$check_email);
               $num_of_row=mysqli_num_rows( $check_email_query);
                if($num_of_row==0)
                {
                    echo "email does not exist or invalid";
                }
                else
                {
                    $col=mysqli_fetch_assoc($check_email_query);
    
                    if($col['pass']==$pass)
                    {
                       $_SESSION['firstName']=$col['fName'];
                       $_SESSION['lasttName']=$col['lName'];
                       $_SESSION['Email']=$col['email'];
                        //After login going HOME PAGE
                        //<script type="text/javascript">window.location.href = 'home.php';</script>
                        header("location: index.php");
                    }
                    else
                    {
                        echo "password does not match";
                    }
                }
            
        }
    
}

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login, Register form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/reg.css">

  
</head>

<body>

  
  <div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">Login</a>
      <a href="#" id="signup-box-link">Sign Up</a>
    </div>
    <div class="social-login">
      <a href="#">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
      <a href="#">
        <i class="fa fa-google-plus fa-lg"></i>
        log in with Google
      </a>
    </div>
    <div id="alert_message">
    </div>
    <form class="email-login" method="post">
      <div class="u-form-group">
        <input type="email" placeholder="Email" name="em"/>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Password" name="pass"/>
      </div>
      
    
        <div class="form-group u-form-group" >
        <label for="sel1">log in as:</label>
          <select class="form-control" id="sel1" name="logInAs">
            <option>visitor</option>
            <option>travel agency</option>
            <option>hotel owner</option>
            <option>restaurant owner</option>
            <option>guide</option>
         </select>
        </div> 
      
      <div class="u-form-group">
        <button name="l_bt">Log in</button>
      </div>
      <div class="u-form-group">
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
    </form>
    <form class="email-signup" method="post">
      <div class="u-form-group">
        <input type="text" placeholder="First Name" name="fn" required/>
      </div>
      <div class="u-form-group">
        <input type="text" placeholder="Last Name" name="ln" required/>
      </div>
      <div class="u-form-group">
        <input type="email" placeholder="Email" name="em" required/>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Password" name="pass" required/>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Confirm Password" name="cpass" required/>
      </div>
      
      
      
     <div class="form-group u-form-group" >
        <label for="sel1">Sign up as:</label>
          <select class="form-control" id="sel1" name="signUpAs">
            <option>visitor</option>
            <option>travel agency</option>
            <option>hotel owner</option>
            <option>restaurant owner</option>
            <option>guide</option>
         </select>
    </div> 
      
      
      

      
      <div class="u-form-group">
        <button name="bt">Sign Up</button>
      </div>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
