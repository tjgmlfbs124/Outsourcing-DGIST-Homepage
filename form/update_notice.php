<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $model = new getForm();
  $model -> update_notice($_GET['id'], $title, $content, $_GET['cat']);
?>
