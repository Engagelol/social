<?php require_once 'header.php'; ?>

  <h3>Your Profile</h3>

  <?php showProfile($user); ?>
      <form data-ajax='false' method='post'
        action='profile.php' enctype='multipart/form-data'>
        <h3>Enter or edit your details and/or upload an image</h3>
        <textarea name='text'><?=$text?></textarea><br>
        Image: <input type='file' name='image' size='14'>
        <input type='submit' value='Save Profile'>
      </form>

<?php require_once 'footer.php'; ?>
