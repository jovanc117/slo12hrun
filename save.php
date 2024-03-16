<?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$ime=$_POST['ime'];
		$priimek=$_POST['priimek'];
		$spol=$_POST['spol'];
		$starost=$_POST['starost'];
		$kraj=$_POST['kraj'];
		$naslov=$_POST['naslov'];
		$posta=$_POST['posta'];
		$drzava=$_POST['drzava'];
		$klub=$_POST['klub'];
		$majica=$_POST['majica'];
		$email=$_POST['email'];
		$tek=$_POST['tek'];
		$sql = "INSERT INTO `tekmovalci`( `ime`,`priimek`,`spol`,`starost`,`kraj`,`naslov`,`posta`,`drzava`,`klub`,`majica`,`email`,`tek`,`dolzina`) 
		VALUES ('$ime','$priimek','$spol','$starost','$kraj','$naslov','$posta','$drzava','$klub','$majica','$email','$tek','$dolzina')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$ime=$_POST['ime'];
		$priimek=$_POST['priimek'];
		$spol=$_POST['spol'];
		$starost=$_POST['starost'];
		$kraj=$_POST['kraj'];
		$naslov=$_POST['naslov'];
		$posta=$_POST['posta'];
		$drzava=$_POST['drzava'];
		$klub=$_POST['klub'];
		$majica=$_POST['majica'];
		$email=$_POST['email'];
		$tek=$_POST['tek'];
		$dolzina=$_POST['dolzina'];
		$sql = "UPDATE `tekmovalci` SET `ime`='$ime',`priimek`='$priimek',`spol`='$spol',`starost`='$starost',`kraj`='$kraj',`naslov`='$naslov',`posta`='$posta',`drzava`='$drzava',`klub`='$klub',`majica`='$majica',`email`='$email',`tek`='$tek',`dolzina`='$dolzina' WHERE `tid`=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `tekmovalci` WHERE `tid`=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM tekmovalci WHERE tid in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>