<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    include "vendor/autoload.php";
    include "model/model.php";
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Monolog\Handler\FirePHPHandler;

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); //NTU
    $contact = get_contact_by_id($id);
// create a log channel
$logger = new Logger('my_logger');
$logger->pushHandler(new StreamHandler('infos.log'));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info($contact['name']." ". 'a créé un pdf');


    include "vue/pdfVue.php";
