<!-- Скріпт авторизації -->
<?php
session_start();

if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}

if($_SESSION['user']){
	header("Location: user.php");
	exit;
}

$admin = 'admin';
$pass = '1aaa2a1c894f404fbf20959ab227d433';
/*  echo md5('qazwsx1234');  */

$user = 'user';
$pass_user = 'b59c67bf196a4758191e42f76670ceba';
/* echo md5('1111'); */

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
		$_SESSION['admin'] = $admin;
			header("Location: admin.php");
			exit;
	}
    if($user == $_POST['user'] AND $pass_user == md5($_POST['pass']) ){
		$_SESSION['user'] = $user;
			header("Location: user.php");
			exit;
	}
    else echo '<div class="container"><div style=" width: 100%;"><p style="border: 1px solid red; color: #842029; background-color: #f8d7da;
				border-color: #f5c2c7; padding: 10px; text-align: center; "><b>Логін або пароль невірні!</b></p></div></div>';
}
?>
<!-- //Скріпт авторизації -->
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звіт за зміну</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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
                        Увійти
                    </a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="container">
        <div  class="content">
            <div class="alert">
                <div class="alert_autorization">
                    <span class="autorization">Аутентифікація</span>
                </div>
                <form method="post">
                    <div class="alert_user">
                        
                        <div class="alert_user_box">
                            <span class="alert_user_box-txt">Користувач</span>
                        </div>
                        <div class="alert_user_input">
                            <input type="text" name="user" class="user" id="user">
                        </div>
                    </div>
                    <div class="alert_user">
                        <div class="alert_user_box">
                            <span class="alert_user_box-txt">Пароль</span>
                        </div>
                        <div class="alert_user_input">
                            <input type="password" name="pass" class="password" id="password">
                        </div>
                    </div>

                    <div class="alert_button">
                       
                        <input class="button" type="submit" name="submit" value="Увійти" /> 
                        
                    </div>
                </form>
            </div>
        </div>
       
    
    </div>

</body>

</html>
