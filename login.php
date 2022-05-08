 <?php
 $uname =$_POST['Uname'];
 $Password =$_POST['Password'];
$error="";
$success="";
if(isset($_POST['submit'])){
    if($Uname=="admin"){
        $error="";
        $success="Welcom Admin";
    }
    else{
        $error="Invaild Password!!!";
        $success="";
    }
    else{
        $error="Invaild password!!!";
        $success="";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title >
            Login
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
      
      <div class="login-form">
     
        
          <form action="#" method="POST">
            
            <p style="color: black;">User Name</p>
            <input type="text"  name="Uname" placeholder="User Name"  required><br />
            <p style="color: black;">Password</p>
            <input type="password" name="Password" placeholder="Password" required><br />
            <a href="#"><button type="button" class="btn">Start </button></a>
          <a href="register.html"> <button type="button" class="btn">Login </button></a>
           <p style="color: black;"><a href="forgot.html"> Forgot Password</a></p>
          
          
        </div>
        </form>


    </body>
</html>
        








         
<p class="error"><?php echo $error;?></p> <p class="error"><?php echo $success;?></p>