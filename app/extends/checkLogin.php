
<?php
	session_start();

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "hospital";

	$conn = mysqli_connect("localhost","root","","hospital2");

	$strSQL = "SELECT * FROM staff WHERE username like '".$_POST['txtUsername']."' 
    and password like '".$_POST['txtPassword']."'";
	$objQuery= $conn->query($strSQL);   
	
	if($objResult = $objQuery->fetch_object())
	{
		$_SESSION["Types"] = $objResult->Types;
		$_SESSION["status"] = $objResult->status;
		$_SESSION["username"] = $objResult->username;

            session_write_close();
		
		$dat = "SELECT * FROM staff WHERE status like 1 ";
		$d1 = $conn->query($dat);	

			if($rs = $d1->fetch_object())
			{
				header("location:Patient_Selected.php");
			}
	}else{
		echo"กรุณากรอก Username และ password";
	}

	
	mysqli_close($conn);

	
?>




