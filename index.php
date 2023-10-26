<?php 

  $numbers = [];

  while ( count($numbers) <  15) {
    $random_number = rand(1,50);
    if(!in_array($random_number, $numbers)){
      $numbers[] = $random_number;
    }
  }
  var_dump($numbers)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach($numbers as $number): ?>
    <li>
      <?php echo $number ?>
    </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>