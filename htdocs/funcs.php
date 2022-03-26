<?php

function save_mess() {
    $indent = PHP_EOL.PHP_EOL;

    $stars = '***'.PHP_EOL;

    $dash = '---------------------------';

    $crew = 'Позивний: '.$_POST['crew'];

    $surname = 'Прізвище складу екіпажа: '.$_POST['surname'];

    $patrol = 'Патруль: '.$_POST['patrol'].' | Номер авто: '.$_POST['patrol_num'];

    $form_info_patrol = 'Викликів за зміну: '.$_POST['calls_for_change'].' | Адмін. нагляд: '.$_POST['admin_supervision'].' | Авто перевірено: '.$_POST['car_is_checked'].' | Осіб перевірено: '.$_POST['persons_checked'].PHP_EOL;

    $form_decree_el = 'Постанови електронні: '.$_POST['form_decree_el'].PHP_EOL.'Серія, №: '.$_POST['form_decree_el_input'].PHP_EOL.'Номер статті: '.$_POST['form_decree_el_article_input'].PHP_EOL;

    $persons_checked_papper = 'Постанови бумажні: '.$_POST['persons_checked_papper'].PHP_EOL.'Серія, №: '.$_POST[' form_decree_papper_input'].PHP_EOL.'Номер статті: '.$_POST['form_decree_papper_article_input'].PHP_EOL;

    $form_protocol = 'Протоколи: '.$_POST['form_protocol'].PHP_EOL.'Серія, №: '.$_POST['form_protocol_papper_input'].PHP_EOL.'Номер статті: '.$_POST['form_protocol_article_input'].PHP_EOL;

    $form_textarea_other = 'Інше: '.$_POST['form_textarea_other'];

    date_default_timezone_set("Europe/Kiev");
    $year_month_day = date('Y-m-d H:i').';';

    $str = $stars.$crew.PHP_EOL.$surname.PHP_EOL.$patrol.PHP_EOL.$form_info_patrol.PHP_EOL.$form_decree_el.PHP_EOL.$persons_checked_papper.PHP_EOL.$form_protocol.PHP_EOL.$form_textarea_other.PHP_EOL.$year_month_day.PHP_EOL.$dash.$indent;

    file_put_contents('zvits.doc', $str, FILE_APPEND);
    $mysqli = new mysqli("sql205.hostronavt.ru", "onavt_28931418", "54321", "onavt_28931418_zvits");
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if(isset($_POST['submit'])) {
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

    mysqli_query($mysqli, "INSERT INTO `zvitsdata` (`crew`, `surname`, `patrol`, `patrolNum`, `callsForChange`, `adminSupervision`, `carIsChecked`, `personsChecked`, `formDecreeEL`, `formDecreeELInput`, `formDecreeELArticleInput`, `personsCheckedPapper`, `formDecreePapperInput`, `formDecreePapperArticleInput`, `formProtocol`, `formProtocolPapperInput`, `formProtocolArticleInput`, `formTextareaOther`, `date`) VALUES ('$crew', '$surname', '$patrol', '$patrolNum', '$callsForChange', '$adminSupervision', '$carIsChecked', '$personsChecked', '$formDecreeEL', '$formDecreeELInput', '$formDecreeELArticleInput', '$personsCheckedPapper', '$formDecreePapperInput', '$formDecreePapperArticleInput', '$formProtocol', '$formProtocolPapperInput', '$formProtocolArticleInput', '$formTextareaOther', '$year_month_day')");


        mysqli_close($mysqli);
        if(!empty($_POST)){
            header("Location: {$_SERVER['PHP_SELF']}");
            exit;
        }
    }
}

