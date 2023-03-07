<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form method="post" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div>
		<h1>Form Pendaftaran</h1>
        <hr />
		<form>
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="no" class="col-4 col-form-label">No</label>
                <div class="col-8">
                    <input id="no" name="no" type="text" class="form-control" placeholder="nomor" required>
                </div>
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
                </div>
                <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Tulis email disini" required>
                </div>
                <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" class="form-control" placeholder="alamat kamu" required>
                </div>
                <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="telepon" class="col-4 col-form-label">Telepon</label>
                <div class="col-8">
                    <input id="telepon" name="telepon" type="text" class="form-control" placeholder="tulis telepon disini " required>
                </div>
                <div class="form-group row mb-3">
                <div class="offset-4 col-2">
                    <input type="submit" name="proses" value="Submit" class="btn btn-primary">
                </div>
		</form>
	</div>
</body>
</html>