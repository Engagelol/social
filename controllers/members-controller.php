<?php
  if (!$loggedin) die();
  if (isset($_GET['view']))
  {
    $view = sanitizeString($_GET['view']);

    if ($view == $user) $name = "Your";
    else                $name = "$view's";
  }

  if (isset($_GET['add']))
  {
    $add = sanitizeString($_GET['add']);

    $result = prep_for_add_friend($add, $user);
    if (!$result->num_rows)
      add_friend($add, $user);
  }
  elseif (isset($_GET['remove']))
  {
    $remove = sanitizeString($_GET['remove']);
    delete_friend($remove, $user);
  }

  $connections = get_connections_for_user($user);
