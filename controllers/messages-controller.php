<?php
  if (!$loggedin) die();

  if (isset($_GET['view']))
    $view = sanitizeString($_GET['view']);
  else
    $view = $user;

  if ($view != "") {
    if ($view == $user)
      $name1 = $name2 = "Your";
    else {
      $name1 = "<a href='?page=members&view=$view'>$view</a>'s";
      $name2 = "$view's";
    }
  }
