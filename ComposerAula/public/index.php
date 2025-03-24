<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Greetings;
use App\Logger;

$greetings = new Greetings();
echo $greetings->message('John Doe');

(new Logger())->write('John Doe accessed the aplication');