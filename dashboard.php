<?php
include 'koneksi.php';


$sqlcustomer = mysqli_query($conn,"select * from customers");
$banyakcustomer = mysqli_num_rows($sqlcustomer);
$sqlclient = mysqli_query($conn,"select * from busagency");
$banyakclient = mysqli_num_rows($sqlclient);
?>
<div class="content">

<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_jayot1xq.json"  background="transparent"  speed="1"  style="width: 100%; height: 300px;"  loop  autoplay></lottie-player>
<div class="panel panel-warning ">
			<div class="panel-heading">
				<b>Jumlah Customer</b>
			</div>
			<div class="panel-body">

				<p><?=$banyakcustomer?> Customer</p>
			</div>			
		</div>
        <div class="col-md-1"></div>

        <div class="panel panel-info">
			<div class="panel-heading">
				<b>Jumlah Client</b>
			</div>
			<div class="panel-body">

				<p><?=$banyakclient?> Client</p>
			</div>			
		</div>

</div>
   
     
            
            
        


        