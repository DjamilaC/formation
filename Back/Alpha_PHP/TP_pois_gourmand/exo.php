<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="exo.css">
    <title>Document</title>
</head>
<body>
<div>header</div>
    <hr>
    <a href="?action=click">test click</a>
    <hr>
    <?php
    if(empty($_GET)){  
    ?>
    <div id="bleu"></div>
    <?php }else { ?>
    <div id="vert"></div>
    <?php } ?>
    <div>footer</div>
</body>
</html>