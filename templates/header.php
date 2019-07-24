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
    <title>Social: <?=$userstr?></title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>Social</div>
        <div class='username'><?=$userstr?></div>
      </div>
      <div data-role='content'>
        <?php if ($loggedin): ?>
          <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=<?=$user?>'>Home</a>
            <a data-role='button' data-inline='true' data-icon='user' data-transition="slide" href='/?page=members'>Members</a>
            <a data-role='button' data-inline='true' data-icon='cart' data-transition="slide" href='/?page=products'>Products</a>
            <a data-role='button' data-inline='true' data-icon='heart' data-transition="slide" href='/?page=friends'>Friends</a><br>
            <a data-role='button' data-inline='true' data-icon='mail' data-transition="slide" href='/?page=messages'>Messages</a>
            <a data-role='button' data-inline='true' data-icon='edit' data-transition="slide" href='/?page=profile'>Edit Profile</a>
            <a data-role='button' data-inline='true' data-icon='action' data-transition="slide" href='/?page=logout'>Log out</a>
          </div>
        <?php else: ?>
          <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition='slide' href='index.php'>Home</a>
            <a data-role='button' data-inline='true' data-icon='cart' data-transition="slide" href='/?page=products'>Products</a>
            <a data-role='button' data-inline='true' data-icon='plus' data-transition="slide" href='/?page=signup'>Sign Up</a>
            <a data-role='button' data-inline='true' data-icon='check' data-transition="slide" href='/?page=login'>Log In</a>
          </div>
          <p class='info'>(You must be logged in to use this app)</p>
        <?php endif; ?>
      </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    </div>
>>>>>>> 03aa9cd37964960687af7bb01c8a9d41f98029dd
>>>>>>> 2dd9a10f8be4139fe439817f63ebb4e2e99a4714
