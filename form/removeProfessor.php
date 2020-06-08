<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
  $model = new getForm();

  $id = $_GET['id'];

  $model -> remove_professor($id);
?>
