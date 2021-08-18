

<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '991025', 'mysql');
    // if(mysql_connect_error($conn)) {
    //         echo "에러 발생";
    //     }
    $sql = "SELECT * FROM festival_tb";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
            echo '<li>'.$row['f_name'].'</li>';
        }
?>
    </body>
</html>