<?php

session_start();
if(!isset($_SESSION["username"])){
   
    
    header("location:login.php");
}


    require 'connection.php';
    


    $patient = $_POST["patient"];
    $oroom = $_POST["oroom"];
    $Surgeon = $_POST["Surgeon"];
    $Anesthetist = $_POST["Anesthetist"]; 
    $ONurse =$_POST["ONurse"]; 
    $RestRoom  = $_POST["RestRoom"]; 
    $RNurse = $_POST["RNurse"]; 
    $NOD  =  $_POST["nod"]; 
    $CPD = $_POST["cpd"]; 
    $EXC = $_POST["exc"]; 
    $SUMCOST = $_POST["sumcost"];
   
   $result = $conn->query("DELETE FROM transaction WHERE patient=".$patient);
   
   $query = "INSERT INTO transaction(patient,oroom,Surgeon,Anesthetist,ONurse,RestRoom,RNurse,nod,cpd,exc,sumcost) 
   VALUES('$patient','$oroom','$Surgeon','$Anesthetist',' $ONurse',' $RestRoom',' $RNurse',' $NOD',' $CPD ',' $EXC','$SUMCOST')";

   $result = mysqli_query($conn,$query);

   if($result){
       header("location:regis_UI.php");
       }else {
           echo "เกิดข้อผิดพลาด".mysqli_error($conn);

   }

   $conn = null;



    

?>