<?php
include "navbar.php";
include "connection.php";

$query_get_video = mysqli_query($connect, "SELECT id, id_video FROM video Where id = '".$_GET['id']."'");
$video = mysqli_fetch_array($query_get_video);
?>
<!-- sales report area start -->
    <div class="card col-md-12">
        <div class="card-body">
        <div class="embed-responsive embed-responsive-16by9">
            <?php
            echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'.$video['id_video'].'" allowfullscreen></iframe>'
            ?>
        </div>
        <span>Catatan :</span>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
<!-- sales report area end -->


<?php
include "footer.php";
?> 