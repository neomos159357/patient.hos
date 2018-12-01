<?php
session_start();
require "connection.php";
if(!isset($_SESSION["username"])){
      
   header("location:login.php");
}
if(isset($_GET['seq'])){
	$result = $conn->query("DELETE FROM transaction WHERE seq=".$_GET['seq']);
	if($result){
		header("location:check.php");
	}else{
		echo"เกิดข้อผิดพลาด";
	}
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
    
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<h3 class="text-center">
						CMU Hospital 
					</h3>
				</div>
				<div class="col-md-2">					 
				<a href ="logout.php"><button class="btn btn-success" type="button" href ="log.php">
						Log out
					</button></a>
				</div>
			</div>                  
			<div class="jumbotron">
				<h2>
					Hello,Doctor !!
				</h2>
				<p>
					Patient Data
				</p>			
			</div>
			<table class="table">
				<thead>
                     <tr>
                     <th>
						   ID
						</th>
						<th>
						    patient	
						</th>
						<th>
                            oroom
						</th>
						<th>
							Surgeon
						</th>
						<th>
							Anesthetist
						</th>
                        <th>
							ONurse
						</th>
                        <th>
							RestRoom
						</th>
                        <th>
							RNurse
						</th>
                        <th>
							nod
						</th>
                        <th>
							cpd
						</th>
                        <th>
							exc
						</th>
                        <th>
							sumcost
						</th>
						<th>
							Detail
						</th>
					</tr>
                    <?php
                   $_SESSION['patient'] = $_POST['patient'];                   
                    $sql = "SELECT * from transaction where patient LIKE'".$_POST["patient"]."'";
                    $result = $conn->query($sql);
                   
                    while($rs = $result->fetch_object()){                                                                               
                    ?>                    
					<tr class="table-active">
                         <td>
						<?= $rs->seq;?>
						</td>
						<td>
						<?= $rs->patient;?>
						</td>
						<td>
                        <?= $rs->oroom;?>
						</td>
						<td>
                        <?= $rs->Surgeon;?>
						</td>
						<td>
                        <?= $rs->Anesthetist;?>
						</td>
                        <td>
                        <?= $rs->Anesthetist;?>
						</td>
                        <td>
                        <?= $rs->ONurse;?>
						</td>
                        <td>
                        <?= $rs->RestRoom;?>
						</td>
                        <td>
                        <?= $rs->RNurse;?>
						</td>
                        <td>
                        <?= $rs->nod;?>
						</td>
                        <td>
                        <?= $rs->cpd;?>
						</td>
                        <td>
                        <?= $rs->sumcost;?>
						</td>
						<td>
                        <a href ="check.php?seq=<?=$rs->seq;?>">ลบ</a>                       
						</td>
					</tr>
                    <?php } ?>
				</tbody>
			</table>
            <form role="form" action="Patient_Selected.php" method="post">
      
            <input type="submit" name="submit" value="Back To Select Patient"></a>
            </form>
		</div>
	</div>
</div>




</body>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
</html>
