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
    {
      $result = queryMysql("SELECT * FROM members WHERE user='$user'");

      if ($result->num_rows)
        $error = 'That username already exists<br><br>';
      else
      {
        queryMysql("INSERT INTO members VALUES('$user', '$pass')");
<<<<<<< HEAD
        die("<h4>Account created</h4><a href='?page=login'>Please Log in.</a>");
=======
        die('<h4>Account created</h4>Please Log in.');
>>>>>>> 2dd9a10f8be4139fe439817f63ebb4e2e99a4714
      }
    }
  }
?>
