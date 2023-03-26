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
            <th>Tên ca sĩ</th>
        </tr>
        <?php 
            include "connect.php";
            $sql = "SELECT * FROM CASI C
            WHERE NOT EXISTS (SELECT * FROM BAIHAT B
                                WHERE NOT EXISTS( SELECT * FROM CASI_BAIHAT CB
                                                    WHERE CB.MaCaSi = C.MaCaSi
                                                    AND CB.MaBaiHat = B.MaBaiHat))
            ";
            $result = $connect->query($sql);
            $i = 1;
            while($row = $result->fetch_row()){
                echo "<tr> 
                        <td> $i </td>
                        <td> $row[1] </td>
                    </tr>";
                $i = $i + 1;
            }
        ?>
    </table>
</body>
</html>