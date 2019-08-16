<?php require_once 'header.php'; ?>

<!--  // Uncomment this line if you wish the user�s profile to show here
  // showProfile($view); -->

  <br>

  <?php if (sizeof($mutual)): ?>
    <span class='subhead'><?=$name2?> mutual friends</span>
    <ul>
      <?php foreach($mutual as $friend): ?>
      <li><a data-transition='slide'
            href='?page=members&view=<?=$friend?>'><?=$friend?></a>";
      <?php endforeach; ?>
    </ul>
    <?php $friends = TRUE; ?>
  <?php endif; ?>

  <?php if (sizeof($followers)): ?>
    <span class='subhead'><?=$name2?> followers</span>
    <ul>
      <?php foreach($followers as $friend): ?>
      <li><a data-transition='slide'
          href='?page=members&view=<?=$friend?>'><?=$friend?></a>";
      <?php endforeach; ?>
    </ul>
    <?php $friends = TRUE; ?>
  <?php endif; ?>


  <?php if (sizeof($following)): ?>
    <span class='subhead'><?=$name3?> following</span>
    <ul>
      <?php foreach($following as $friend): ?>
      <li><a data-transition='slide'
            href='?page=members&view=<?=$friend?>'><?=$friend?></a>
      <?php endforeach; ?>
    </ul>
    <?php $friends = TRUE; ?>
  <?php endif; ?>


  <?php if (!$friends): ?>
    <br>
    <span>You don't have any friends yet.</span>
  <?php endif; ?>

<?php require_once 'footer.php'; ?>
