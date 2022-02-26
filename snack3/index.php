<?php

/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

*/

$integers = [];
$i = 0;
while (count($integers) <= 15) {
   $number = rand(1, 100);
   if (!in_array($number, $integers)) {
      $integers[] = $number;
   }
   $i++;
};


/*
   if (in_array($integers[$i], $integers)) {
      unset($integers[$i]);
   }
for ($i = 0; $i = 15; $i++) {
   $number = rand(1, 100);
   if (!in_array($number, $integers)) {
      array_push($number, $integers);
   }
};
*/

print_r($integers);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Snack3</title>
</head>

<body>
   <div class="container">
      <h2>I miei 15 numeri unici</h2>
      <ul>
         <?php for ($i = 0; $i <= count($integers); $i++) : ?>
            <li><?php echo $integers[$i] ?></li>
         <?php endfor; ?>
      </ul>
   </div>
</body>

</html>