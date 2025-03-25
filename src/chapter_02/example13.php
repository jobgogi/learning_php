<?php
  $card = '4000-1234-5678-9101';

  print "원본 카드 번호 : $card<br />";
  print "카드 : XX";
  print substr($card, -4, 4) . "<br />";
  print substr($card, -4);
?>