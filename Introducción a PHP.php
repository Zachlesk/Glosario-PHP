<?php

/* 1. FUNCIONES DE SALIDA /* 

/* echo(): Esta es la función más común para imprimir en PHP. Se utiliza para mostrar una o
varias cadenas de texto en la salida del servidor web. */

echo "Mi primer echo en php :D";

/* printf(): Esta función es similar a echo(), pero solo puede imprimir una cadena de texto a la vez. */ 

$mensaje = "Daniel";
printf("Gualdron %s", $mensaje);

/* El valor de la variable $texto se incrusta en la cadena usando el marcador %s,
que indica que se trata de una cadena de texto. */

/* sprintf(): Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en
la salida estándar, devuelve la cadena formateada como resultado. La sintaxis básica es la
siguiente: */

$name = "Brayan";
$message = sprintf("Mendez %s", $name);
echo $message;

/* 2. VARIABLES Y CONSTANTES */

/* VARIABLES  */

/* String (STRING)*/
$nombre = "Zachlesk";

/* Entero (INT) */
$edad = 18;

/* Flotante (FLOAT) */
$altura = 1.68;

/* Booleano (BOOLEAN) */
$ser_vivo = true;

/* Se imprimirá el tipo de dato y el contenido de la variable haciendo uso de la
función especial var_dump. */

echo var_dump($nombre);
echo var_dump($edad);
echo var_dump($altura);
echo var_dump($ser_vivo);

/* CONSTANTES */

/* Constante de tipo string (STRING) */
define('NOMBRE', "Zachlesk");

/* Constante de tipo entero (INT)  */
define('EDAD', 18);

/* Constante de tipo flotante (FLOAT)  */
define('ALTURA', 1.68);

/* Constante de tipo booleano (BOOLEAN)  */
define('SER_VIVO', true);


/* 3. TIPOS DE DATOS */

/* 

1. Enteros (int): se utilizan para almacenar números enteros sin decimales. */
$int = 20;
var_dump($int);

/* 2. Punto flotante (float): se utilizan para almacenar números con decimales. */
$float = 4.89;
var_dump($float);

/* 3. Cadenas de texto (string): se utilizan para almacenar texto y caracteres. */
$string = "What's up";
var_dump($string);

/* 4. Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan
por true o false. */
$boolean = false;
var_dump($boolean);

/* 5. Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de
diferentes tipos. */
$array = ['voleibol', 'natación', 'basketball'];
var_dump($array);

/* 6. Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de
objetos.  */

/* 7. Recursos (resource): se utilizan para almacenar referencias a recursos externos, como
conexiones a bases de datos o archivos abiertos.

8. Nulos (null): se utilizan para representar una variable sin valor o sin definir. */


/* 4. NUMEROS Y OPERADORES */

/* 1A. Operadores aritmeticos  */

/* + = Suma
- = Resta
* = Multiplicación  
/ = División   
% = Diferencia  
** = Exponenciación   */

/* 2A. Operadores de asignación  */
/* = Igual a    */

/* 3A. Operadores de array */

/* == Igual a 
=== Identico a 
!= Diferente a 
!== No identico  
<> No igual a
< Menor que 
<= Menor o igual que  
> Mayor que  
>= Mayor o igual que 
<=> Operador Spaceship   */

/* 4A. Operador logico */

/* && = and var_dump($numero1 <=> $numero2)
|| = or
! = not 
  */

/* 5A. Operadores de incremento y decremento  */
/* ++$a = Pre-incremento
$a++ = Post-incremento 
--$a = Pre-decremento 
$a-- = Post-decremento  */

$numero1 = 100;
$numero2 = 200;
$numero3 = 200;
$numero4 = "200";


var_dump($numero1 > $numero2);
var_dump($numero1 < $numero2);
var_dump($numero1 >= $numero2);
var_dump($numero1 <= $numero2);
var_dump($numero1 == $numero2);
var_dump($numero2 == $numero3);
var_dump($numero3 == $numero4);
var_dump($numero2 === $numero4);

