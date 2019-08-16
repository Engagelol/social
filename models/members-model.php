<?php

  function prep_for_add_friend($add, $user) {
    $result = queryMysql("SELECT * FROM friends WHERE user='$add' AND friend='$user'");
    return $result;
  }

  function add_friend($add, $user) {
    queryMysql("INSERT INTO friends VALUES ('$add', '$user')");
  }

  function delete_friend($remove, $user) {
    queryMysql("DELETE FROM friends WHERE user='$remove' AND friend='$user'");
  }

  function getAllMembers() {
    $result = queryMysql("SELECT user FROM members ORDER BY user");
    return $result;
  }

  function uFollow($user, $friend) {
    $result = queryMysql("SELECT * FROM friends WHERE
      user='" . $friend['user'] . "' AND friend='$user'");
    return $result;
  }

  function followU($user, $friend) {
    $result = queryMysql("SELECT * FROM friends WHERE
      user='$user' AND friend='" . $friend['user'] . "'");
    return $result;
  }

  function get_connections_for_user($user) {
    $allMembers = getAllMembers();
    $result = [];
    foreach ($allMembers as $member) {
      if ($member['user'] == $user) continue;
      $uFollow = uFollow($user, $member);
      $t1 = $uFollow->num_rows;
      $followU = followU($user, $member);
      $t2 = $followU->num_rows;
      $result[] = ["user" => $member["user"], "t1" => $t1, "t2" => $t2];
    }
    return $result;
  }

?>
