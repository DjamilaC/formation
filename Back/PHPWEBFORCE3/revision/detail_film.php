<?php

echo '<pre>'; print_r($_GET); echo'</pre>';


echo "<h1>Détail du film n° $_GET[id_film]</h1>
";
foreach($_GET as $key=> $value)
{
    echo "$key : $value<br>";
}
