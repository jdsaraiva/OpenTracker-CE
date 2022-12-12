<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Get values via POST
// REST APIs PHP ?
// TODO validate user unique key -
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();
//$username = $_SESSION["username"];

//echo "Starting...";

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

$msg = new AMQPMessage('Hello World! - ');
$channel->basic_publish($msg, '', 'hello');

//echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();

