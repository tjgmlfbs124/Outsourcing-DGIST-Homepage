<html>
<head>
  <meta charset="UTF-8">
</head>
<?php

  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $model = new getForm();
  $model -> delete_people($_GET['id'], $_GET['cat']);
?>

</html>
