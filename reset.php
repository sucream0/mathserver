<?php

$conn = mysqli_connect("localhost", "yhang2003", "s5253960!!", "yhang2003");
  mysqli_query($conn, "setnames utf8");

   $sql = "TRUNCATE math";

        if ($conn->query($sql) === TRUE) {
    		echo "Record deleted successfully";
            } 
        else {
   		echo "Error deleting record: " . $conn->error;
	}




$conn->close();

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
        
    <p><div class="flex">
  <a href="index.html" class="bttn">처음으로</a>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script> </p></center>

  </body>
</html>
