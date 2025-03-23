<?php
 require __DIR__ . '/../vendor/autoload.php';

  $options = array(
    'cluster' => 'sa1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'pusherKey',
    'pusherKey',
    'pusherKey',
    $options
  );


$pusher->trigger('presence-geraldo', 'zap', array('message' => $_POST['msg'], 'username' => $_POST['username']));

?>