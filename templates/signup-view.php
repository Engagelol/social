<?php require 'header.php'; ?>

<<<<<<< HEAD
      <form method='post' action='?page=signup'><?=$error?>
=======
      <form method='post' action='signup-model.php'><?=$error?>
>>>>>>> 2dd9a10f8be4139fe439817f63ebb4e2e99a4714
      <div data-role='fieldcontain'>
        <label></label>
        Please enter your details to sign up
      </div>
      <div data-role='fieldcontain'>
        <label>Username</label>
        <input type='text' maxlength='16' name='user' value='<?=$user?>'
          onBlur='checkUser(this)'>
        <label></label><div id='used'>&nbsp;</div>
      </div>
      <div data-role='fieldcontain'>
        <label>Password</label>
        <input type='text' maxlength='16' name='pass' value='<?=$pass?>'>
      </div>
      <div data-role='fieldcontain'>
        <label></label>
        <input data-transition='slide' type='submit' value='Sign Up'>
      </div>

<?php require 'footer.php'; ?>
