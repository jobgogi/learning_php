<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .launch {
      color: blue;
    }
  </style>
</head>
<body>
<?php
  $html = '<span class="{class}">유부</span>
  <span class="{class}">생선 튀김</span>';

  $my_class = 'launch';

  print str_replace('{class}', $my_class, $html);
?>
</body>
</html>