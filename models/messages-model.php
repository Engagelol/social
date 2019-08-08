<?php
  if (isset($_POST['text']))
    {
      $text = sanitizeString($_POST['text']);

      if ($text != "")
      {
        $pm   = substr(sanitizeString($_POST['pm']),0,1);
        $time = time();
        queryMysql("INSERT INTO messages VALUES(NULL, '$user',
          '$view', '$pm', $time, '$text')");
      }
  }
  if (isset($_GET['erase']))
  {
    $erase = sanitizeString($_GET['erase']);
    queryMysql("DELETE FROM messages WHERE id=$erase AND recip='$user'");
  }

  $query  = "SELECT * FROM messages WHERE recip='$view' ORDER BY time DESC";
  $result = queryMysql($query);
  $num    = $result->num_rows;
?>
