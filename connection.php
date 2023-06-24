<?php
$connect = mysqli_connect('localhost','root','','wsl');
if(!$connect){
    echo 'Error Messages'.mysqli_connect_error().'<br>';
    exit();
}
?>