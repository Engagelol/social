<?php require_once 'header.php'; ?>

  <h3><?=$name?> Profile</h3>

  <?php showProfile($view); ?>

  <a data-role='button' data-transition='slide'
          href='?page=messages&view=<?=$view?>'>View <?=$name?> messages
  </a>

  <h3>Other Members</h3>
  <ul>

    <?php for ($j = 0 ; $j < $num ; ++$j):
      $row = $allMembers->fetch_array(MYSQLI_ASSOC);
      if ($row['user'] == $user) continue;
      ?>
      <li><a data-transition='slide' href='?page=members&view=
        <?=$row['user']?>'><?=$row['user']?></a>
      <?php $follow = "follow"; ?>

      <?php if (($t1 + $t2) > 1): ?>  &harr; is a mutual friend
        <?php elseif ($t1):       ?>  &larr; you are following
        <?php elseif ($t2):       ?>  &rarr; is following you
        <?php $follow = "recip"; ?>
      <?php endif; ?>

      <?php if (!$t1): ?> [<a data-transition='slide'
          href='?page=members&add=<?=$row['user']?>'><?=$follow?></a>]
        <?php else: ?>      [<a data-transition='slide'
          href='?page=members&remove=<?=$row['user']?>'>drop</a>]
      </li>
      <?php endif; ?>
    <?php endfor; ?>
  </ul>

<?php require_once 'footer.php'; ?>
