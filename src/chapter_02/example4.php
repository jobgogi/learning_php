<?php
// $_POST['zipcode']는 폼 매개변수 "zipcode"로 제출된 값을 담는다.
if (isset($_POST['zipcode'])) {
  // 축약형 코드
  if (strlen(trim($_POST['zipcode'])) != 5) {
    print "우편번호를 5자리로 입력해주세요";
    print <<<_HTMLBLOCK_
      <hr />
    _HTMLBLOCK_;
  }
}

$zipcode = isset($_POST['zipcode']) ? trim($_POST['zipcode']) : '';

print <<<_HTMLBLOCK_
  <form method="post" action="$_SERVER[PHP_SELF]">
    우편번호 : <input type="text" name="zipcode" value='$zipcode' />
    <br />
    <button type="submit">전송</button>
  </form>
_HTMLBLOCK_;
?>