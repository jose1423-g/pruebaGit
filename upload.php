<?php 
    include('./conexion.php');

if (isset($_FILES['file'])) {
    $nombre  = basename($_FILES['file']['name']);
    $type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    
    print_r($_FILES['file']);
}
?>