<?php include("connection.php");?>
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
<BODY border=0 background="https://sv1.picz.in.th/images/2018/11/17/3EsvL9.jpg" style="BACKGROUND-SIZE: cover"  >
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<h3 class="text-center">
					<br><td><FONT Size = "8"><FONT COLOR="White">CMU HOSPITAL</FONT></FONT>  </td></br>
					</h3>
				</div>
				<div class="col-md-3">
				<br>					 
					<a href ="login.php"><button class="btn btn-success" type="button">
					<FONT Size = "5">Log in</FONT>
					</button></a>
														
				</div>
			</div>
			<br></br>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-5">
				<div class="tabbable" id="tabs-683685"><div class="jumbotron">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link" href="HM.php" data-toggle="tab">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active show" href="patient_UI.php" data-toggle="tab">Patient</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link" href="Staff.php" data-toggle="tab">Staff</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link" href="#tab2" data-toggle="tab">Contact</a>
							</li>
                            
						</ul>
					
						
						<div class="jumbotron">
								<tr></tr>
                                <tr></tr>
								<form method ="post" action = "#" name="patient_form">
								<td><p align="center"> Please enter your ID  </p></td>
                            			</tr>
                            			<tr>										
                                		<p align="center"><input type="text" name="patientid"/></p>
										<p align="center"><input type="submit" name="Sengine" value="ค้นหา"/></p>										
									    </tr>                        				
                                        <?php
                                        $sql = "select * from patient ";

                                        if(isset($_POST['Sengine'])){
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



										<?php
										$sqlre = "SELECT * FROM transaction WHERE patient=".$_POST['patientid'];
										$r = $conn->query($sqlre);
										if($rb = $r->fetch_object()){
										
										?>
										
										<tr><p align="center"><td>Recipe  </td></p></tr><br>
										<tr><p align="center"><td>Your GP : <?= $rs->General_Practice; ?></td></p></tr>										
										<tr><p align="center"><td>Operation : <?=$rb->oroom;?> </td></p></tr>
										<tr><p align="center"><td>Resting Room : <?=$rb->RestRoom;?> </td></p></tr>	
										<tr><p align="center"><td>Total : <?=$rb->sumcost;?> bath </td></p></tr>
										<table boarder ='1' cellpadding='3' cellspacing='0'>
										<?php 
											} 
										?>
                                        <?php } ?>
                                        </table>
										

										 
                                </form>                                   
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
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