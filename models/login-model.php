<?php

  function user_login($user, $pass) {
    $result = queryMySQL("SELECT user,pass FROM members
      WHERE user='$user' AND pass='$pass'");
    return $result;
  }
