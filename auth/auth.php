<?php
include_once "../config/config.php";
	if (isset($_POST['register']))
	{
		// Filter username dan fullname untuk menghindari serangan XSS
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = md5($_POST['password']);
		$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
		$image = $_FILES['image']['name'];
		$image_tmp= $_FILES['image']['tmp_name'];
		$ktp = $_FILES['ktp']['name'];
		$image_tmp2= $_FILES['ktp']['tmp_name'];
		$status =$_POST['status'];

		move_uploaded_file($image_tmp, "payment/$image");
		move_uploaded_file($image_tmp2, "ktp/$ktp");

		$query = "insert into member (username,password,image,ktp,fullname,status,date) values ('$username','$password','$image','$ktp','$fullname',0,now())";

		$result = mysqli_query($GLOBALS['koneksi'], $query);

		if ($result==1) {
			header("Location: ../member/login.php");
		}
		else{
			echo "Registrasi Gagal";
		}

	}

?>