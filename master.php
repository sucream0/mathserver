<?php
 
header("Content-Type: text/html; charset=UTF-8");
 

$conn=mysqli_connect("localhost","yhang2003","s5253960!!","yhang2003");
 

mysqli_query($conn,"set names utf8");
 

$sql="select * from math";
$result=mysqli_query($conn, $sql);
 

$rowCount= mysqli_num_rows($result);
 
  
echo "<center><h1>명단</h1></center>";


for($i=0;$i<$rowCount;$i++){
    $row= mysqli_fetch_array($result, MYSQLI_ASSOC); 
    
  
    echo "<center>($row[date]) $row[name] $row[num] <p><img src='$row[file]' alt = '!사진 없음!' width=600px, height=200px ></p> </center></p> ";
    
 
  
}
 
mysqli_close($conn);
 
?>
<!doctype html>
<html lang="ko">
  <head>
<meta charset="utf-8">
    <title>명단</title>
<script language='javascript'>
<!--
function check()
{
   flag = confirm('초기화 하시겠습니까?');
   if(flag) location.href = 'reset.php';
   
}

</script>   

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
        <p><button type="button" onclick="check()">초기화</button></p>
    <p><div class="flex">
  <a href="index.html" class="bttn">처음으로</a>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script> </p></center>

  </body>
</html>

