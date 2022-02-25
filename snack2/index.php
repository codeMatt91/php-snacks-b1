<?php

/*
 Snack 2
 Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 
 */


$posts = [

   '10/01/2019' => [
      [
         'title' => 'Post 1',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 1'
      ],
      [
         'title' => 'Post 2',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 2'
      ],
   ],
   '10/02/2019' => [
      [
         'title' => 'Post 3',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 3'
      ]
   ],
   '15/05/2019' => [
      [
         'title' => 'Post 4',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 4'
      ],
      [
         'title' => 'Post 5',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 5'
      ],
      [
         'title' => 'Post 6',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 6'
      ]
   ],
];

print_r(array_keys($posts));


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Snack 2</title>
</head>

<body>

   <div class="container">
      <h1>I miei post di Whatsapp</h1>
      <ul>


      </ul>
   </div>

</body>

</html>