// -1 Si izquierda es menor, 
// 0 Si es igual,
// 1 Si izquieda es mayor

var_dump($numero1 <=> $numero2);
var_dump($numero2 <=> $numero3);
var_dump($numero2 <=> $numero1);

/* BONUS */

/* Métodos utilizados en php para la manipulación de cadenas de
caracteres. */


$frase = "I'm just a dreamer and you're my dream";

/* Conocer extensión de un string */
echo strlen($frase); 

/* Eliminar espacios en blanco */
$espacios = trim($frase);
echo strlen($espacios);

/* Mayusculas */
echo stroupper($nombreCliente);

/* Minusculas */
echo strtolower($nombreCliente);

/* Reemplazar la variable */
echo str_replace('My beautiful Sonne and im your Mond', $frase);

/* Revisar si un string existe o no  */
echo strpos($frase, 'miau');

/* 5. ARRAYS, ARRAYS ASOCIATIVOS Y FUNCIONES PARA ARRAYS */

/* Arrays indexados numericamente: */
$miArreglo = array("1", "2", "3", "4", "5");

$miArreglo2 = ['Gomez', 'Pinzón', 'Quezada'];

/* Arrays asociativos */

$miArrayAsociativo = array(
    "2017" => "Arrieta",
    "2018" => "Guzmán",
    "2019" => "Quezada",
    "2020" => "Diaz",
    "2021" => "Gualdron",
    "2022" => "Mendez",
);

/* Para acceder a un valor de un array asociativo, se utiliza su clave correspondiente. */

echo $miArrayAsociativo["2017"];
echo $miArrayAsociativo["2020"];
echo $miArrayAsociativo["2022"];

/* O se usa un bucle foreach */

foreach ($miArrayAsociativo as $key => $value) {
  echo "Key: " . $key . "Value: " . $value;
}

/* Metodos de arrays  */

/* Acceder a un elemento del array  */

echo $miArreglo2[1];

/* Añade un elemento en el indice que se indique del array */

$miArreglo2[3] = 'Sosa';

/* Añadir un elemento al final  */

array_push($miArreglo2, 'Arrieta');

/* Añadir un elemento al inicio  */

array_unshift($miArreglo2, 'Guzmán');

/* Buscar elemento a un arreglo */

var_dump(in_array('Quezada, $miArreglo2'));

/* Ordenar elementos de un arreglo */

$edadCampers = [27,61,86,7,99,23,12,104];
sort($edadCampers); // De menor a mayor
rsort($edadCampers); // De mayor a menor

/* Ordenar arreglo asociativo */

$jugador = [
  'username' => 'Katarina',
  'rol' => 'Asesino',
  'nivel' => 30,
  'tipo' => 'Midlaner'
];

/* Ordena por valores (orden alfabetico) */
asort($jugador);

/* Ordena por valores (z primero) */
arsort($jugador);

/* Ordena por llaves (orden alfabetico) */
ksort($jugador);

/* Ordena por llaves (orden alfabetico, de la z a la a) */
krsort($jugador);


/* 6. ISSET Y EMPTY */

/* En PHP, isset() y empty() son dos funciones utilizadas para verificar si una variable o un elemento de
un array tiene un valor definido o no. */

/* La función isset() comprueba si una variable o un elemento de un array está definido y no es null.
Esta función devuelve true si la variable o el elemento de array existe y tiene un valor, y false en caso
contrario. */

/* Isset - Revisar si un arreglo esta creado o una propiedad esta definida */

var_dump(isset($jugador));

/* Isset - Permite revisar si una propiedad de un arreglo asociativo, existe */

var_dump(isset($jugador['username']));


/* Por otro lado, la función empty() comprueba si una variable o un elemento de un array está vacío.
Esta función devuelve true si la variable o el elemento de array no tiene un valor definido, o si tiene
un valor que se considera vacío (por ejemplo, una cadena vacía, 0, false, null, un array vacío, entre 
otros), y false en caso contrario. */

/* Empty - Revisa si un arreglo esta vacio  */

var_dump(empty($jugador));



?>
