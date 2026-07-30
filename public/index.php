<?php

require_once("../Clases/persona.php");

$persona1 = new Persona("Juan", 20, "Masculino", "12345", "3001111111");
$persona2 = new Persona("Ana", 18, "Femenino", "54321", "3002222222");
$persona3 = new Persona("Carlos", 25, "Masculino", "67890", "3003333333");

$persona1->setEdad(30);
$persona2->setNombre("Ana Maria");
$persona3->setTelefono("3115555555");


echo "<h2>Persona 1</h2>";
echo "Nombre: " . $persona1->getNombre() . "<br>";
echo "Edad: " . $persona1->getEdad() . "<br><br>";

echo "<h2>Persona 2</h2>";
echo "Nombre: " . $persona2->getNombre() . "<br>";
echo "Edad: " . $persona2->getEdad() . "<br><br>";

echo "<h2>Persona 3</h2>";
echo "Nombre: " . $persona3->getNombre() . "<br>";
echo "Teléfono: " . $persona3->getTelefono() . "<br>";