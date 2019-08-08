<?php
  function getAllMembers() {
    $result = queryMysql("SELECT user FROM members ORDER BY user");
    return $result;
  }

  function uFollow() {
    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='" . $row['user'] . "' AND friend='$user'");
    return $result1;
  }

  function followU() {
    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='$user' AND friend='" . $row['user'] . "'");
    return $result2;
  }
?>
