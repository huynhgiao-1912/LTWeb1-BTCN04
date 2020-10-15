<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cộng hai số</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #KetQua
    {
      color: red;
    }
  </style>
</head>
<body>
<div class="container" >
<h2 id="KetQua"> Kết quả là: 
  <?php
    $a= $_GET['number1'];
    $b= $_GET['number2'];
    echo $a+$b;
  ?> 
  </h2>
</div>
</body>
</html>
