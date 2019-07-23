<?php
  $userstr = 'Welcome Guest';
  $pagetitle = 'Hello';

  if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
  }
  else $loggedin = FALSE;
?>
