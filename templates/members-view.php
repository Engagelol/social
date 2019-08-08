<?php require_once 'header.php'; ?>

  <h3><?=$name?> Profile</h3>

  <?php showProfile($view); ?>

  <a data-role='button' data-transition='slide'
          href='?page=messages&view=<?=$view?>'>View <?=$name?> messages
  </a>

  <h3>Other Members</h3>
  <ul>
<?//РАЗОБРАТЬ!!!!!!!
  for ($j = 0 ; $j < $num ; ++$j)
  {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['user'] == $user) continue;

    echo "<li><a data-transition='slide' href='?page=members&view=" .
      $row['user'] . "'>" . $row['user'] . "</a>";
    $follow = "follow";

    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='" . $row['user'] . "' AND friend='$user'");
    $t1      = $result1->num_rows;
    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='$user' AND friend='" . $row['user'] . "'");
    $t2      = $result1->num_rows;

    if (($t1 + $t2) > 1) echo " &harr; is a mutual friend";
    elseif ($t1)         echo " &larr; you are following";
    elseif ($t2)       { echo " &rarr; is following you";
                         $follow = "recip"; }

    if (!$t1) echo " [<a data-transition='slide'
      href='members.php?add=" . $row['user'] . "'>$follow</a>]";
    else      echo " [<a data-transition='slide'
      href='members.php?remove=" . $row['user'] . "'>drop</a>]";
  }
?>
  </ul>

<?php require_once 'footer.php'; ?>
