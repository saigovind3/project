<?php 
session_start();
error_reporting(0);
if(!isset($_SESSION['project_stream'])){
header('Location:index.php');
exit(0);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Discover</title>
        <link rel="stylesheet" href="css/home.css">
		<meta charset="utf-8">
        <meta name="viewport" content="width=device=width,initial-scale=1.0">
        <link rel="stylesheet" href="css/bar.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
         <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                $('#icon').click(function(){
              $('ul').toggleClass ('show');
                });
            });
        </script>

    </head>
    <body>
		<nav>
            <label class="logo">Mental Health</label>
            <ul>
				<li><a href="forgot.html">Contact</a></li>
                <li><a href="feedback.html">Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>
            <label id="icon">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
        <p><a href="mindfulness.html"><button type="submit">Mindfulness</button></a> </p> 
        <p><a href="mental.html"><button type="submit">Understanding Mental Disorder</button></a> </p>
        <p><a href="thinking.html"><button type="submit">Thinking</button> </a></p> 
        <p><a href="self.html"><button type="submit">Sleep</button></a> </p>   

    </body>

</html>