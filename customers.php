<?php
include 'koneksi.php';

?>

<div class="content">
            
            <hr>

        <div class="card">

			<div class="card-header bg-success text-white ">
			</div>
			<div class="card-body">

				<table class="table table-bordered">
    
						<tr>
    						<th>Picture</th>
    						<th>Username</th>
                            <th>Nama Customer</th>
							<th>email</th>
                            <th>Saldo</th>
						</tr>
				
					<tbody>
					</tbody>

                    <?php
               $tampil=mysqli_query($conn, "SELECT * from customers");
			   $id=1;
                  while ($data=mysqli_fetch_array($tampil))  { 
              ?>
                <tr>
                    
                     <td><img width="100" height="100" src="http://localhost/oto_mudiak/API/<?=$data['path_picture']?>" alt=""></td> 
                     <td><?php echo $data[ 'id_customer'] ?></td>
                    
                     <td><?php echo $data[ 'name'] ?></td>
                     <td><?php echo $data[ 'email'] ?></td>
                     <td><?php echo $data[ 'wallet'] ?></td>
                   
				</tr>
                       
            <?php 
			
        }
        ?>
	</table>
		</div>
		</div>
        </div>
