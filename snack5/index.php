<?php

/*
Snack 5
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

*/

$db = [
   'teachers' => [
      [
         'name' => 'Michele',
         'lastname' => 'Papagni'
      ],
      [
         'name' => 'Fabio',
         'lastname' => 'Forghieri'
      ]
   ],
   'pm' => [
      [
         'name' => 'Roberto',
         'lastname' => 'Marazzini'
      ],
      [
         'name' => 'Federico',
         'lastname' => 'Pellegrini'
      ]
   ]
];

$keys = array_keys($db);

$teachers = $db[$keys[0]];
$pm = $db[$keys[1]];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Snack5</title>
</head>

<body>
   <div class="container">
      <div class="bg-secondary w-25">
         <ul>
            <?php for ($i = 0; $i < count($teachers); $i++) : ?>
               <li> <?php echo $teachers[$i]['name'] . ' ' . $teachers[$i]['lastname'] ?></li>
            <?php endfor; ?>
         </ul>
      </div>
      <div class="bg-success w-25">
         <ul>
            <?php for ($i = 0; $i < count($pm); $i++) : ?>
               <li> <?php echo $pm[$i]['name'] . ' ' . $pm[$i]['lastname'] ?></li>
            <?php endfor; ?>
         </ul>
      </div>
   </div>
   <div class="container">
      <?php foreach ($db as $item => $value) : ?>
         <div class="bg-secondary w-25">
            <ul>
               <?php foreach ($value as $value) : ?>
                  <li> <?php echo "$value[name] $value[lastname]" ?></li>
               <?php endforeach; ?>
            </ul>
         </div>
      <?php endforeach ?>
   </div>
</body>

</html>