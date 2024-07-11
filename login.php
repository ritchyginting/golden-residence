<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Member/Agent - Golden Residence</title>
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
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<b><h4 class="modal-title" id="myModalLabel">LOGIN</h4></b>
							</div>
							<div class="modal-body">
								<form action="?" method="post">
									<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Isikan Email">
									</div>
									<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Isikan Password">
									</div>
									<a class="btn btn-info btn-md" href="succlogin.php" role="button">Login</a>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
	</div>
</div>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>