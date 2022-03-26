<?php
session_start();

if($_GET['do'] == 'logout'){
	unset($_SESSION['user']);
	session_destroy();
}

if(!$_SESSION['user']){
	header("Location: enter.php");
    exit;
}

require_once 'funcs.php';
?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звіт за зміну</title>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- FontAwesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="header">
            <span class="header-title">Звіт за зміну</span>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        Головна
                    </a>
                </li>
                <li class="active">
                    <a href="user.php?do=logout">
                        Вийти
                    </a>
                </li>
            </ul>
        </nav>

        <main>
                <?php
                    $conn = new mysqli("sql205.hostronavt.ru", "onavt_28931418", "54321", "onavt_28931418_zvits");
                    $conn->set_charset("utf8");
                    if($conn->connect_error){
                        die("Ошибка: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM zvitsdata";
                    if($result = $conn->query($sql)){
                        $rowsCount = $result->num_rows;
                        echo "<p class='other-data'>Всього звітів: $rowsCount</p>";
                ?>
            <section>
                <?php
                         
                        foreach($result as $row){
                            echo "<div class='data-user'>
                                    
                            <h2>Позивний: <i class='data-i'>" . $row["crew"] ."</i></h2>";

                            echo "<h3>Прізвище складу екіпажа: <i class='data-i'>" . $row["surname"] ."</i></h3>";
                                    
                            echo "<h4>Патруль: <i class='data-i'>" . $row["patrol"] ."</i> | Номер авто: <i class='data-i'>" . $row["patrolNum"] ."</i></h4>";

                            echo "<p>Викликів за зміну: <i class='data-i'>" . $row["callsForChange"] ."</i> | Адмін. нагляд: <i class='data-i'>" . $row["adminSupervision"] ."</i> | Авто перевірено: <i class='data-i'>" . $row["carIsChecked"] ."</i> | Осіб перевірено: <i class='data-i'>" . $row["personsChecked"] ."</i></p>";
                                    
                            echo "<p>Постанови електронні: <i class='data-i'>" . $row["formDecreeEL"] ."</i> | Серія, №: <i class='data-i'>" . $row["formDecreeELInput"] ."</i> | Номер статті: <i class='data-i'>" . $row["formDecreeELArticleInput"] ."</i></p>";

                            echo "<p>Постанови бумажні: <i class='data-i'>" . $row["personsCheckedPapper"] ."</i> | Серія, №: <i class='data-i'>" . $row["formDecreePapperInput"] ."</i> | Номер статтi: <i class='data-i'>" . $row["formDecreePapperArticleInput"] ."</i> </p>";

                            echo "<p>Протоколи: <i class='data-i'>" . $row["formProtocol"] ."</i> | Серія, №: <i class='data-i'>" . $row["formProtocolPapperInput"] ."</i> | Номер статтi: <i class='data-i'>" . $row["formProtocolArticleInput"] ."</i> </p>";

                            echo "<p>Інше: <i class='data-i'>" . $row["formTextareaOther"] ."</i></p><hr>";
                                    
                            echo "<p>Дата:<i class='data-i'> " . $row["date"] ."</i></p></div>";
                        }
                        $result->free();  
                    } else{
                        echo "Ошибка: " . $conn->error;
                    }
                    $conn->close();
                ?>
            
            </section>

        </main>

    <?php
        require_once "footer.php";
    ?>

    </div>

</body>

</html>
