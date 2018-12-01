<!DOCTYPE html>
<html>
<?= session_start(); ?>
<!DOCTYPE html>
<html lang="th">

<head>
<title>Patient Add Operation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Styles -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/custom.js"></script>   

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>
</head>
<BODY border=0 background="https://sv1.picz.in.th/images/2018/11/17/3EsLEb.jpg" style="BACKGROUND-SIZE: cover"  >
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <div class="row">
				  <div class="col-md-2">
				  </div>
				  <div class="col-md-8">
					  <h3 class="text-center">
					  <br><td><FONT Size = "8"><FONT COLOR="White">CMU HOSPITAL</FONT></FONT>  </td></br><br>
					  </h3>
				  </div>
				<div class="col-md-2">
				<br>
				<a href ="logout.php"><button class="btn btn-success" type="button" href ="log.php">
				<FONT Size = "5">	Log out</FONT>
					</button></a>
				</div>
			</div>
		 <div>		
         <p align = "center">
<?PHP
$pa = "";

if (isset($_POST['patient'])) {
    $pa = $_POST['patient'];
}
?>
<div class="panel-body" align = "center">
    <div class="form-group">
    
        <div class="col-md-4">
            <p align = "center"><FONT Color = "White">Patient : </FONT></p>
            <?php

            //Connect to our MySQL database using the PDO extension.
            $pdo = new PDO('mysql:host=localhost;dbname=hospital2', 'root', '');

            //Our select statement. This will retrieve the data that we want.
            $sql = "SELECT * FROM `patient` WHERE 1 ORDER BY patient_id ASC";

            //Prepare the select statement.
            $stmt = $pdo->prepare($sql);

            //Execute the statement.
            $stmt->execute();

            //Retrieve the rows using fetchAll.
            $users = $stmt->fetchAll();

            ?>
            <form role="form" action="patient_cost.php" method="post">
                <select name="patient" class="form-control" required>
                    <?php foreach ($users as $user): ?>
                        <option
                                value="<?= $user['patient_id']; ?>">
                            <?= $user['patient_id']; ?>  <?= $user['Name']; ?> <?= $user['Surname']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>
                <input type="hidden" name="check" value="6">
                <p align = "center"><input type="submit" name="submit" value="submit"></p></a>

            </form>

        </div>
        <?PHP /*
        if (isset($_POST['patient'])) {
            ?>
            <a href="test_add_ope.php"><input type="submit" name="AddOperation" value="Add Operation"></a>
            <a href="test_add_rest.php"><input type="submit" name="AddOperation" value="Add Restroom"></a>
            <?PHP
            $_SESSION["patient"] = $_POST["patient"];
        } else {
        } */
        ?>

    </div>
</div>

</body>
</html>