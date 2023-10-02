<pre>

<?php

require_once "model/Curso.php"; // importa uma vez
require_once "model/Carro.php";

$curso = new Curso(); // cria um objeto do tipo Curso
$curso->setNome("Ciência da Computação");
$curso->setNivel("Superior");
$curso->setModalidade("EaD");
$curso->setDuracao(5);

print_r($curso);

$curso2 = new Curso();
$curso2
->setNome("Psicologia")
->setNivel("Superior")
->setModalidade("Misto")
->setDuracao(6);

print_r($curso2);

$monza = new Carro();
$monza
->setModelo("Uno")
->setMarca("Fiat")
->setAno(2010);

print_r($monza);

$monza->setMarca("Audi");
print_r($monza);

?>

</pre>
