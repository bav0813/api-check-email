#### Задача

_Для начала работы над проектом - сделайте Fork и работайте в своем репозитории._

_Подробнее об API можно узнать здесь: https://php-academy.kiev.ua/video/view/896-rest-api_

1. Пройти регистрацию на https://mailboxlayer.com/ и получить API ключ (уникальный ключ, "пароль", который дает доступ к API)
2. Создать форму обратной связи с bootstrap, в которой будет email адрес и textarea для отправки сообщения
3. При отправке формы обращаться к сервису http://apilayer.net/api/check?access_key=`ВАШ_КЛЮЧ`&email=`EMAIL_АДРЕС_С_ФОРМЫ`&smtp=1&format=1 с помощью `file_get_contents` и получать из JSON ответа ассоциативный массив.
    
    Пример URL запроса: http://apilayer.net/api/check?access_key=`65fabd2a8731bd8de07ac49dbbf5a3d5`&email=`oleg.shumar@gmail.com`&smtp=1&format=1 
4. Если хотя бы одно из значений `"format_valid":true, "mx_found":true, "smtp_check":true` равно false, то выдавать сообщение "Ваш адрес не прошел проверку. Сообщение не отправлено.". В противном случае, писать сообщение с контактной формы в папку `inbox/`, используя в названии сообщения uniqid() и time()