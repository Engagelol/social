<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
    <script src='javascript.js'></script>
    <script src='jquery-2.2.4.min.js'></script>
    <script src='jquery.mobile-1.4.5.min.js'></script>
    <title>Social: <?php echo $userstr ?></title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>Social</div>
        <div class='username'><?php echo $userstr ?></div>
      </div>
      <div data-role='content'>
        <h1><?= $page_title ?></h1>
        <?php foreach ($products as $product): ?>
          <h3><?= $product['title'] ?></h3>
          <p><?= $product['content'] ?></p>
        <?php endforeach; ?>
        <?php if ($loggedin): ?>
          <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=<?= $user ?>'>Home</a>
            <a data-role='button' data-inline='true' data-icon='user' data-transition="slide" href='members.php'>Members</a>
            <a data-role='button' data-inline='true' data-icon='cart' data-transition="slide" href='/?page=products'>Products</a>
            <a data-role='button' data-inline='true' data-icon='heart' data-transition="slide" href='friends.php'>Friends</a><br>
            <a data-role='button' data-inline='true' data-icon='mail' data-transition="slide" href='messages.php'>Messages</a>
            <a data-role='button' data-inline='true' data-icon='edit' data-transition="slide" href='profile.php'>Edit Profile</a>
            <a data-role='button' data-inline='true' data-icon='action' data-transition="slide" href='logout.php'>Log out</a>
          </div>
        <?php else: ?>
          <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition='slide' href='index.php'>Home</a>
            <a data-role='button' data-inline='true' data-icon='cart' data-transition="slide" href='/?page=products'>Products</a>
            <a data-role='button' data-inline='true' data-icon='plus' data-transition="slide" href='signup.php'>Sign Up</a>
            <a data-role='button' data-inline='true' data-icon='check' data-transition="slide" href='login.php'>Log In</a>
          </div>
          <p class='info'>(You must be logged in to use this app)</p>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>