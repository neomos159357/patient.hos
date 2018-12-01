<?php
	session_start();
	if($_SESSION["username"] == null)
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION["status"] != "1")
	{
		echo "This page for Admin only!";
		exit();
	}	
  $serverName = "localhost";
	$userName = "root";
	$userPassword = "";
  $dbName = "hospital";
  
  $conn = mysqli_connect("localhost","root","","hospital");	
	//mysqli_connect("localhost","root","member");
	//mysql_select_db("member");
	$strSQL = "SELECT * FROM staff WHERE Types LIKE '".$_SESSION["Types"]."' ";
	if($objQuery = $conn->query($strSQL)){
	  if($objResult = $objQuery->fetch_object()){
?>
<html>
<head>
<title>Admin</title>
</head>
<body>
  Welcome!! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;username</td>
        <td width="197"><?= $objResult->username;?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;name</td>
        <td><?= $objResult->Name;?></td>
      </tr>
  <?php }
  }
  ?>
    </tbody>
  </table>
  <br>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>