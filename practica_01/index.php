<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Practica 1 </title>
</head>
<body>



<div>
 <ul>
    <h2 id="ej1"> Ejercicio 1</h2>
        
        <p> Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”. El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. 
Ej.: Si a=3 y b=4, se devolverán los tres primeros números primos empezando por 4. Es decir, 5, 7 y 11. 
  </p>
            <form action="#ej1"; method="post">
    <label>Indique un  numero</label><br>
    <input type="text" name="numero1"><br><br>
    <label>Indique otro numero</label><br>
    <input type="text" name="numero2"><br><br>
    <input type="hidden" name="f" value="ej1">
    <input type="submit" value="Enviar"> <br><br>
</form>

  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["f"] == "ej1"){
          require 'funcionEjercicio1.php';
          $num1 = $_POST["numero1"];
          $num2 = $_POST["numero2"];
          $i = $num2+1;
          do{ 

              if(esPrimo($i)){
                  echo "$i<br><br>";
                  $num1=$num1-1;
              }
              $i++;
          }while($num1!=0);
          
          
      
           }
     }
     
    


?>
</ul>
</form>





<div>
 <ul>
    <h2 id="ej2"> Ejercicio 2</h2>
        
        <p>  Crea un formulario que compruebe si un DNI es válido. Un DNI es válido si:
Está formado por 8 dígitos seguidos de una letra (mayúscula o minúscula)
La letra es válida (debes de investigar cómo averiguar si la letra es válida)
No usar expresiones regulares. 

  </p>
            <form action="#ej2"; method="post">
    <label>Indique su DNI</label><br>
    <input type="text" name="dni"><br><br>
    <input type="hidden" name="f" value="ej2">
    <input type="submit" value="Enviar"> 
</form>

  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["f"] == "ej2"){
            $dni = $_POST["dni"];
           if($dni.sterlen>9){

           }

            }
        }
    


?>
</ul>
</form>



<div>
 <ul>
    <h2> Ejercicio 3</h2>
        
        <p>  Genera de manera dinámica las tablas de multiplicar del 1 al 10. El resultado debe ser parecido al siguiente y estar estructurado mediante tablas HTML.

  </p>

  <?php
        
       $multiplicando;
       $multiplicador;

      
       echo "<table text-align:center; border=5 style='background-color:red'>";
       echo "<tr>  ";
       for ($filaTabla=1; $filaTabla<=5 ; $filaTabla++) { 
      
           echo "<td>Tabla del $filaTabla </td>";
           
       }
       echo "</tr>";
echo "<tr>";



for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=01; $multiplicando <= 5; $multiplicando++) { 
		echo "<td> $multiplicando X $multiplicador =";
		echo ($multiplicando * $multiplicador);
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";








echo "<table text-align:center; border=5 style='background-color:blue'>>";
       echo "<tr>  ";
       for ($filaTabla=6; $filaTabla<=10 ; $filaTabla++) { 
      
           echo "<td>Tabla del $filaTabla </td>";
           
       }
       echo "</tr>";
echo "<tr>";



for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=06; $multiplicando <= 10; $multiplicando++) { 
		echo "<td> $multiplicando X $multiplicador =";
		echo ($multiplicando * $multiplicador);
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";


?>


</ul>
</form>


</body>
</html>