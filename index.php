<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 첫인사</title>
</head>
<body>
  <strong>
  <?php
    print "Hello, World!";
  ?>
  </strong>
  <form method="POST" action="src/sayhello.php">
    이름 : <input type="text" name="user" />
    <br />
    <button type="submit">인사</button>
  </form>
  <?php
    if (!empty($_POST['user'])) {
      print "Hello, ";
      print $_POST['user'];
      print "!";
    } else {
      print <<<_HTML_
        <form method="post" action="$_SERVER[PHP_SELF]">
          이름 : <input type="text" name="user" />
          <br />
          <button type="submit">인사</button>
        </form>
      _HTML_;
    }

    print "한국의 대략적인 인구: ";
    print number_format(50801405);
  ?>
<div>
  <?php
    $db = new PDO('sqlite:dinner.db');
    $meals = array('아침', '점심', '저녁');

    if (!empty($_POST['meal']) && in_array($_POST['meal'], $meals)) {
      $stmt = $db->prepare('SELECT dish, price FROM meals WHERE meal LIKE ?');
      $stmt->execute(array($_POST['meal']));
      $rows = $stmt->fetchAll();

      if (count($rows) == 0) {
        print '가능한 요리가 없습니다.';
      } else {
        print '<table><tr><th>요리</th><th>가격</th></tr>';
        foreach ($rows as $row) {
          print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
        print '</table>';
      }
    } else {
      print '알 수 없는 메뉴입니다.';
    }
  ?>
</div>
</body>
</html>