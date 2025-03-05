<?php
  
  $name = $_POST["name"]; 
  $num =  $_POST["num"]; 
  
  $file= $_FILES['upload'];
  $srcName= $file['name'];
  $fileSize= $file['size'];
  $fileType= $file['type'];
  $tmpName= $file['tmp_name'];

  $path= "uploads/";
  $fileName= date('Ymdhis').$srcName;

  $dstName= $path . $fileName;
  $result=move_uploaded_file($tmpName, $dstName);
  if($result) echo "success upload file.    ";
  else echo "fail upload file     ";

  date_default_timezone_set('Asia/Seoul');
  $now = date("m-d H : i");
    
  $conn = mysqli_connect("localhost", "yhang2003", "s5253960!!", "yhang2003");
  mysqli_query($conn, "setnames utf8");

   $sql="insert into math(name, num, date, file) values('$name', '$num', '$now', '$dstName')";
   $result=mysqli_query($conn,$sql);
 
    if($result){
        echo "insert success";    
    } else{
        echo "insert fail";
        
    }
 
    mysqli_close($conn);


?>
<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
        background-color: #F4F5EE ;
      }
    </style>
		<link rel="stylesheet" href="css/style.css">  
</head>
  <body>
    <center><h1>제출됨! (맞는지 확인하세요!)</h1>
    <p>이름 : <?php echo $name ?>.</p>
    <p>좌석번호 : <?php echo $num ?>.</p>
    <p><div class="flex">
  <a href="index.html" class="bttn">처음으로</a>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script> </p></center>

  </body>
</html>