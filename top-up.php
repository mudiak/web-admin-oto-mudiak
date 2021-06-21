<?php
include 'koneksi.php';

?>
 <div class="content">
<form action="addtopup.php" method="post">
    <div class="form-group">
        <?php
        $sql = mysqli_query($conn,"select * from busagency");


        ?>
        <label>Username</label>
        <select name="username" id="" class="form-control">
            <?php
                while($data = mysqli_fetch_array($sql)){
            ?>
            <option value="<?=$data['id_busagency']?>"><?=$data['name_agency']?></option>
            <?php
                }
            ?>
        </select>

    </div>
    

    <div class="form-group">
        <label>Jumlah Top Up</label>
        <input type="text" name="topup" class="form-control" placeholder="Masukkan Jumlah Top Up" required/>
    </div>

    

   
 
   
    <input type="submit" class="btn btn-primary" value="Top Up">

 </form>
</div>

  