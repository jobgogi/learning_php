<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // here 문서라고 불리는 문자열 구분을 사용하여 HTML을 출력
    // $_SERVER['PHP_SELF']는 현재 페이지의 URL을 담고 있는 특별한 변수
    print $_SERVER['PHP_SELF'];

    print <<<_HTML_
      <form method="POST" action="$_SERVER[PHP_SELF]">
        이름 : <input type="text" name="user" />
        <br />
        <button type="submit">인사</button>
      </form>
    _HTML_;
  ?>
</body>
</html>