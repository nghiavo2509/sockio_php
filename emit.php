<?php
require __DIR__ . './vendor/autoload.php';

use ElephantIO\Client;
// use ElephantIO\Engine\SocketIO\Version2X;

// try {
//     $version = new Version2X("http://localhost:3001");
//     $client = new Client($version);
//     $client->initialize();
//     $client->emit("chat-message", ["test" => "test", "test1" => "test1"]);
//     $client->close();
// } catch (ElephantIO\Exception\ServerConnectionFailureException $e) {

//     echo $e->getErrorMessage();
//     exit;
// }

use ElephantIO\Engine\SocketIO\Version1X;

try {
    $client = new Client(new Version1X('http://localhost:3001'));

    $client->initialize();
    $client->emit('chat-message', ['foo' => 'bar']);
    $client->close();
} catch (ElephantIO\Exception\ServerConnectionFailureException $e) {
    echo $e->getErrorMessage();
}
