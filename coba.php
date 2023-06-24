<?php
include "connection.php";

    $qry_produk=mysqli_query($connect,"select * from video where id_kategori = 1");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_video']?></h5>
                <p class="card-text"><?=$dt_produk['id_video']?></p>
                <p class="card-text"><?=$dt_produk['id_kategori']?></p>
              </div>
            </div>
        </div>
        <?php
    }
    ?>

<!-- include "connection.php";

function get_video($id_kategori){
    $query = 'SELECT id, nama_video, id_video, kategory FROM video WHERE id_kategory = $id_kategori ORDER BY id';
    return $query;
} -->