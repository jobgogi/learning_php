<?php
// SQLite 데이터베이스 dinner.db를 사용
$db = new PDO('sqlite:dinner.db');
// 허용되는 메뉴 구분 정의
$meals = array('아침', '점심', '저녁');

// 제출된 폼 매개변수 "meal" 값이
// "아침", "점심", "저녁" 중 하나인지 확인
if (isset($_POST['meal']) && in_array($_POST['meal'], $meals)) {
  print <<<_HTML_
    <h2>$_POST[meal]</h2>
  _HTML_;

  // 맞는다면, 해당하는 모든 요리 가져오기
  $stmt = $db->prepare('SELECT dish, price FROM meals WHERE meal LIKE ?');
  $stmt->execute(array($_POST['meal']));
  $rows = $stmt->fetchAll();
  // 데이터베이스에서 아무 요리도 발견하지 못했다면
  if (count($rows) == 0) {
    print "가능한 요리가 없습니다.";
  } else {
    print '<table><tr><th>요리</th><th>가격</th></tr>';
    foreach ($rows as $row) {
      print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
    }
    print '</table>';
  }
} else {
  print "알 수 없는 메뉴입니다.";
}

print "<form method='post' action='$_SERVER[PHP_SELF]'>";
print '<select name="meal">';
foreach ($meals as $meal) {
  $selected = isset($_POST['meal']) && $_POST['meal'] == $meal ? 'selected' : '';
  print "<option value='$meal' $selected>$meal</option>";
}
print '</select>';
print '<button type="submit">고르기!</button>';
print '</form>';
?>