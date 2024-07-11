<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hubungi Kami! - Golden Residence</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "header.php";?>

<style type="text/css">
    body {
        background-image: url("images/rmh4.jpeg");
    }
</style>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
			<form action="?" method="post">
				<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Anda">
				</div>
				<div class="form-group">
				<label for="nohp">Nomor HP</label>
				<input type="number" class="form-control" name="nohp" placeholder="Nomor HP Anda">
				</div>
				<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email Anda">
				</div>
				<div class="form-group">
				<label for="pesan">Pesan</label>
				<textarea name="pesan"class="form-control" placeholder="Pesan"></textarea>
				</div>
				<a class="btn btn-info btn-md" href="subpesan.php" role="button">Submit!</a>
				<button type="reset" class="btn btn-info">Batal</button>
			</form>
		</div>
			</div>
		</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>