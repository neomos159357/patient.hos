<?php 
require "connection.php";
session_start();
if(!isset($_SESSION["username"])){
   
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <title>CMU Hospital</title>
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
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<?php
/**
 * Created by PhpStorm.
 * User: Phantom OF Time
 * Date: 11/9/2018
 * Time: 11:50 AM
 */

$_SESSION["patient"] = $_POST["patient"];

$pdo = new PDO('mysql:host=localhost;dbname=hospital2', 'root', '');
//Our select statement. This will retrieve the data that we want.

$sql = "SELECT * FROM `operation` WHERE 1 ORDER BY Room_OPE ASC";

//Prepare the select statement.

$stmt = $pdo->prepare($sql);

//Execute the statement.

$stmt->execute();

//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();

?>
<div class="jumbotron">
<div class="container-fluid">
<div  style="background-color:lavender;"><FONT Size = "6">Patient Information</FONT></div><br><td>
    <form role="form" action="patient_cost_confirm.php" method="post">
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">name</div>
            <?PHP
            $sql = "SELECT * FROM `patient` WHERE patient_id = '" . $_POST["patient"] . "'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll();
            foreach ($users

            as $_cc) {
            ?>
            <div class="col-sm-6"
                 style="background-color:lavenderblush;"><?= $_cc["Name"]; ?>  <?= $_cc["Surname"]; ?></div>

        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Age</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_cc["Age"]; ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Blood_Group</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_cc["Blood_Group"]; ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Gender</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_cc["Gender"]; ?></div>
        </div>

        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">General_Practice</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_cc["General_Practice"]; ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">bath30_flag</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_cc["bath30_flag"]; ?></div>
        </div>
        
        <?PHP } ?>

        <br><div  style="background-color:lavender;"><FONT Size = "6">Add Oparation</FONT></div><br>
        <?PHP
        $sqlo = "SELECT * FROM `operation` WHERE 1 ORDER BY Room_OPE ASC";
        $stmto = $pdo->prepare($sqlo);
        $stmto->execute();
        $userso = $stmto->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Operation Room</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="oroom">
                    <?php foreach ($userso as $user): ?>
                        <option value="<?= $user['Room_OPE']; ?>"><?= $user['Room_OPE']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <?PHP
        $sqls = "SELECT * FROM `staff` where Type like 'Doctor' order by staff_id ASC";
        $stmts = $pdo->prepare($sqls);
        $stmts->execute();
        $userss = $stmts->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Surgeon</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="Surgeon">
                    <?php foreach ($userss as $user1): ?>
                        <option value="<?= $user1['staff_id']; ?>"><?= $user1['staff_id']; ?> <?= $user1['Name']; ?>  <?= $user1['Surname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <?PHP
        $sqla = "SELECT * FROM `staff` where Type like 'Anesthetist' order by staff_id ASC ";
        $stmta = $pdo->prepare($sqla);
        $stmta->execute();
        $usersa = $stmta->fetchAll();
        ?>
         
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Anesthetist</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="Anesthetist">
                    <?php foreach ($usersa as $user2): ?>
                        <option value="<?= $user2['staff_id']; ?>"><?= $user2['staff_id']; ?> <?= $user2['Name']; ?>  <?= $user2['Surname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <?PHP
        $sqln = "SELECT * FROM `staff` where Type like 'Nurse' order by staff_id ASC";
        $stmtn = $pdo->prepare($sqln);
        $stmtn->execute();
        $usersn = $stmtn->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Nurse</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="ONurse">
                    <?php foreach ($usersn as $user3): ?>
                        <option value="<?= $user3['staff_id']; ?>"><?= $user3['staff_id']; ?> <?= $user3['Name']; ?>  <?= $user3['Surname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <br><div  style="background-color:lavender;"><FONT Size = "6">Add Rest Room</FONT></div><br>
        <?PHP
        $sqlr = "SELECT * FROM `room` ORDER BY `Room_NO` ASC";
        $stmtr = $pdo->prepare($sqlr);
        $stmtr->execute();
        $usersr = $stmtr->fetchAll();
        ?>
        
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Rest Room</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="RestRoom">
                    <?php foreach ($usersr as $user): ?>
                        <option value="<?= $user['Room_NO']; ?>"><?= $user['Room_NO']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
       

        <?PHP
        $sqlsn = "SELECT * FROM `staff` where Type like 'Nurse' order by staff_id ASC";
        $stmtsn = $pdo->prepare($sqlsn);
        $stmtsn->execute();
        $userssn = $stmtsn->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Nurse</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <select name="RNurse">
                    <?php foreach ($userssn as $user1): ?>
                        <option value="<?= $user1['staff_id']; ?>"><?= $user1['staff_id']; ?> <?= $user1['Name']; ?>  <?= $user1['Surname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
       
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">No. of day</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="nod" type="text" value=0 required></div>
        </div>


        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">cost per day</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="cpd" type="text" value=0 required></div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">extra cost</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="exc" type="text" value=0 required></div>
        </div><br>  
        <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<div class="row">
				  <div class="col-md-6">
				  </div>
				  <div class="col-md-6">
                
                   <p align ="right"> <input type="hidden" name="patient" value="<?= $_POST["patient"]; ?>">        
                    <FONT size = "4">   <input type="submit" name="submit" value="next"></FONT></a></p>
                    <tr> 
                   
				  </div>			
			</div>
		 </div>
                 
    </form>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<div class="row">
				  <div class="col-md-6">
                  <form role="form" action="Patient_Selected.php" method="post">                                
                               <FONT size = "4"> <input type="submit" name="submit" value="back"></FONT></a> 
				  </div>
				  <div class="col-md-6">
                
                                                  
                        </form> 
                    </p> 
				  </div>			
			</div>
		 </div>
  

</div>
</div>
</body>
</html>

