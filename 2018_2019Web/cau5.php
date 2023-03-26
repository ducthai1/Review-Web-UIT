<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuoi ky 2018_2019</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên bài hát</th>
            <th>Số lần xuất hiện trong playlist</th>
        </tr>
        <?php 
            include "connect.php";
            $sql = "SELECT TenBaiHat, COUNT(*) 
                    FROM PLAYLIST_BAIHAT PB JOIN BAIHAT B ON PB.MaBaiHat = B.MaBaiHat
                    GROUP BY TenBaiHat
                    ORDER BY COUNT(*) DESC
                    LIMIT 10";
            $result = $connect->query($sql);
            $i = 1;
            while($row = $result->fetch_row()) {
                echo "
                    <tr> 
                        <td> $i </td>
                        <td> $row[0] </td>
                        <td> $row[1] lần </td>
                    </tr>
                ";
                $i = $i + 1;
            }
        ?>
    </table>
</body>
</html>