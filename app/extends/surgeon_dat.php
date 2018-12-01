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
								<a class="nav-link" href="patient_UI.php" data-toggle="tab">Patient</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link active show" href="Staff.php" data-toggle="tab">Staff</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link" href="contact.php"" data-toggle="tab">Contact</a>
							</li>
                            
						</ul>					
						<p align="left">Staff > Doctor > Surgeon </p>
								<form method ="post" action = "#" name="doctor_form">
                        			                      				
                                        <?php
                                        $sql = "select * from staff ";
                                        $sql.="WHERE Type LIKE '%Doctor'";
                                        $sql.="order by Type desc";
                                        $result = $conn->query($sql);
                                        while($rs = $result->fetch_object()){  
                                                                                                                   
                                        ?>
										<table boarder ='1' cellpadding='3' cellspacing='0'>
										<img src="https://sv1.picz.in.th/images/2018/11/08/3Z7fX0.jpg" alt="3Z7fX0.jpg" border="0" width = 100px height = 100px />
                                      
                                        <p align="center"><td>Name : <?= $rs->Name; ?></td></p>
                                        <tr><p align="center"><td>Surname : <?= $rs->Surname; ?></td></p></tr>
                                        <tr><p align="center"><td>Start contact : <?= $rs->Start_Contact; ?> </td></p></tr>
                                        <?php 
                                             
                                        }
                                     ?>
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

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
</body>
</html>