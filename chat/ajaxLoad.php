<?php
  include 'connect.php';
  $messagesLoad = $connect->prepare("SELECT * FROM messages");
  $messagesLoad->execute();
  $allMessages = $messagesLoad->fetchAll();
  foreach ($allMessages as $key => $value)
  {
	  echo '<div class="message">' . $value['message'] . '</div>';
	  echo '<span class="time">' . $value['message_time'] . '</span>';
  }
  