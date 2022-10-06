<h1>Ejercicios</h1>

<ul>
<?php
echo "<p> Esto funciona</p>";


/*
for ($i=1;$i<=10;$i++){
    $numero=rand(1,10);


    if($numero%2){
        echo "<li> El $numero es impar  </li> ";
    }else   {
        echo"<li> El $numero par</li>";
    }
}

*/






echo "[";
for ($i = 3; $i <= 30; $i+=3) {
    if ($i < 30) {
        echo "$i,";
    else {
        echo "$i";
    }
    
}
echo "]";

















?>
</ul>