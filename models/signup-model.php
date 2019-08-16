<?php

  function signup_check_name_exist($user) {
    return queryMysql("SELECT * FROM members WHERE user='$user'");
  }

  function signup_create_user($user, $pass) {
    queryMysql("INSERT INTO members VALUES('$user', '$pass')");
  }
