<?php

  function new_message($user, $view, $pm, $time, $text) {
    queryMysql("INSERT INTO messages VALUES(NULL, '$user',
      '$view', '$pm', $time, '$text')");
  }

  function erase_message($erase, $user) {
    queryMysql("DELETE FROM messages WHERE id=$erase AND recip='$user'");
  }

  function get_messages($view) {
    $query  = "SELECT * FROM messages WHERE recip='$view' ORDER BY time DESC";
    $result = queryMysql($query);
    return $result;
  }

  function get_num_rows($result) {
    $n = $result->num_rows;
    return $n;
  }
