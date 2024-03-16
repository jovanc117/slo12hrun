<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Urejevalnik</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        table { text-align: left;}
        div { margin: 0 auto;}
    </style>
</head>
<body>
    <div class="page-header">
        <h2>Urejane rezultatov tekmovanja</h2>
    </div>
    <?php 
        include 'seznamu.php';
        include 'rezultati.php';
        ?>
    <p>
    <?php
    if($_SESSION["username"]==="urednik"){
    echo '<a href="ex.php" class="btn btn-success">Izvozi podatke</a>
    <a href="register.php" class="btn btn-primary">Dodaj osebo</a>
    <a href="reset-password.php" class="btn btn-warning">Spremeni geslo</a>
    <a href="logout.php" class="btn btn-danger">Odjava iz računa</a>';}
    else{
        echo '<a href="reset-password.php" class="btn btn-warning">Spremeni geslo</a>
        <a href="logout.php" class="btn btn-danger">Odjava iz računa</a>';}
    ?>
    </p>
    <h5 style="text-align: center">Prijavljeni ste kot: <?php echo htmlspecialchars($_SESSION["username"]); ?>.</h5>
</body>
</html
