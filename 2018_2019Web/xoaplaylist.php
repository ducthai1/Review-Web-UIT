<?php 
    include "connect.php";
    $MaPL = $_GET['MaPL'];
    $sql = "DELETE FROM PLAYLIST_BAIHAT WHERE MaPlayList = '$MaPL'";
    $connect->query($sql);
    $sql = "DELETE FROM PLAYLIST WHERE MaPlayList = '$MaPL'";
    $connect->query($sql);
?>