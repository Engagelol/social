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

  if (isset($_POST['text']))
    {
      $text = sanitizeString($_POST['text']);

      if ($text != "")
      {
        $pm   = substr(sanitizeString($_POST['pm']),0,1);
        $time = time();
        new_message($user, $view, $pm, $time, $text);
      }
  }
  if (isset($_GET['erase']))
  {
    $erase = sanitizeString($_GET['erase']);
    erase_message($erase, $user);
  }

  $messages = get_messages($view);
  $num = get_num_rows($messages);
