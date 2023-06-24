<?php
include "navbar.php";
include "connection.php";

$query=mysqli_query($connect,"select * from video where id_kategori = 1");
foreach($query as $dt_video){
?>
<div class = "scrolling-wrapper">
<div class="card" style="width: 18rem;">
    <div class="embed-responsive embed-responsive-16by9">
        <?php

        echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'.$dt_video['id_video'].'" allowfullscreen></iframe>'
        ?>
    </div>
        <div class="card-body">
            <h5 class="card-title"><?= $dt_video['nama_video']?></h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
        </div>

<?php
}
include "footer.php";
?>