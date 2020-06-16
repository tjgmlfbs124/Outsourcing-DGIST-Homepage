<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
  $model = new getForm();

  $id = $_GET['id'];
  $category = $_GET['category'];

  $model -> remove_etc_id_remove($category, $id);
?>
