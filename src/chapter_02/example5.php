<?php

if (isset($_POST['email'])) {
  // 소문자일 경우에만 해당된다.
  if ($_POST['email'] == 'cloudshadow@gmail.com') {
    print "환영합니다, XXX님";
  } else {
    print "유효하지 않은 이메일입니다.";
  }

  print <<<_HTMLBLOCK_
      <hr />
    _HTMLBLOCK_;
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

print <<<_HTMLBLOCK_
  <form method="post" action="$_SERVER[PHP_SELF]">
    이메일 : <input type="text" name="email" value='$email' />
    <br />
    <button type="submit">전송</button>
  </form>
_HTMLBLOCK_;
?>