<h1> Ejercicios de clase de formularios</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EJERCICIOS </title>
    <style>
       body {
  background-color:yellow;
}


    </style>
</head>
<body>
    <div>
        <h2> Ejercicio 1 </h2>
    
            
            <p> Formulario que reciba un nombre y una edad y los muestre </p>
            <form action=""; method="post">
                <label>Nombre</label><br>
                <input type="text" name="nombre"><br><br>
                <label>Edad</label><br>
                <input type="hidden" name="f" value="ej1">
                <input type="text" name="edad"><br><br>
                
                
                
<?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["f"] == "ej1"){
            $nombre = $_POST["nombre"]; 
            $edad = $_POST["edad"];

            echo "<p>$nombre</p>";
            echo "<p>$edad</p>";
        }
    }


?>

                 <input type="submit" value="Enviar"> 

                
   </form>


     
</h2>
    </div>
    
    
    
    
 <div>
 <ul>
    <h2> Ejercicio 2</h2>
        
        <p> Crear un formulario que reciba un numero. Generar una lista dinamicamente con tantos elementos como se haya indicado </p>
            <form action=""; method="post">
    <label>Número</label><br>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="f" value="ej2">
    <input type="submit" value="Enviar"> 
</form>

  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["f"] == "ej2"){
            $n = $_POST["numero"];

            for($i=1;$i<=$n;$i++){
            
                echo"<li>$i</li>";
            }
        }
    }


?>
</ul>
</form>

    
    
    
        </h2>
    
        </div>
    


    
    
    
        <div>
           
                  <h2> Ejercicio 3 </h2>
                <p>Crear un formulario que reciba el nombre y la edad de una persona y
                    muestre por pantalla si es menor de edad, es adulta, o esta jubilada en funcion
                    a su edad. Ademas:
                    - Convertir la edad a un numero entero
                    - Convertir el nombre introducido a minusculas salvo la primera letra, que sera mayuscula
                     </p>
 <form action=""; method="post">
             <label>Nombre</label><br>
             <input type="text" name="nombre"><br><br>
             <label>Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej3">
            <input type="submit" value="Enviar"> 


 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["f"] == "ej3"){
        $nombre=$_POST["nombre"];
        $edad=(int)$_POST["edad"];
        
        
        $nombre=ucwords(strtolower($nombre));
        
        if($edad<18 && $edad >=0){
            echo"<p>  $nombre $edad Eres menor de edad </p>";
        }else if ($edad>=18 && $edad <= 65  ){
            echo"<p> $nombre $edad Eres adulto</p>";
            
        }else if ($edad>65 && $edad < 130 ){
            echo"<p>  $nombre $edad Eres Jubilado</p>";
        }
        

    }

 }

?>
</form>

                     
                
        
        
        
        
            
    
    </div>
    
    <div>
        <h2>Ejercicio 4 </h2>
          
            <p> 
                Crear un formulario que reciba una frase y un numero del 1 al 6. Habra que mostrar la frase
                en un encabezado de dicho numero.
                
                Si introducimos "5" y "Hola mundo" se mostrara un encabezado</p>
   <form action=""; method="post">
    <label>Frase</label><br>
    <input type="text" name="frase"><br><br>
    <label>Numero</label><br>
    <input type="hidden" name="f" value="ej4">
    <input type="text" name="numero"><br><br>

    <input type="submit" value="Enviar"> 





</form>

    
    
    
    
     
    
        </div>
    
    
        <div>
            <h2> Ejercicio 5</h2>
           
                <p> Formulario que reciba dos numeros. Devolver el resultado de elevar el primero al segundo. </p>
                <form action=""; method="post">
    <label>Primer Numero</label><br/>
    <input type="text" name="numero"><br/>
    <label>Segundo Numero</label><br/>
    <input type="text" name="Numero2"><br/>
    <input type="hidden" name="f" value="ej5"><br/>
    <input type="submit" value="Enviar"><br/>


 <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["f"] == "ej5"){
        $b=$_POST["numero"];
        $x =$_POST["Numero2"];
        $resultado = 1;
    
    for ($i = $x; $i > 0; $i--) {
        $resultado *= $b;
    }
    echo "La potencia es {$b}^{$x} = {$resultado}";
    

    }
}



?>
</form>
        
        
        
      
        
            </div>
    
    
    
    
        </div>
    
    
        <div>
            <h2> Ejercicio 6 </h2>
                
                <p> Formulario que reciba un número y devuelva su factorial. </p>
                <form action=""; method="post">
    <label>Indique un Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="f" value="ej6"><br/>
    <input type="submit" value="Enviar"> 

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["f"] == "ej6"){
        $numero=$_POST["numero"];
$factorial=1;

for($i=1;$i<=$numero;$i++){
    $factorial=$factorial*$i;
}

echo "<p>$factorial</p>";

    }
}



?>
</form>

        
        
        
        
            </h2>
        
            </div>


            
        <div>
            <h2>Ejercicio 7</h2>
               
                <p> Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.

Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:

40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá
mediante un campo select.

Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un
checkbox. 
 </p>
 
        
        
        
        
            </h2>
        
            </div>
    
    
    
    
    
    
    
    </div>
    
</body>
</html>

