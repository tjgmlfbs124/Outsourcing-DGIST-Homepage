<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
  $model = new getForm();

  $id = $_POST['id'];
  $name = $_POST['name'];
  // $position = $_POST['name'];
  // $address = $_POST['name'];
  // $phone = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  // $name = $_POST['name'];
  echo $_POST['mode'];
  $mode = "update";
  if(!strcmp($_POST['mode'], $mode))
  {
    // $model -> add_professor($name, $position, $address, $phone, $fax, $email, 'null','null','professor',$biography, $research_interests, $professional_experiences, $awards_and_honors);
  }
  else if(!strcmp($_POST['mode'], "upload") {
    $model -> add_professor($name, $position, $address, $phone, $fax, $email, 'null','null','professor',$biography, $research_interests, $professional_experiences, $awards_and_honors);
  }

?>
