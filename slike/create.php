<?php

$host         = "localhost";
$username     = "pariza57_slo12";
$password     = "r!4Zd4rnwF4U";
$dbname       = "pariza57_slo12run";
$result = 0;

/* Create connection */
$conn = new mysqli($host, $username, $password, $dbname);
/* Check connection */
if ($conn->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}

/* Get data from Client side using $_POST array */

$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$spol = $_POST["spol"];
$starost = $_POST["starost"];
$kraj = $_POST["kraj"];
$naslov = $_POST["naslov"];
$posta = $_POST["posta"];
$drzava = $_POST["drzava"];
$klub = $_POST["klub"];
$majica = $_POST["majica"];
$email = $_POST["email"];
$tek = $_POST["tek"];


/* validate whether user has entered all values. */
if(!$ime || !$priimek || !$spol || !$starost || !$kraj || !$naslov || !$posta || !$drzava || !$klub || !$majica || !$email || !$tek){
  $result = 2;
}elseif (!strpos($email, "@") || !strpos($email, ".")) {
  $result = 3;
}
else {
   //SQL query to get results from database
   $sql    = "insert into tekmovalci (ime, priimek, spol, starost, kraj, naslov, posta, drzava, klub, majica, email, tek) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)  ";
   $stmt   = $conn->prepare($sql);
   $stmt->bind_param('ssssssssssss', $ime, $priimek, $spol, $starost, $kraj, $naslov, $posta, $drzava, $klub, $majica, $email, $tek);
   if($stmt->execute()){
     $result = 1;
   }
}
echo $result;
$conn->close();

?>