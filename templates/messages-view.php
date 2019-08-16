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

  <?php foreach ($messages as $row): ?>
    <?php if ($row['pm'] == 0 || $row['auth'] == $user || $row['recip'] == $user): ?>
      <?= date('M jS \'y g:ia:', $row['time']); ?>
      <a href='?page=messages?view=<?=$row['auth']?>'><?=$row['auth']?></a>
    <?php endif; ?>
    <?php if ($row['pm'] == 0): ?>
      wrote: &quot; <?=$row['message']?> &quot;
    <?php else: ?>
      whispered: <span class='whisper'>&quot; <?=$row['message']?> &quot;</span>
    <?php endif; ?>

    <?php if ($row['recip'] == $user): ?>
      [<a href='?page=messages?view=<?=$view?>&erase=<?=$row['id']?>'>erase</a>]
    <?php endif; ?>
    <br>
  <?php endforeach; ?>

  <?php if (!$num): ?>
    <br><span class='info'>No messages yet</span><br><br>
    <br>
  <?php endif; ?>
  <a data-role='button' href='?page=messages&view=<?=$view?>'>Refresh messages</a>

<?php require_once 'footer.php'; ?>
