<?php
    include "connect.php";
    $MaBaiHat = $_POST['MaBaiHat'];
    $TenBaiHat = $_POST['TenBaiHat'];
    $TheLoai = $_POST['TheLoai'];
    $sql = "INSERT INTO BAIHAT VALUES ('$MaBaiHat','$TenBaiHat','$TheLoai')";
    $connect->query($sql);
?>