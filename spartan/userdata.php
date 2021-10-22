<?php 
include_once "../config/config.php";
ob_start();
session_start();
ob_end_clean();
if(!isset($_SESSION['fullname']))
{
    header('location:index.php');
}


if(isset($_GET["getdata"])) {
	if($_GET["getdata"] == "fetch") {
		$sql=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM member");

		$json_data = [];
		while($row = mysqli_fetch_array($sql)) {
			$json_data[] = [
				"id" => $row['id'],
				"username" => $row["username"],
				"status" => $row["status"],
				"image" => $row["image"],
				"fullname" => $row["fullname"]
			];
		}

		echo json_encode($json_data);

	}
}

if(isset($_POST["verifyId"])) {
	$id= $_POST["verifyId"];
	$sql = "UPDATE member set status=1 where id = '$id'";
	$query = mysqli_query($GLOBALS['koneksi'],$sql);

	if($query) {
		echo json_encode(["success"=>true]);
	}else {
		echo json_encode(["success"=>false]);
	}
}