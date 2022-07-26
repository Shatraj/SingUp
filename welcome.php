<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="welcome.css">

    <title>Welcome</title>
</head>
<body>
<div class="topnav">
        <a class="active" href="Home.html"> Home</a>
        <a href="Make-up.html"> Make-up</a>
        <a href="hair.html"> Hair</a>
        <a href="about.html"> About</a>
      </div>


      <div class="main-content">
        <div class="wrapper text-center">
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

    <div class="san">

    

<br/>
<br/>

<div class="san1">
    
    <a href="home.html">
<button id="myBtn" class="btn">Home</button> </a>
<br/><br/>
</div>
<div class="san2">
<a href="logout.php">
<button id="myBtn" class="btn">Log Out</Out></button></a>
</div>
</div>

</div>
</div>
    
</body>
</html>