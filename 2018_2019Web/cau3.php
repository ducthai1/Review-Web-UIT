<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuoi ky 2018_2019</title>
</head>
<body>
    Tên người nghe <select name="MaNguoiNge" id="MaNguoiNge">
        <?php
            include "connect.php";
            $sql = "SELECT * FROM NGUOINGHE";
            $result = $connect->query($sql);
            while($row = $result->fetch_row()){
                echo "<option value = '$row[0]'>$row[1]</option>";
            }
        ?>
    </select>

    <div id="danhsachplaylist"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#MaNguoiNge").change(function(){
                var MaNN = $(this).val();
                $.ajax({
                    url: "lietkeplaylist.php",
                    method:"GET",
                    data: {MaNN:MaNN},
                    success: function(data){
                        $("#danhsachplaylist").html(data);
                    }
                });
            });

            $('body').on('click', ".xoapl", function(){
            //$(".xoapl").on(click, function(){
                var row = $(this).parents("tr");
                var MaPL = row.find(".MaPL").val();
                $.ajax({
                    url: "xoaplaylist.php",
                    method:"GET",
                    data: {MaPL:MaPL},
                    success: function(data) {
                        row.remove();
                    }
                });
            });
        });
    </script>
</body>
</html>