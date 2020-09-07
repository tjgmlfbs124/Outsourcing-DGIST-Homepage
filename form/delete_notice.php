<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $model = new getForm();
  $model -> delete_notice($_GET['id'], $_GET['cat']);
?>
