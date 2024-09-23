<?php

require_once "vendor/autoload.php";
require_once "src/functions.php";

use Smarty\Smarty;

session_start();

$template = new Smarty();
$template->setTemplateDir("templates");

$page = $_GET['page'] ?? null;
switch($page){
    case 'form' :

        $template->display('form.tpl');
        break;
    case 'result':
        // $_POST['email'] , $_POST['password'] , $_POST['check']
        $email = sanitizeInput($_POST['email']) ?? null;
        $_SESSION['email'] = upperCaseInput($email);
        $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);


    //    $template->assign('email', $_SESSION['email']);
    //    $template->assign('password', $_SESSION['password']);
        $template->assign('data' , $_SESSION);

        $template->display('result.tpl');
        break;

    case 'test':

        break;
    default;
    $template->display('home.tpl');
}
?>