<?php
    require_once 'funcs.php';
    if(!empty($_POST)){
        save_mess();
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    } 
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

        <style>
            .alert-primary {
                text-align: center;
                color: #0c5460;
                background-color: #d1ecf1;
                border-color: #bee5eb;
                padding: .75rem 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
                font-weight: 700;
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .alert-primary a {
                margin: 5px;
                border-radius: .25rem;
                border: 1px solid rgba(0,0,0,.125);
                padding: 5px 5px;
                color: #856404;
                background-color: #fff3cd;
                border-color: #ffeeba;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <span class="header-title">Звіт за зміну</span>
        </div>
        <nav>
            <ul>
                <li >
                    <a href="index.php">
                        Головна
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        Увійти
                    </a>
                </li>
            </ul>
        </nav>
            <p class="alert-primary">ЗВІТ ВІДПРАВЛЕНО!<br><br>Повернутись на <a href="index.php">Головну </a></p>
    </div>
 
</body>

</html>
