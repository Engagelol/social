<?php
  if (!$loggedin) die();


  if (isset($_GET['view'])) $view = sanitizeString($_GET['view']);
  else                      $view = $user;

  if ($view == $user)
  {
    $name1 = $name2 = "Your";
    $name3 =          "You are";
  }
  else
  {
    $name1 = "<a data-transition='slide'
              href='?page=members&view=$view'>$view</a>'s";
    $name2 = "$view's";
    $name3 = "$view is";
  }

  $result = get_friends($view);
  $num = get_num_rows($result);

  $followers = array();
  $following = array();


  foreach ($result as $row) {
    $followers[] = $row['friend'];
  }
  // for ($j = 0 ; $j < $num ; ++$j)
  // {
  //   $row           = $result->fetch_array(MYSQLI_ASSOC);
  //   $followers[$j] = $row['friend'];
  // }

  $result = get_friends_view($view);
  $num = get_num_rows($result);

  foreach ($result as $row) {
    $following[] = $row['user'];
  }
  // for ($j = 0 ; $j < $num ; ++$j)
  // {
  //     $row           = $result->fetch_array(MYSQLI_ASSOC);
  //     $following[$j] = $row['user'];
  // }

  $mutual    = array_intersect($followers, $following);
  $followers = array_diff($followers, $mutual);
  $following = array_diff($following, $mutual);
  $friends   = FALSE;
