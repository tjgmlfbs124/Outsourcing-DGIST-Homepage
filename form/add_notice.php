<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  $title = $_POST['title'];
  $content = preg_replace("/\r\n|\r|\n/","<br>", $_POST['content']);
  $date = $_POST['date'];
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $model = new getForm();
  $model -> insert_notice($title, $content, $date, $_GET['cat']);
?>
