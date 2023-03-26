<?php 
    include "connect.php";
    $MaNN = $_GET['MaNN'];
    $sql = "SELECT * FROM PLAYLIST WHERE MaNN = '$MaNN'";
    $result = $connect->query($sql);

    echo "<table border = '1'
            <tr>
                <th>STT</th>
                <th>Tên playlist</th>
                <th>Chức năng</th>
            </tr>
        ";
    $i = 1;
    while($row = $result->fetch_row()) {
        echo "<tr>
                <td>$i</td>
                <td>$row[1]</td>
                <td> <a href='javascript:void(0)' class = 'xoapl' >Xóa</a> <input type = 'hidden' class = 'MaPL' value = '$row[0]' /> </td>
            </tr>";
        $i = $i + 1;
    }
    echo "</table>";
?>