<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 17.02.18
     * Time: 20:29
     */

    
    $log_folder='inbox'.DIRECTORY_SEPARATOR;
    $log_file='message.log';

    $key="b400170e94510c06debbba401aad9bd7";

    if (isset($_GET['input_email'])) {

        $email=$_GET['input_email'];
    }

    else {
        die ("Required field \"email\" wasn't set");
    }


    $URI="http://apilayer.net/api/check?access_key=$key&email=$email&smtp=1&format=1";
    $response=file_get_contents($URI);
    $response=json_decode($response,true);

    //Если хотя бы одно из значений "format_valid":true, "mx_found":true, "smtp_check":true равно false,
    // то выдавать сообщение "Ваш адрес не прошел проверку. Сообщение не отправлено.". В противном случае,
    // писать сообщение с контактной формы в папку inbox/, используя в названии сообщения uniqid() и time()

    if ($response['format_valid']==false || $response['mx_found']==false || $response['smtp_check']==false) {


        echo "Ваш адрес не прошел проверку.Сообщение не отправлено.";

    }
    else
    {
        echo "Записываем лог в файл...";
        if (!is_dir($log_folder)) {
            mkdir($log_folder,0777);
        }
            $h1 = fopen($log_folder.$log_file, 'a+');
            $msg=uniqid(). '  ' . date('H:i:s',time()). '  '. $_GET['txtarea']. PHP_EOL;
            fwrite($h1, $msg);
            fclose($h1);


    }
