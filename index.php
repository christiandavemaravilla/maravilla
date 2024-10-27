<DOCTYPE html>
<html lang="em">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<met name="viewport" content="width-device-width, initial-scale=1.0">
	<title>List of Students</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class "container my-5">
	<h2 style="color: blue; font-size: 50px; text-align: center;">Clients</h2>


		<a class="btn btn-primary" href="/maravilla/create.php" role="button">Add New Client</a>
		<br>
		
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Created At</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "maravilla";
				//Create connection
				$connection = new mysqli($servername,$username,$password,$database);

				//Check connection
				if ($connection->connect_error) {
					die ("Connection failled:" . $connection->connect_error);
				}
				// real all row fram database table
				$sql = "Select * FROM clients";
				$result = $connection->query($sql);

				if (!$result) {
					die("Invalid query:" . $connection->connect_error);

				}

				//read data of each row
				while($row = $result->fetch_assoc()) {
					echo "
					<tr>
						<td>$row[ID]</td>
						<td>$row[name]</td>
						<td>$row[email]</td>
						<td>$row[phone]</td>
						<td>$row[address]</td>
						<td>$row[created_at]</td>
						<td>
							<a class='btn btn-primary btn-sm' href='/maravilla/edit.php?id=$row[ID]'>Update</a>
							<a class='btn btn-primary btn-sm' href='/maravilla/delete.php?id=$row[ID]'>Delete</a>
						</td>
				</tr>
					";
				}
				?>
			
			</tbody>

			
		</table>
</body>
