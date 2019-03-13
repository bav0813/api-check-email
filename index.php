
<!--Пройти регистрацию на https://mailboxlayer.com/ и получить API ключ (уникальный ключ, "пароль", который
дает доступ к API).Создать форму обратной связи с bootstrap, в которой будет email адрес и textarea для
отправки сообщения

При отправке формы обращаться к сервису http://apilayer.net/api/check?access_key=ВАШ_КЛЮЧ&email=EMAIL_АДРЕС_С_ФОРМЫ&smtp=1&format=1
с помощью file_get_contents и получать из JSON ответа ассоциативный массив.

Пример URL запроса: http://apilayer.net/api/check?access_key=65fabd2a8731bd8de07ac49dbbf5a3d5&email=oleg.shumar@gmail.com&smtp=1&format=1

Если хотя бы одно из значений "format_valid":true, "mx_found":true, "smtp_check":true равно false,
то выдавать сообщение "Ваш адрес не прошел проверку. Сообщение не отправлено.". В противном случае, писать
сообщение с контактной формы в папку inbox/, используя в названии сообщения uniqid() и time()-->





<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 17.02.18
     * Time: 18:19
     */

    ?>

<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">

</head>
    <body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <form method="get" action="api-check-email.php">
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" name="input_email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>


        <div class="form-group">
            <label for="Textarea1">Textarea</label>
            <textarea class="form-control" id="Textarea1" name="txtarea" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</head>
</html>