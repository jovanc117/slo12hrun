<?php
//https://www.studentstutorial.com/ajax/crud
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="sl">
<head>
	<!--<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>-->
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Rezultati 12 urnega tekmovanja</h2>
					</div>
					<div class="col-sm-6">
					</div>
                </div>
			</div>
			<div style="overflow-x:auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Mesto</th>
                        <th>Ime</th>
                        <th>Priimek</th>
						<th>Spol</th>
						<th>Država</th>
						<th>Klub</th>
						<th>Tek</th>
						<th>Rezultat</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM `tekmovalci` WHERE `tek`='12 ur' ORDER BY `dolzina` DESC");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["tid"]; ?>">
					
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ime"]; ?></td>
					<td><?php echo $row["priimek"]; ?></td>
					<td><?php echo $row["spol"]; ?></td>
					<td><?php echo $row["drzava"]; ?></td>
					<td><?php echo $row["klub"]; ?></td>
					<td><?php echo $row["tek"]; ?></td>
					<td><?php echo $row["dolzina"]; ?></td>
					
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			</div>
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Rezultati 6 urnega tekmovanja</h2>
					</div>
					<div class="col-sm-6">
					</div>
                </div>
			</div>
			<div style="overflow-x:auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Mesto</th>
                        <th>Ime</th>
                        <th>Priimek</th>
						<th>Spol</th>
						<th>Država</th>
						<th>Klub</th>
						<th>Tek</th>
						<th>Rezultat</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM `tekmovalci` WHERE `tek`='6 ur' ORDER BY `dolzina` DESC");
					$j=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["tid"]; ?>">
					
					<td><?php echo $j; ?></td>
					<td><?php echo $row["ime"]; ?></td>
					<td><?php echo $row["priimek"]; ?></td>
					<td><?php echo $row["spol"]; ?></td>
					<td><?php echo $row["drzava"]; ?></td>
					<td><?php echo $row["klub"]; ?></td>
					<td><?php echo $row["tek"]; ?></td>
					<td><?php echo $row["dolzina"]; ?></td>
					
				</tr>
				<?php
				$j++;
				}
				?>
				</tbody>
			</table>
			<div>
        </div>
    </div>