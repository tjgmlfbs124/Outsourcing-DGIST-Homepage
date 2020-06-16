<html>
<head>
  <meta charset="UTF-8">
</head>
<?php

  // length만큼 무작위 문자열을 반환하는 함수
  function generateRandomString($length){
    return substr(str_shuffle(str_repeat($x='0123456789abcdef',ceil($length/strlen($x)))),1,$length);
  }

  // 사진이 있다면 지정된 경로에 업로드
  if(isset($_FILES['fileToUpload'])){
    $filename = generateRandomString(32);
    $target_file =  $_SERVER['DOCUMENT_ROOT']."/uploadFile/".$filename.".jpg";
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    }
    else {
      // echo "File is not an image.";
      $filename = null;
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      // echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        // echo "Sorry, there was an error uploading your file.";
      }
    }
  }

  require_once $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
  $model = new getForm();
  $_id = $_POST['id'];
  $name = $_POST['name'];
  $position = $_POST['position'];
  $address = $_POST['address'];
  $department = $_POST['department'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $category = $_POST['category'];
  $image = $filename;
  if(!strcmp($_POST['mode'], "update"))
  {
    $model -> update_etc($_id, $name, $position, $address, $phone, $fax, $email, $department, $image ,$category);
  }
  else if(!strcmp($_POST['mode'], "upload")) {
    $model -> add_etc($name, $position, $address, $phone, $fax, $email,  $department, $image, $category);
  }

?>
