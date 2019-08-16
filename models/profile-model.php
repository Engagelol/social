<?php

  function get_user_profile($user) {
    return queryMysql("SELECT * FROM profiles WHERE user='$user'");
  }

  function update_user_about($text, $user) {
    queryMysql("UPDATE profiles SET text='$text' where user='$user'");
  }

  function create_user_about($user, $text) {
    queryMysql("INSERT INTO profiles VALUES('$user', '$text')");
  }

  function output_text_clear_strips($result) {
    $row  = $result->fetch_array(MYSQLI_ASSOC);
    $text = stripslashes($row['text']);
    return $text;
  }
