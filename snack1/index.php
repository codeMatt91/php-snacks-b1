<?php

/*
Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$access = '';

if (strlen($name) > 2 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) { // il controllo dell'età l'ho gestito tramite html con number 
   $access = 'Accesso riuscito';
   $color = 'text-info';
} else {
   $access = 'Accesso negato';
   $color = 'text-danger';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Snak 1</title>
</head>

<body>
   <div class="container">
      <form action="index.php" method="get">
         <h1>Raccolta dati</h1>
         <label for="name">Inserisci il tuo nome</label>
         <input id="name" type="text" name="name">
         <label for="mail">Inserisci la tua mail</label>
         <input id="mail" type="mail" name="mail">
         <label for="age">Inserisci la tua età</label>
         <input id="age" type="number" name="age" max="120">
         <button type="submit">INVIA</button>
      </form>
      <h2 class="<?php echo $color ?> my-4">
         <?php echo $access ?>
      </h2>
   </div>
</body>

</html>