<?php require_once 'header.php'; ?>

  <h3><?=$name1?> Messages</h3>
  
  <?php showProfile($view); ?>

  <form method='post' action='?page=messages&view=<?=$view?>'>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Type here to leave a message</legend>
      <input type='radio' name='pm' id='public' value='0' checked='checked'>
      <label for="public">Public</label>
      <input type='radio' name='pm' id='private' value='1'>
      <label for="private">Private</label>
    </fieldset>
    <textarea name='text'></textarea>
    <input data-transition='slide' type='submit' value='Post Message'>
  </form><br>

<?php date_default_timezone_set('UTC'); ?>

<? //РАЗОБРАТЬ!!!!!!!!!!!!!!!!!!
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      if ($row['pm'] == 0 || $row['auth'] == $user || $row['recip'] == $user)
      {
        echo date('M jS \'y g:ia:', $row['time']);
        echo " <a href='messages.php?view=" . $row['auth'] .
             "'>" . $row['auth']. "</a> ";

        if ($row['pm'] == 0)
          echo "wrote: &quot;" . $row['message'] . "&quot; ";
        else
          echo "whispered: <span class='whisper'>&quot;" .
            $row['message']. "&quot;</span> ";

        if ($row['recip'] == $user)
          echo "[<a href='messages.php?view=$view" .
               "&erase=" . $row['id'] . "'>erase</a>]";

        echo "<br>";
      }
    }
  }
?>

  <?php if (!$num): ?>
    <br><span class='info'>No messages yet</span><br><br>";
    <br>
    <a data-role='button'
        href='?page=messages&view=<?=$view?>'>Refresh messages
    </a>
  <?php endif; ?>
<?php require_once 'footer.php'; ?>
