<?php

/*
Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snak 1</title>
</head>

<body>
   <form action="index.php" method="get">
      <h1>Raccolta dati</h1>
      <label for="name">Inserisci il tuo nome</label>
      <input id="name" type="text" name="name">
      <label for="mail">Inserisci il tuo cognome</label>
      <input id="mail" type="mail" name="mail">
      <label for="age">Inserisci la tua età</label>
      <input id="age" type="number" name="age">
      <button type="submit">INVIA</button>
   </form>
</body>

</html>