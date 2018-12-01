<?php
session_start();
if(!isset($_SESSION["username"])){
    
   
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
<br><div  style="background-color:lavender;"><FONT Size = "6">Patient Information</FONT></div><br>
    <form role="form" action="register.php" method="post">
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
            <?PHP $b30 = $_cc["bath30_flag"]; ?>
        </div>

        <?PHP } ?>
        <br><div  style="background-color:lavender;"><FONT Size = "6">Add Operation</FONT></div><br>   
        <?PHP
        $sqlo = "SELECT * FROM `operation` WHERE Room_OPE = '" . $_POST["oroom"] . "' ORDER BY Room_OPE ASC";
        $stmto = $pdo->prepare($sqlo);
        $stmto->execute();
        $userso = $stmto->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Operation Room</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">

                <?php foreach ($userso as $user): ?>
                    <?= $user['Room_OPE']; ?>
                <?php endforeach; ?>

            </div>
        </div>

        <?PHP
        $sqls = "SELECT * FROM `staff` where Type like 'Doctor' AND staff_id = '" . $_POST["Surgeon"] . "' order by staff_id ASC";
        $stmts = $pdo->prepare($sqls);
        $stmts->execute();
        $userss = $stmts->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Surgeon</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_POST["Surgeon"]; ?>

                <?php foreach ($userss as $user1): $user1['staff_id']; ?> <?= $user1['Name']; ?>  <?= $user1['Surname']; ?>
                <?php endforeach; ?>

            </div>
        </div>

        <?PHP
        $sqla = "SELECT * FROM `staff` where Type like 'Anesthetist' AND staff_id = '" . $_POST["Anesthetist"] . "'  order by staff_id ASC ";
        $stmta = $pdo->prepare($sqla);
        $stmta->execute();
        $usersa = $stmta->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Anesthetist</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">

                <?php foreach ($usersa as $user2): ?>
                    <?= $user2['staff_id']; ?> <?= $user2['Name']; ?>  <?= $user2['Surname']; ?>
                <?php endforeach; ?>

            </div>
        </div>

        <?PHP
        $sqln = "SELECT * FROM `staff` where Type like 'Nurse' AND staff_id = '" . $_POST["ONurse"] . "' order by staff_id ASC";
        $stmtn = $pdo->prepare($sqln);
        $stmtn->execute();
        $usersn = $stmtn->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Nurse</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">

                <?php foreach ($usersn as $user3): ?>
                    <?= $user3['staff_id']; ?> <?= $user3['Name']; ?>  <?= $user3['Surname']; ?>
                <?php endforeach; ?>

            </div>
        </div>

        <br><div  style="background-color:lavender;"><FONT Size = "6">Add Rest Room</FONT></div><br>
        <?PHP
        $sqlr = "SELECT * FROM `room` WHERE Room_NO = '" . $_POST["RestRoom"] . "'  ORDER BY `Room_NO` ASC";
        $stmtr = $pdo->prepare($sqlr);
        $stmtr->execute();
        $usersr = $stmtr->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Rest Room</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">

                <?php foreach ($usersr as $user): ?>
                    <?= $user['Room_NO']; ?>
                <?php endforeach; ?>

            </div>
        </div>

        <?PHP
        $sqlsn = "SELECT * FROM `staff` where Type like 'Nurse' AND staff_id = '" . $_POST["RNurse"] . "' order by staff_id ASC";
        $stmtsn = $pdo->prepare($sqlsn);
        $stmtsn->execute();
        $userssn = $stmtsn->fetchAll();
        ?>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Nurse</div>
            <div class="col-sm-6" style="background-color:lavenderblush;">

                <?php foreach ($userssn as $user1): ?>
                    <?= $user1['staff_id']; ?> <?= $user1['Name']; ?>  <?= $user1['Surname']; ?>
                <?php endforeach; ?>

            </div>
        </div>


        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">No. of day</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_POST["nod"]; ?> day(s)</div>
        </div>


        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">cost per day</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_POST["cpd"]; ?> bath/day</div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">extra cost</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $_POST["exc"]; ?> bath</div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">Total Cost</div>
            <?PHP
            if ($b30 == "YES") {
                $sumcost = 30;
            } else {
                $sumcost = ($_POST["nod"] * $_POST["cpd"]) + $_POST["exc"];
            }
            ?>
            <div class="col-sm-6" style="background-color:lavenderblush;"><?= $sumcost; ?> bath</div>
        </div>


        <input type="hidden" name="patient" value="<?= $_POST["patient"]; ?>">
        <input type="hidden" name="oroom" value="<?= $_POST["oroom"]; ?>">
        <input type="hidden" name="Surgeon" value="<?= $_POST["Surgeon"]; ?>">
        <input type="hidden" name="Anesthetist" value="<?= $_POST["Anesthetist"]; ?>">
        <input type="hidden" name="ONurse" value="<?= $_POST["ONurse"]; ?>">
        <input type="hidden" name="RestRoom" value="<?= $_POST["RestRoom"]; ?>">
        <input type="hidden" name="RNurse" value="<?= $_POST["RNurse"]; ?>">
        <input type="hidden" name="nod" value="<?= $_POST["nod"]; ?>">
        <input type="hidden" name="cpd" value="<?= $_POST["cpd"]; ?>">
        <input type="hidden" name="exc" value="<?= $_POST["exc"]; ?>">
        <input type="hidden" name="sumcost" value="<?= $sumcost; ?>"><br>
        <p align = "right"><input type="submit" name="submit" value="save"></p></a>
        
    </form>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">		
			<div class="row">
				  <div class="col-md-6">
                  <form role="form" action="patient_cost.php" method="post">        
                  <input type="hidden" name="patient" value="<?= $_POST["patient"]; ?>">                          
                        <FONT size = "4"> <input type="submit" name="submit" value="back"></FONT></a>                           
                        </form>
				  </div>
				  <div class="col-md-6">                
                         
                     
				  </div>			
			</div>
		 </div>
</div>
</div>
</body>
</html>


