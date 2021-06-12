<?php
 include_once("koneksi.php");
$aksi = $_GET['aksi'];
 if($aksi=='add'){
	
		$username = $_POST['username'];
		$nama_perusahaan = $_POST['nama_perusahaan'];
	
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
       
        $password = $_POST['password'];
        
        $sql = mysqli_query($conn,"INSERT INTO `busagency` 
        (`id_busagency`, `name_agency`, `email_agency`,`alamat`, `password`, `emoney`) 
        VALUES ('$username', '$nama_perusahaan','$email', '$alamat', MD5('$password '), '0');");

        if($sql){
            header('location:index.php?page=user');
        }
 }elseif($aksi=='edit'){
    $username = $_POST['username'];
    $nama_perusahaan = $_POST['nama_perusahaan'];

    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
   
    $password = $_POST['password'];
    
    $sql = mysqli_query($conn,"UPDATE `busagency` 
    SET `name_agency` = '$nama_perusahaan', `email_agency` = '$email ',
     `alamat` = '$alamat' 
     WHERE `busagency`.`id_busagency` = '$username';");

    if($sql){
        header('location:index.php?page=user');
    }
 }elseif($aksi=='delete'){
    
    $username = $_GET['username'];
    mysqli_query($conn,"delete from busagency where id_busagency='$username'");
    header('location:index.php?page=user');
 }

 elseif($aksi=='topup'){
    
    $username = $_POST['username'];
    $topup = $_POST['topup'];
    
    $sql = mysqli_query($conn,"UPDATE `busagency` 
    SET `emoney` = '$topup', 
    
     WHERE `busagency`.`id_busagency` = '$username';");

    if($sql){
        header('location:index.php?page=user');
 }
}
	
		
		
       
	
