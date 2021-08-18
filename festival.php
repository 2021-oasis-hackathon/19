

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    
    <title> Home - NEW TRIP </title>
    <style>
        h1{
            text-align: center;
        }
        ul{
            list-style: none;
            padding-left: 0px;
        }
    </style>
</head>

<body >
    <header>
        <h1><a href="home.html"> Title </a></h1>
        
        <nav class="barmenu">
            <ul class="topMenu">
                <li id="top"><a href="campus.html"> 캠퍼스 숙박 </a></li>
                <li id="top"><a href="reserv.html"> 예약 </a></li>
                <li id="top"><a href="attractions.html"> 여행지 </a></li>
                <li id="top" style="background-color: rgb(68, 6, 150);
                border-radius: 12px;"><a href="festival.php"> 축제 </a></li>
            </ul> 
        <div id="introImg"></div>
        <div id="test"></div>
        </nav>
        </a>
    </header>
    <main>
        <div class='db'>
        <ul>
        <?php
        $conn = mysqli_connect('localhost', 'root', '991025', 'mysql');
    // if(mysql_connect_error($conn)) {
    //         echo "에러 발생";
    //     }
        $sql = "SELECT * FROM festival_tb";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result)
        // while() {
        //     echo '<li>'.$row['f_name'].'</li>';
        // }
        ?>
        </ul>
        </div>
        <div class="btns">
            <input href="#" type="button" value="1">
            <input href="#" type="button" value="2">
            <input href="#" type="button" value="3">
            <input href="#" type="button" value="4">
        </div>
        <article class="container">
            <div>
                <table>
                    <tr>
                        <td><img src="c1.jpg" width=270px style="padding: 10px 10px;"></td>

                        <td>
                        <dl>
                            <dt><h3><?php echo $row['f_name']?></h3></dt>
                            <dd>축제 설명</dd>
                        </td>
                        </dl>
                    </tr>

                    <tr>
                        <td><img src="c1.jpg" width=270px style="padding: 10px 10px;"></td>

                        <td>
                        <dl>
                            <dt><h3>축제2</h3></dt>
                            <dd>축제 설명</dd>
                        </td>
                        </dl>
                    </tr>

                    <tr>
                        <td><img src="c1.jpg" width=270px style="padding: 10px 10px;"></td>

                        <td>
                        <dl>
                            <dt><h3>축제3</h3></dt>
                            <dd>축제 설명</dd>
                        </td>
                        </dl>
                    </tr>

                    <tr>
                        <td><img src="c1.jpg" width=270px style="padding: 10px 10px;"></td>

                        <td>
                        <dl>
                            <dt><h3>축제4</h3></dt>
                            <dd>축제 설명</dd>
                        </td>
                        </dl>
                    </tr>
                </table>       
                    

                    
                    
                    
                
                 
                    
                </table>
        </div>
        </article>
    </main>

    <footer>

    </footer>

    
</body>
</html>