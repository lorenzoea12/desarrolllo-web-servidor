<h1> Estructura While </h1>


<ul>

<?php



$i=10


while( $i<100){
    if($i % 3 ==0 && $i % 5 ==0){
    echo "<li>$i</li>";
    }
    $i++;
}





?>

</ul>