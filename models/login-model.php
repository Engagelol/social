<?php
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "Invalid login attempt";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class='center'>You are now logged in. Please
<<<<<<< HEAD
             <a data-transition='slide' href='members.php?view=$user'>click here</a>
             to continue.");
=======
             <a data-transition='slide' href='members.php?view=<?=$user?>'>click here</a>
             to continue.</div></div></body></html>");
>>>>>>> 03aa9cd37964960687af7bb01c8a9d41f98029dd
      }
    }
  }
?>
