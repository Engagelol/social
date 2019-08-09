<?php require_once 'header.php'; ?>

  <h3><?=$name?> Profile</h3>

  <?php showProfile($view); ?>

  <a
    data-role='button'
    data-transition='slide'
    href='?page=messages&view=<?=$view?>'>View <?=$name?> messages</a>

  <h3>Other Members</h3>
  <ul>
    <?php foreach ($connections as $connection): ?>
      <li><a data-transition='slide' href='?page=members&view<?=connection['user']?>'><?=$connection['user']?></a>

      <?php $follow = "follow"; ?>

      <?php if (($connection["t1"] + $connection["t2"]) > 1): ?>  &harr; is a mutual friend
        <?php elseif ($connection["t1"]):                     ?>  &larr; you are following
        <?php elseif ($connection["t2"]):                     ?>  &rarr; is following you
        <?php $follow = "recip"; ?>
      <?php endif; ?>

      <?php if (!$connection["t1"]): ?> [<a data-transition='slide' href='?page=members&add=<?=$connection['user']?>'><?=$follow?></a>]
        <?php else: ?>      [<a data-transition='slide' href='?page=members&remove=<?=$connection['user']?>'>drop</a>]
      </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

<?php require_once 'footer.php'; ?>
