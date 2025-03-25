<?php

if (isset($_POST['email'])) {
  // 대소문자를 신경쓰지 않는 방법
  if (strcasecmp($_POST['email'], 'cloudshadow@gmail.com') == 0) {
    print "다시 뵙게되어 반갑습니다, XXX님";
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