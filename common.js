
function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
function S(i) { return O(i).style                                            }
function C(i) { return document.getElementsByClassName(i)                    }

//Used by signup.php onBlur form
function checkUser(user) {
  if (user.value == '') {
    $('#used').html('&nbsp;')
    return
  }

  $.post(
    'checkuser.php',
    { user : user.value },
    function(data)
    {
      $('#used').html(data)
    }
  )
}
