<?php

  function get_friends($view) {
    $result = queryMysql("SELECT * FROM friends WHERE user='$view'");
    return $result;
  }

  function get_friends_view($view) {
    $result = queryMysql("SELECT * FROM friends WHERE friend='$view'");
    return $result;
  }

  function get_num_rows($result) {
    $n = $result->num_rows;
    return $n;
  }
