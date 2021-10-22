<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Register Spartan</title>

	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/dcf78cbd5c.js" crossorigin="anonymous"></script>

    <!-- SCRIPT JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>
<body>

	<div class="container-fluid">
		<div class="container">
			<!-- START LOGO -->
			<div class="row justify-content-center">
				<div class="col-md-8 text-center mb-3">
					<a href="index.php"><img src="images/logo-transparent.png" class="img-fluid"></a>
				</div>
			</div>
			<!-- END LOGO -->

			<!-- START FORM -->
			<div class="row justify-content-center">
				<div class="col-md-8 bg-telorasin p-5">
					<form method="post" action="auth/auth.php" enctype="multipart/form-data">
						<h3 class="display-5 pb-3 pt-5">Register Member</h3>
						<!-- START FULLNAME -->
						 <div class="form-group">
						   <label>Fullname :</label>
						   <input required autocomplete="off" maxlength="26" type="text" class="form-control" name="fullname" placeholder="Full name must be filled">
						 </div>
						<!-- END FULLNAME  -->

						<!-- START USERNAME -->
						 <div class="form-group">
						   <label>Username :</label>
						   <input required autocomplete="off" maxlength="26" pattern="[a-zA-Z0-9]{4,26}" type="text" class="form-control" name="username" placeholder="Username length must be between 4 to 12 characters only">
						 </div>
						<!-- END USERNAME  -->

						<!-- START PASSWORD & CONFIRM PASSWORD -->
						<div class="form-group">
						    <label>Password :</label>
						    <input required autocomplete="off" maxlength="12" pattern="[a-zA-Z0-9]{4,12}" type="password" class="form-control" name="password" placeholder="Password length must be between 4 to 12 characters only">
						</div>

						<div class="form-group">
						    <label>Confirm Password :</label>
						    <input required autocomplete="off" maxlength="12" pattern="[a-zA-Z0-9]{4,12}" type="password" name="confirm_password" class="form-control" placeholder="Re-type your Password">
						</div>
						<!-- END PASSWORD  & CONFIRM PASSWORD-->

						<!-- START BUKTI PEMBAYARAN -->
						<div class="form-group">
							<label>Bukti Pembayaran :</label>
							<br><input type="file" name="image" id="pay-img" required><br>
						</div>
						<!-- END BUKTI PEMBAYARAN -->

						<!-- START KTP -->
						<div class="form-group">
							<label>KTP/Kartu Tanda Pelajar :</label>
							<br><input type="file" name="ktp" id="pay-img" required><br>
						</div>
						<!-- END KTP -->
						<input required type="submit" class="btn btn-primary pl-2" name="register" value="Register"></input>
					</form>	
				</div>
			</div>
			<!-- END FORM -->

			<!-- START FOOTER -->
			<div class="row justify-content-center">
                <div class="col-md-8 bg-gray mb-3">
                    <p class="text-center pt-4 pb-2">COPYRIGHT 2021 | &copy; ADWITYO BHAGASKARA</p>
                </div>
            </div>
            <!-- END FOOTER -->
		</div>
	</div>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>