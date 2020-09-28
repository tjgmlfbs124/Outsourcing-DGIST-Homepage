<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  $filename = null;

  // length만큼 무작위 문자열을 반환하는 함수
  function generateRandomString($length){
    return substr(str_shuffle(str_repeat($x='0123456789abcdef',ceil($length/strlen($x)))),1,$length);
  }

  // 사진이 있다면 지정된 경로에 업로드
  if(strcmp($_FILES['fileToUpload']["tmp_name"],"")){
    $filename = generateRandomString(32);
    $target_file =  $_SERVER['DOCUMENT_ROOT']."image/profile/".$filename.".jpg";
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }


  if(isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "") {
    $file = $_FILES['upfile'];
    $upload_directory = $_SERVER['DOCUMENT_ROOT']."cvFile/";
    $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx";
    $allowed_extensions = explode(',', $ext_str);
    $max_file_size = 5242880;
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

    if(!in_array($ext, $allowed_extensions)) {
        echo "업로드할 수 없는 확장자 입니다.";
    }
    // 파일 크기 체크
    if($file['size'] >= $max_file_size) {
        echo "5MB 까지만 업로드 가능합니다.";
    }
    $cv_path = time()."_".$file['name'];
    if(move_uploaded_file($file['tmp_name'], $upload_directory.$cv_path)) {
      // 성공
    }

  }

  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $model = new getForm();

  $_id = $_POST['id'];
  $kr_name = $_POST['kr_name'];
  $en_name = $_POST['en_name'];
  $position = $_POST['position'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $cv = $_POST['cv'];
  if(!isset($cv_path)) $cv_path = "";
  $cvfile = $cv_path;


  if(!isset($filename)){ // 이미지가 없다면
    $image = null;
  }
  else{ // 이미지가 있다면
    $image = $filename;
  }
  $model -> update_people($_id, $kr_name, $en_name, $position, $address, $phone, $fax, $email, 'null', $image,'professor',$cv, $cvfile);
?>
