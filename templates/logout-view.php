<?php require_once 'header.php'; ?>

  <?php if (isset($_SESSION['user'])): ?>
    <?php destroySession(); ?>
    <br>
    <div class='center'>You have been logged out. Please
         <a data-transition='slide' href='../index.php'>click here</a>
         to refresh the screen.
    </div>

  <?php else: ?>
    <div class='center'>You cannot log out because
             you are not logged in
    </div>
  <?php endif; ?>
<?php require_once 'footer.php'; ?>
