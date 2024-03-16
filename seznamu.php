<?php
//https://www.studentstutorial.com/ajax/crud
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="sl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Tabela prijavljenih tekmovalcev</h2>
					</div>
					<div class="col-sm-6">
						<!--<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New User</span></a>	
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>		-->	
					</div>
                </div>
			</div>
			<div style="overflow-x:auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<!--<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>-->
						<th class="urednik">Št.</th>
                        <th>Ime</th>
                        <th>Priimek</th>
						<th>Spol</th>
                        <th class="urednik">Starost</th>
						<th class="admin">Kraj</th>
						<th class="admin">Naslov</th>
						<th class="admin">Pošta</th>
						<th>Država</th>
						<th>Klub</th>
						<th class="urednik">Majica</th>
						<th class="urednik">E-mail</th>
						<th>Tek</th>
						<th class="urednik">Rezultat</th>
						<th class="urednik">Funkcija</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM tekmovalci ORDER BY tek ASC");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["tid"]; ?>">
					<!--<td>
						<span class="custom-checkbox">
							<input type="checkbox" class="user_checkbox" data-user-id="<?php/* echo $row["tid"];*/?>">
							<label for="checkbox2"></label>
						</span>
					</td>-->
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ime"]; ?></td>
					<td><?php echo $row["priimek"]; ?></td>
					<td><?php echo $row["spol"]; ?></td>
					<td><?php echo $row["starost"]; ?></td>
					<td><?php echo $row["kraj"]; ?></td>
					<td><?php echo $row["naslov"]; ?></td>
					<td><?php echo $row["posta"]; ?></td>
					<td><?php echo $row["drzava"]; ?></td>
					<td><?php echo $row["klub"]; ?></td>
					<td><?php echo $row["majica"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["tek"]; ?></td>
					<td><?php echo $row["dolzina"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["tid"]; ?>"
							data-ime="<?php echo $row["ime"]; ?>"
							data-priimek="<?php echo $row["priimek"]; ?>"
							data-spol="<?php echo $row["spol"]; ?>"
							data-starost="<?php echo $row["starost"]; ?>"
							data-kraj="<?php echo $row["kraj"]; ?>"
							data-naslov="<?php echo $row["naslov"]; ?>"
							data-posta="<?php echo $row["posta"]; ?>"
							data-drzava="<?php echo $row["drzava"]; ?>"
							data-klub="<?php echo $row["klub"]; ?>"
							data-majica="<?php echo $row["majica"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
							data-tek="<?php echo $row["tek"]; ?>"
							data-dolzina="<?php echo $row["dolzina"]; ?>"
							title="Uredi"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["tid"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Izbriši"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			</div>
        </div>
    </div>
	<!-- Add Modal HTML -->
	<!--<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CITY</label>
							<input type="city" id="city" name="city" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>-->
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Uredi podatke tekmovalca</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Ime</label>
							<input type="text" id="ime_u" name="ime" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Priimek</label>
							<input type="text" id="priimek_u" name="priimek" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Spol</label>
							<input type="text" id="spol_u" name="spol" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Starost</label>
							<input type="text" id="starost_u" name="starost" class="form-control" required>
						</div>	
						<div class="form-group admin">
							<label>Kraj</label>
							<input type="text" id="kraj_u" name="kraj" class="form-control" required>
						</div><div class="form-group admin">
							<label>Naslov</label>
							<input type="text" id="naslov_u" name="naslov" class="form-control" required>
						</div><div class="form-group admin">
							<label>Pošta</label>
							<input type="text" id="posta_u" name="posta" class="form-control" required>
						</div><div class="form-group">
							<label>Država</label>
							<input type="text" id="drzava_u" name="drzava" class="form-control" required>
						</div><div class="form-group">
							<label>Klub</label>
							<input type="text" id="klub_u" name="klub" class="form-control" required>
						</div><div class="form-group">
							<label>Majica</label>
							<input type="text" id="majica_u" name="majica" class="form-control" required>
						</div><div class="form-group">
							<label>E-mail</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div><div class="form-group">
							<label>Tek</label>
							<input type="text" id="tek_u" name="tek" class="form-control" required>
						</div><div class="form-group">
							<label>Rezultat</label>
							<input type="text" id="dolzina_u" name="dolzina" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Prekliči">
						<button type="button" class="btn btn-info" id="update">Posodobi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Ali ste prepričani da želiti zbrisati tega tekmovalca.</p>
						<p class="text-warning"><small>To dejanje ne more biti razveljavljeno.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Prekliči">
						<button type="button" class="btn btn-danger" id="delete">Izbriši</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>