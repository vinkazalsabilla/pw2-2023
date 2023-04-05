<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM kartu";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_kartu.php" role="button">Create Produk</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>Id</th><th>Kode</th><th>Nama</th>
            <th>Diskon</th><th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $nomor = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['diskon']?></td>
            <td><?=$row['iuran']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_kartu.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_kartu.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_kartu.php?iddel=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $nomor++;   
            } 
        ?>
    </tbody>
</table>
