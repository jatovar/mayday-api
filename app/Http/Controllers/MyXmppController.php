<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Fabiang\Xmpp\Options;
use Fabiang\Xmpp\Client;
use Fabiang\Xmpp\Protocol\Presence;
use Fabiang\Xmpp\Protocol\Message;


class MyXmppController extends Controller
{

  public function connect(){

    $address  = "tcp://10.0.2.2:5222";
    $username = "diego_spa";
    $password = "123";

    //return $address;
    $options = new Options($address);
    $options->setUsername($username)
    ->setPassword($password);

    $client = new Client($options);
    $client->connect();

    // set status to online
    $client->send(new Presence);

    // send a message to another user
    //$message = new Message;
    //$message->setMessage('test')
    //->setTo('jorge_spa@jorge-latitude-e5440');
    //$client->send($message);
    sleep(1);
    $client->disconnect();


  }



}
