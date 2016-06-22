<?php 
require_once 'vendor/autoload.php';
use Greetings\SayHello;
use Greetings\Validators\LanguageValidate;

SayHello::out('en');
SayHello::out('es');
SayHello::out('fr');

echo LanguageValidate::isSupported('en');
echo LanguageValidate::isSupported('es');
echo LanguageValidate::isSupported('fr');

