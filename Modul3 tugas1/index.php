<?php
require 'Traits/MessageTrait.php';
require 'Controller/MainController.php';
require 'NamespaceDemo/Greetings.php';

use Controller\SubController;
use NamespaceDemo\Greetings;

$controller = new SubController("User");
echo $controller;
$controller->displayMessage();
Greetings::displayWelcome();
?>
