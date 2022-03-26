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
                <li class="active">
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

        <main>
            <div class="info">
                <div class="info-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="info-content">
                    <span class="info_content-box">
                        Введіть інформацію
                    </span>
                </div>
            </div>
        
            <form action="submit.php" method="POST" class="form-user">
                <div class="form-crew">
                    <label for="crew">Позивний</label>
                    <select name="crew" class="crew" id="crew">
                        <option>Вибрати екіпаж</option>
                        <option>ДРАГУН-0101-(1 зміна)</option>
                        <option>ДРАГУН-0101-(2 зміна)</option>
                        <option>ДРАГУН-0102-(1 зміна)</option>
                        <option>ДРАГУН-0102-(2 зміна)</option>
                        <option>ДРАГУН-0103-(1 зміна)</option>
                        <option>ДРАГУН-0103-(2 зміна)</option>
                    </select>
                    <br>
                    <label for="surname">Прізвище складу екіпажа</label>
                    <input class="input"  required name="surname" type="text" id="surname" placeholder="Введіть прізвище">
                </div>

                <div class="form-patrol">
                    <div class="form-patrol-box m-r25px">
                        <label for="patrol">Патруль</label>
                        <select name="patrol" class="patrol" id="patrol">
                            <option>Вибрати патруль</option>
                            <option>SKODA</option>
                            <option>PRIUS</option>
                            <option>ПІШИЙ</option>
                            <option>ВЕЛО</option>
                        </select>
                    </div>
                    <div class="form-patrol-box">
                        <label for="patrol-num">Номер авто</label>
                        <select name="patrol_num" class="patrol" id="patrol-num">
                            <option>Вибрати номер</option>
                            <option>0000</option>
                            <option>1234</option>
                            <option>ПІШИЙ</option>
                            <option>ВЕЛО</option>
                        </select>
                    </div>
                </div>
                <hr>
                <br>
                <div class="form-info-patrol">

                    <div class="form-info-patrol-box  m-r25px">
                        <label for="calls-for-change">Викликів за зміну</label>
                        <select name="calls_for_change" class="calls-for-change" id="calls-for-change">
                            <option>Вибрати</option>
                            <script>
                                for (var d = 0; d <= 1000; d++) {
                                    document.write("<option>" + d + "</option>");
                                }
                            </script>
                        </select>
                    </div>

                    <div class="form-info-patrol-box  m-r25px">
                        <label for="admin-supervision">Адмін. нагляд</label>
                        <select name="admin_supervision" class="admin-supervision" id="admin-supervision">
                            <option>Вибрати</option>
                            <script>
                                for (var d = 0; d <= 1000; d++) {
                                    document.write("<option>" + d + "</option>");
                                }
                            </script>
                        </select>
                    </div>

                    <div class="form-info-patrol-box  m-r25px">
                        <label for="car-is-checked">Авто перевірено</label>
                        <select name="car_is_checked" class="car-is-checked" id="car-is-checked">
                            <option>Вибрати</option>
                            <script>
                                for (var d = 0; d <= 1000; d++) {
                                    document.write("<option>" + d + "</option>");
                                }
                            </script>
                        </select>
                    </div>

                    <div class="form-info-patrol-box  m-r25px">
                        <label for="persons-checked">Осіб перевірено</label>
                        <select name="persons_checked" class="persons-checked" id="persons-checked">
                            <option>Вибрати</option>
                            <script>
                                for (var d = 0; d <= 1000; d++) {
                                    document.write("<option>" + d + "</option>");
                                }
                            </script>
                        </select>
                    </div>
                </div>
                <hr>

                <div class="form-decree">
                    <label for="form-decree-el">Постанови електронні</label>
                    <select name="form_decree_el" class="form-decree-el" id="form-decree-el">
                        <option>Вибрати</option>
                        <script>
                            for (var d = 0; d <= 1000; d++) {
                                document.write("<option>" + d + "</option>");
                            }
                        </script>
                    </select>
                    <br>
                    <label for="form-decree-el-input">Серія, №</label>
                    <input class="input" name="form_decree_el_input" type="text" id="form-decree-el-input"
                        placeholder="Введіть серію електронної постанови">
                    <br>
                    <label for="form-decree-el-article-input">Номер статті</label>
                    <input class="input" name="form_decree_el_article_input" type="text" id="form-decree-el-article-input"
                        placeholder="Введіть номер статті електронної постанови">
                    <br>
                    <hr>
                    <br>
                    <label for="persons-checked-papper">Постанови бумажні</label>
                    <select name="persons_checked_papper" class="persons-checked-papper" id="persons-checked-papper">
                        <option>Вибрати</option>
                        <script>
                            for (var d = 0; d <= 1000; d++) {
                                document.write("<option>" + d + "</option>");
                            }
                        </script>
                    </select>
                    <br>
                    <label for="form-decree-papper-input">Серія, №</label>
                    <input class="input" name="form_decree_papper_input" type="text" id="form-decree-papper-input"
                        placeholder="Введіть серію бумажної постанови">
                    <br>
                    <label for="form-decree-papper-article-input">Номер статті</label>
                    <input class="input" name="form_decree_papper_article_input" type="text" id="form-decree-papper-article-input"
                        placeholder="Введіть номер статті бумажної постанови">
                </div>
                <hr>
                <br>

                <div class="form-protocol-box">
                    <label for="form-protocol">Протоколи</label>
                    <select name="form_protocol" class="form-protocol" id="form-protocol">
                        <option>Вибрати</option>
                        <script>
                            for (var d = 0; d <= 1000; d++) {
                                document.write("<option>" + d + "</option>");
                            }
                        </script>
                    </select>
                    <br>
                    <label for="form-protocol-papper-input">Серія, №</label>
                    <input class="input" name="form_protocol_papper_input" type="text" id="form-protocol-papper-input"
                        placeholder="Введіть серію протоколу">
                    <br>
                    <label for="form-protocol-article-input">Номер статті</label>
                    <input class="input" name="form_protocol_article_input" type="text" id="form-protocol-article-input"
                        placeholder="Введіть номер статті протоколу">
                </div>
                <hr>
                <br>
                <div class="form-textarea">
                    <label for="form-textarea-other">Інше</label>
                    <br>
                    <textarea name="form_textarea_other" id="form-textarea-other"></textarea>
                </div>
                <div class="user_form-button">
                    <input class="button" type="submit" name="submit" value="Відправити">
                </div>
            </form>

        </main>

    <?php
        require_once "footer.php";
    ?>
    </div>
 
</body>

</html>
