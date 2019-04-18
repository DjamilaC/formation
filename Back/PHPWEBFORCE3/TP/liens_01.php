<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire2</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<ul>
<li><a href="?action=france">France</a></li>
<li><a href="?action=angleterre">Angleterre</a></li>
<li><a href="?action=espagne">Espagne</a></li>
<li><a href="?action=italie">Italie</a></li>
</ul>

<?php 
if(isset($_GET['action']))
{

    echo "Vous êtes en $_GET[action]"; 
    // switch($_GET['action'])
    // {
    // case 'france': 
    // echo 'Vous êtes français ? <br>';
    // break;

    // case 'angleterre': 
    // echo 'Vous êtes Anglais ? <br>';
    // break;

    // case 'espagne': 
    // echo 'Vous êtes espagnol ? <br>';
    // break;

    // case 'italie': 
    // echo 'Vous êtes italien ? <br>';
    // break;

    // }
}
        
    ?>





    
</body>
</html>