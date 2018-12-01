<?php 
require "connection.php";
session_start();
if(!isset($_SESSION["username"])){
   
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Phantom OF Time
 * Date: 11/9/2018
 * Time: 11:50 AM
 */


echo "<pre>";
print_r($_GET);
echo "</pre>";


$pdo = new PDO('mysql:host=localhost;dbname=hospital2', 'root', '');
//Our select statement. This will retrieve the data that we want.


$sqlseq = "SELECT * FROM `transaction` WHERE seq = '" . $_GET["seq"] . "' ";
$seq1 = $pdo->prepare($sqlseq);
$seq1->execute();
$seq2 = $seq1->fetchAll();

foreach ($seq2 as $user):
$oroom = $user["oroom"];
$surgeon = $user["Surgeon"];
$anesthetist = $user["Anesthetist"];
$onurse = $user["ONurse"];
$rest = $user["RestRoom"];
$Rnu  = $user["RNurse"];
$nod  = $user["nod"];
$cpd = $user["cpd"];
$exc = $user["exc"];
$sumc = $user["sumcost"];

endforeach;

$sql = "SELECT * FROM `operation` WHERE oroom ='".$oroom."'";

//Prepare the select statement.

$stmt = $pdo->prepare($sql);

//Execute the statement.

$stmt->execute();

//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();

?>
<div class="container-fluid">
    <h1>Edit Information</h1>
    <p>Resize the browser window to see the effect.</p>
    <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p>
    
    <form role="form" method="post">
     
        <h1>Hello World!</h1>
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

        <h1>Hello World!</h1>
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
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="nod" type="text" value="<?=$nod;?>" ></div>
        </div>


        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">cost per day</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="cpd" type="text" value="<?=$cpd;?>" ></div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:lavender;">extra cost</div>
            <div class="col-sm-6" style="background-color:lavenderblush;"><input name="exc" type="text" value="<?=$exc;?>"></div>
        </div>
      
        <input type="hidden" name="seq" value="<?= $_GET["seq"]; ?>">        
        <input type="submit" name="Save" value="Save"></a>
       <?php 
       if(isset($_POST['Save'])){
                                   
            $oroom = $_POST["oroom"];
            $Surgeon = $_POST["Surgeon"];
            $Anesthetist = $_POST["Anesthetist"]; 
            $ONurse =$_POST["ONurse"]; 
            $RestRoom  = $_POST["RestRoom"]; 
            $RNurse = $_POST["RNurse"]; 
            $NOD  =  $_POST["nod"]; 
            $CPD = $_POST["cpd"]; 
            $EXC = $_POST["exc"]; 
            
           
            $sql = "UPDATE transaction SET oroom='$oroom',Surgeon='$Surgeon',Anesthethist='$Anesthetist'
            ,ONurse='$ONurse',RestRoom='$RestRoom',RNurse='$RNurse',nod='$NOD',cpd='$CPD '
            ,exc='$EXC' WHERE seq=".$_GET["seq"];
            $result = $conn->query($sql);
            if($result){
                header("location:check.php");
            }else{
                echo "เกิดข้อผิดพลาด";
            }
       }
        ?>  
        </form>        
    </form>
   

</div>

</body>
</html>

