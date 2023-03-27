<?php
$con  = mysqli_connect("localhost","root","","search_pet");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM pet_details";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $name[]  = $row['name']  ;
            $quantity[] = $row['quantity'];
        }
 
 
 }
 
 
?>