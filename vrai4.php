<!doctype html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

  <?php
  for ($i=1; $i <= 100; $i++) {
    echo(($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz":(($i % 3 == 0) ?"Fizz":($i % 5 == 0) ? "Buzz" : $i))."\n";
  }
  ?>
</body>

</html>
