<?php
include ("dbConnect.php");
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title> Admin </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
<div id ="logo">
    <a href="index.php"><img src="images/fi-logo.png" alt="Demo" width="200"></a>
</div>
</header>

<body>

<div class="login-page">
    <div class="form">
        <form method="post" action="login.php" >
            <label>USERNAME </label> <input type="text" name="username" placeholder="username" required />

            <br>
            <br>
            <label>PASSWORD </label> <input type="password" name="password" placeholder="password"  />

            <br>
            <br>
            <div class="submit">
             <button>    <input type="submit" name="submit" value = "login"/></button>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>

