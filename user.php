
<?php
include 'koneksi.php';

$page=$_GET['page'];
$aksi =isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
if($page=='user' && $aksi=='list'){
?>
		
       
		<div class="content">
			<a href="?page=user&aksi=add" class="btn btn-primary ">Tambah Client</a>
            
            <hr>

        <div class="card">

			<div class="card-header bg-success text-white ">
			</div>
			<div class="card-body">

				<table class="table table-bordered">
    
						<tr>
    							<th>Nama Perusahaan</th>
                            <th>Alamat</th>
							<th>email</th>
                            <th>Saldo</th>
							<th>Aksi</th>
						</tr>
				
					<tbody>
					</tbody>

                    <?php
               $tampil=mysqli_query($conn, "SELECT * from busagency");
			   $id=1;
                  while ($data=mysqli_fetch_array($tampil))  { 
              ?>
                <tr>
                    
                     <td><?php echo $data[ 'name_agency'] ?></td> 
                     <td><?php echo $data[ 'alamat'] ?></td>
                    
                     <td><?php echo $data[ 'email_agency'] ?></td>
                     <td><?php echo $data[ 'emoney'] ?></td>
                     <td> <a href="?page=user&aksi=edit&id=<?php echo $data['id_busagency'] ?>"class="btn btn-sm btn-primary float-right">Edit</a> |
                     <a href="add.php?aksi=delete&username=<?=$data['id_busagency']?>" class="btn btn-sm btn-primary float-right">Hapus</a></td>
					
				</tr>
                       
            <?php 
			
        }
        ?>
	</table>
		</div>
		</div>
        </div>


        

<?php
}elseif($page=='user' && $aksi=='add'){
    ?>
      
<div class="content">
<form action="add.php?aksi=add" method="post">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required />

    </div>
    <div class="form-group">
        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukan Nama" required/>

    </div>
    
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
    </div>

    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required/>

    </div>
    

    <div class="form-group">
        <label>Password:</label>
        <input type="text" name="password" class="form-control" placeholder="password" required/>
    </div>

   
    <input type="submit" class="btn btn-primary" value="Input">
</form>
</div>

    <?php
}elseif($page=='user'&& $aksi='edit'){
$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM `busagency`  where id_busagency='$id'");
$dataagency = mysqli_fetch_array($sql);
?>

<div class="content">
<form action="add.php?aksi=edit" method="post">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" value="<?=$id?>" class="form-control" placeholder="Masukan Username" readonly />

    </div>
    <div class="form-group">
        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan" value="<?=$dataagency['name_agency']?>" class="form-control" placeholder="Masukan Nama" required/>

    </div>
   
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" value="<?=$dataagency['email_agency']?>" class="form-control" placeholder="Masukan Email" required/>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?=$dataagency['alamat']?>" class="form-control" placeholder="Masukan Alamat" required/>
    </div>

    <input type="submit" class="btn btn-primary" value="Update">

 </form>
</div>
<?php
}
?>
  