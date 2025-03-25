<?php
  $comments = 'The Fresh Fish with Rice Noddle was delicious, but I didn\'t like the Beef Tripe.';

  print '$commnets = ' . "$comments<br />";
  // $comments의 첫 30바이트를 출력한다.
  print substr($comments, 0, 30);
  // 말 줄임표를 붙인다.
  print '...';
?>