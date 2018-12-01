
<?php require "connection.php";
if(isset($_GET['patient'])){
    $result = $conn->query("UPDATE transaction SET patient   WHERE patient=".$_GET['patient']);
    if($result){
        header("location:regis_UI2.php");
    }else{
        echo "ลบไม่สำเร็จ";
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
            <?php
             
            ?>
        
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
							Other
						</th>
					</tr>
                    <?php





                   
$sql = "select * from transaction ";

if(isset($_POST['patient'])){
	$sql.="WHERE patient_id LIKE'".$_POST['patientid']."'";
}
$sql.="order by patient_id desc";
$result = $conn->query($sql);

if($rs = $result->fetch_object()){                                                                               
?>
<table boarder ='1' cellpadding='3' cellspacing='0'>
<img src="https://sv1.picz.in.th/images/2018/11/08/3ZSwr9.png" alt="3Z7oO1.png" border="0" width = 100px height = 100px/>
<p align="left">ID : <?= $rs->patient_id; ?></p>
<p align="left">Name : <?= $rs->Name." ".$rs->Surname; ?></p>
<p align="left">Age : <?= $rs->Age; ?> </p>
<p align="left">Blood Group : <?= $rs->Blood_Group; ?> </p>
<p align="left">Gender: <?= $rs->Gender; ?> </td></p></tr>
<p align="left">General Practice: <?= $rs->General_Practice; ?></p>
<p align="left">30bath: <?= $rs->bath30_flag; ?></p>





<tr><p align="center"><td>Recipe  </td></p></tr><br>
<tr><p align="center"><td>Your GP : </td></p></tr>
<tr><p align="center"><td>Medication : </td></p></tr>
<tr><p align="center"><td>Operation : </td></p></tr>
<tr><p align="center"><td>Resting Room : </td></p></tr>	
<tr><p align="center"><td>Total : </td></p></tr>
<table boarder ='1' cellpadding='3' cellspacing='0'>

<?php } ?>







                    $result = $conn->query($sql);
                   
                    while($rs = $result->fetch_object()){                                                                               
                    ?>
                    
					<tr class="table-active">
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
                        <a href = "regis_UI2.php?patient=<?=$rs->patient;?>"onclick="return confirm('ต้องการลบข้อมูล?');">ลบ</a>
						</td>
					</tr>
                    <?php } ?>
				</tbody>
			</table>
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
