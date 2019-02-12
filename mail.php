<?php
$config = include 'config.php';
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun($config['api_key']);
$domain = 'sandbox54f77f1c5d2c4ffc93e509a5b935ff89.mailgun.org';
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'	=> 'Excited User <mailgun@sandbox54f77f1c5d2c4ffc93e509a5b935ff89.mailgun.org>',
    'to'	=> 'Baz <samuelgfeller@bluewin.ch>',
    'subject' => 'Hello',
    'text'	=> 'Testing some Mailgun awesomness!'
));