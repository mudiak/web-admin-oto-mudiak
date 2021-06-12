<?php
 include_once("koneksi.php");

	
    $username = $_POST['username'];
    $topup = (int)$_POST['topup'];

    $sqawal = mysqli_query($conn,"select emoney from busagency where id_busagency='$username'");

    $dataawal = mysqli_fetch_array($sqawal);
    $emoney = (int)$dataawal['emoney'];

    $totalemoney = $emoney + $topup;

    echo $totalemoney;
    
    $sql = mysqli_query($conn,"UPDATE `busagency` 
    SET `emoney` = '$totalemoney' 
    WHERE `busagency`.`id_busagency` = '$username';");

    if($sql){
        header('location:index.php?page=user');

    }
