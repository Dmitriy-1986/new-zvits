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

    <style>
        
    </style> 

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
                    <a href="admin.php">
                        Адмін
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            
			<?php
             
                $host = 'sql205.hostronavt.ru';
                $db = 'onavt_28931418_zvits';
                $user = 'onavt_28931418';
                $pass = '54321';
                try {
                    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
                } catch (PDOException $e) {
                    echo'Ошибка соединения с БД: ' .$e->getMessage();
                }
                
                    $get_id = $_GET['id'];
                    $crew = $_POST["crew"];
                    $surname = $_POST["surname"];
                    $patrol = $_POST["patrol"];
                    $patrolNum = $_POST["patrol_num"];
                    $callsForChange = $_POST["calls_for_change"];
                    $adminSupervision = $_POST["admin_supervision"];
                    $carIsChecked = $_POST["car_is_checked"];
                    $personsChecked =  $_POST["persons_checked"];
                    $formDecreeEL = $_POST["form_decree_el"];
                    $formDecreeELInput =  $_POST["form_decree_el_input"];
                    $formDecreeELArticleInput =  $_POST["form_decree_el_article_input"];
                    $personsCheckedPapper = $_POST["persons_checked_papper"];
                    $formDecreePapperInput = $_POST["form_decree_papper_input"];
                    $formDecreePapperArticleInput = $_POST["form_decree_papper_article_input"];
                    $formProtocol =  $_POST["form_protocol"];
                    $formProtocolPapperInput =  $_POST["form_protocol_papper_input"];
                    $formProtocolArticleInput =  $_POST["form_protocol_article_input"];
                    $formTextareaOther =  $_POST["form_textarea_other"];
                    date_default_timezone_set("Europe/Kiev");
                    $year_month_day = date('Y-m-d H:i');
                    /*
                    $crew, 
                    $patrol,
                    $patrolNum,
                    $callsForChange, 
                    $adminSupervision,
                    $carIsChecked,
                    $personsChecked,
                    $formDecreeEL,
                    $formDecreeELInput,
                    $formDecreeELArticleInput,
                    $personsCheckedPapper,
                    $formDecreePapperInput,
                    $formDecreePapperArticleInput,
                    $formProtocol,
                    $formProtocolPapperInput,
                    $formProtocolArticleInput,
                    $formTextareaOther
                    */
                    //read
                    $sql = $pdo->prepare("SELECT * FROM `zvitsdata`");
                    $sql->execute();
                    $result = $sql->fetchAll(PDO::FETCH_OBJ);

                    //update

                    if (isset ($_POST['edit'])) { 
                        $sql = ("UPDATE `zvitsdata` SET surname=?  WHERE id=?");
                        $query = $pdo->prepare($sql);
                         
                        $query->execute([$surname, $get_id]); 

                        if ($query) {
                            header("Location: ". $_SERVER['HTTP_REFERER']);
                        }
                    }

                    foreach ($result as $res) { 
                      
                       echo "
                        <h3 style='box-sizing: border-box; background-color: #007bff; width:100%; padding: 10px 0px 10px 1%;'> Звiт користувача: ". $res->surname ."</h3>
                        
                        <br>";
                        echo "
                        <form action='?id=". $res->id ."' method='post' class='form-user'> 
                                <div class='form-crew'>
                                    <label for='surname'>Прізвище складу екіпажа</label>
                                    <input class='input'  required name='surname' type='text' id='surname' value='". $res->surname ."'>
                                </div>
                                <hr>
                                
                                <div class='form-decree'>
                                    
                                    <label for='form-decree-el-input'>Серія, №</label>
                                    <input class='input' name='form_decree_el_input' type='text' id='form-decree-el-input'
                                        placeholder='Введіть серію електронної постанови'   >
                                    <br>
                                    <label for='form-decree-el-article-input'>Номер статті</label>
                                    <input class='input' name='form_decree_el_article_input' type='text' id='form-decree-el-article-input'
                                        placeholder='Введіть номер статті електронної постанови'>
                                    <br>
                                    <hr>
                                    
                                    <label for='form-decree-papper-input'>Серія, №</label>
                                    <input class='input' name='form_decree_papper_input' type='text' id='form-decree-papper-input'
                                        placeholder='Введіть серію бумажної постанови'>
                                    <br>
                                    <label for='form-decree-papper-article-input'>Номер статті</label>
                                    <input class='input' name='form_decree_papper_article_input' type='text' id='form-decree-papper-article-input'
                                        placeholder='Введіть номер статті бумажної постанови'>
                                </div>
                                <hr>
                                <div class='form-protocol-box'>  
                                    <label for='form-protocol-papper-input'>Серія, №</label>
                                    <input class='input' name='form_protocol_papper_input' type='text' id='form-protocol-papper-input'
                                        placeholder='Введіть серію протоколу'>
                                    <br>
                                    <label for='form-protocol-article-input'>Номер статті</label>
                                    <input class='input' name='form_protocol_article_input' type='text' id='form-protocol-article-input'
                                        placeholder='Введіть номер статті протоколу'>
                                </div>
                                <hr>
                                <div class='form-textarea'>
                                    <label for='form-textarea-other'>Інше</label>
                                    <textarea name='form_textarea_other' id='form-textarea-other'></textarea>
                                </div>
                                <div class='user_form-button'>
                                    <input class='button' type='submit' name='edit' value='Зберегти'>
                                </div>
                                
                            </form>";
                            
                    }  
                    
                    ?>                                                          
               
            
        </main>
        <footer>
            <span>
                2021 рік, розробник сайту - <a href="https://dovgaldima.pp.ua">Довгаль Дмитро</a>
            </span>
        </footer>

    </div>

</body>

</html>

