<?php

if(isset($_POST["id"]))

{

    $conn = new mysqli("sql205.hostronavt.ru", "onavt_28931418", "54321", "onavt_28931418_zvits");

	

    if($conn->connect_error){

        die("Ошибка: " . $conn->connect_error);

    }

	

    $zvitsid = $conn->real_escape_string($_POST["id"]);

	

    $sql = "DELETE FROM zvitsdata WHERE id = '$zvitsid'";

    if($conn->query($sql)){

         

        header("Location: admin.php");

    }

    else{

        echo "Ошибка: " . $conn->error;

    }

    $conn->close();  

}

?>