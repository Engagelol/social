<?php

  if (isset($_GET['add']))
  {
    $add = sanitizeString($_GET['add']);

    $result = queryMysql("SELECT * FROM friends WHERE user='$add' AND friend='$user'");
    if (!$result->num_rows)
      queryMysql("INSERT INTO friends VALUES ('$add', '$user')");
  }
  elseif (isset($_GET['remove']))
  {
    $remove = sanitizeString($_GET['remove']);
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
