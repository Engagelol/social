<?php
  $error = $user = $pass = "";
  if (isset($_SESSION['user'])) destroySession();

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered<br><br>';
    else
      $result = signup_check_name_exist($user);

    if ($result->num_rows)
        $error = 'That username already exists<br><br>';
    else
    {
        signup_create_user($user, $pass);

        die("<h4>Account created</h4><a href='?page=login'>Please Log in.</a>");
    }
  }
