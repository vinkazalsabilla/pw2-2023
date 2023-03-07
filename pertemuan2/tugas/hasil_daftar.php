<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> 01 </td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td> 02 </td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>
				<?php 

				 $No = $_POST['no'];
				 $Nama_lengkap = $_POST['nama_lengkap'];
				 $Email = $_POST['email'];
				 $Alamat = $_POST['alamat'];
				 $Telepon = $_POST['telepon'];

				 
					echo '<tr>
							<td>'.$_POST['no'].'</td>
							<td>'.$_POST['nama_lengkap'].'</td>
							<td>'.$_POST['email'].'</td>
							<td>'.$_POST['alamat'].'</td>
							<td>'.$_POST['telepon'].'</td>
						
						</tr>';
					echo ''

				
				
				?>
			</tbody>
		</table>
	</div>
</body>
</html>