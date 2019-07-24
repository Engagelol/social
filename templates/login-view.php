<?php require 'header.php'; ?>

      <form method='post' action='login-model.php'>
        <div data-role='fieldcontain'>
          <label></label>
          <span class='error'><?=$error?></span>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          Please enter your details to log in
        </div>
        <div data-role='fieldcontain'>
          <label>Username</label>
          <input type='text' maxlength='16' name='user' value='<?=$user?>'>
        </div>
        <div data-role='fieldcontain'>
          <label>Password</label>
          <input type='password' maxlength='16' name='pass' value='<?=$pass?>'>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          <input data-transition='slide' type='submit' value='Login'>
        </div>
      </form>

<?php require 'footer.php'; ?>
