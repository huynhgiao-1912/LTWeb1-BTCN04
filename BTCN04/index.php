<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cộng hai số</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <Style>
    #Goi
    {
      background-color: greenyellow;
      font-weight: bold;
    }
    #TieuDe
    {
       color: green;
    }
  </Style>
</head>
<body>
<div class="container">
  <h2 id="TieuDe">Cộng hai số</h2>
  <form action="sum.php" method="get">
    <div class="form-group">
      <label for="number1">Số thứ nhất:</label>
      <input type="number" class="form-control" id="number1" placeholder="Số thứ nhất" name="number1">
    </div>
    <div class="form-group">
      <label for="number2">Số thứ hai:</label>
      <input type="number" class="form-control" id="number2" placeholder="Số thứ hai" name="number2">
    </div>
    <button id="Goi" type="submit"  class="btn btn-default">Gởi dữ liệu</button>
  </form>
</div>
</body>
</html>

