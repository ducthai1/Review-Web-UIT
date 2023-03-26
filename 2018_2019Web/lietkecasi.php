<?php
    include "connect.php";
    $NamSinh = $_GET['NgaySinh'];
    $sql = "SELECT * FROM CaSi WHERE NamSinh = '$NamSinh'";
    $result = $connect->query($sql);
    echo
        "
        Danh sách ca sĩ
        <table border = '1'
            <tr>
                <th>STT</th>
                <th>Tên ca sĩ</th>
            </tr>
        ";
    $i = 1;
    while($row = $result->fetch_row()){
        echo "
            <tr>
                <td> $i </td>
                <td> $row[1] </td>
            </tr>
        ";
        $i = $i + 1;
    }
    echo "</table>";
?>