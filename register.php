<!DOCTYPE html>
<html>

<head>
  <title>
    Register
  </title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<?php
include('./connect.php');
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $mobile = mysqli_real_escape_string($connect, $_POST['phone']);
  $epass = md5($password);
  if ($username != '' && $password != '' && $email != '' && $mobile != '') {
    $rr = mysqli_query($connect, "SELECT * FROM users where username='$username'");
    $cc = mysqli_num_rows($rr);
    if ($cc > 0) {
      echo "<script>alert('already registered')</script>";
    } else {
      $r =  mysqli_query($connect, "INSERT INTO users (username,password,email,mobile) values ('$username','$epass','$email','$mobile')");
      if ($r == true) {
        echo "<script>alert('Registered Succesfully');window.location='login.php'</script>";
      } else {
        echo "<script>alert('Something went wrong try again')</script>";
      }
    }
  } else {
    echo "<script>alert('all fields required')</script>";
  }
}
?>

<body>
  <div class="login-form">
    <h1 style="color: black;">Register Form</h1>
    <form action="?" method="POST">
      <p style="color: black;">User Name</p>
      <input type="text" name="username" placeholder="User Name" required>

      <p style="color: black;">E-mail</p>
      <input type="email" name="email" placeholder="Enter Your E-mail" required>
      <p style="color: black;">Password</p>
      <input type="password" name="password" placeholder="Password" required>

      <p style="color: black;">Phone Number</p>

      <input type="phone" name="phone" placeholder="Enter your number" required maxlength="10" minlength="10">
      <button type="submit" name="submit">Register</button>
      <a href="index.php" class="btn-login">login</a>
    </form>
  </div>

</body>

</html>