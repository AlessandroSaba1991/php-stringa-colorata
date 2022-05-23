<?php
/* 
Descrizione:
Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
*/
$password= $_GET['password'];
var_dump($password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linea rossa o verde</title>
</head>
<style>
    .green{
        height: 3px;
        background-color: green;
    }
    .red{
        height: 3px;
        background-color: red;
    }
</style>
<body>
    <main>
        <div class="<?php echo $password === "Boolean" ? "green" : "red" ?>"></div>
    </main>
</body>
</html>