<?php
session_start();
if(!isset($_SESSION["username"])){
    
   
    header("location:login.php");
}
?>
<?php require "connection.php"; ?>
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
                   
			<div class="jumbotron">
				<h2>
					Patient Data 
				</h2>	<br>
				<FONT Color ="White">
				<table class="table" style="BACKGROUND-COLOR: black">
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
					</tr>
                    <?php
                   
                    $sql = "select * from transaction ";

                    $result = $conn->query($sql);
                   
                    while($rs = $result->fetch_object()){                                                                               
                    ?>
                    
					<tr class="table-active" >
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
					</tr>
                    <?php } ?>
				</tbody>
				</FONT>
			</table>
			
			<form role="form" action="Patient_Selected.php" method="post">
         
			<input type="submit" name="submit" value="back"></a>
			</form>						
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
