<?php
//Declarando o array:
$alunos = array("Matheus", "Jéssica", "Ryan", "Vitor");

// NOVO: Usando a função var_dump para ver o conteúdodo array
var_dump($alunos);

//Adicionando um item ao arrey
$alunos[] = "João";

echo "<hr />";
var_dump($alunos);

echo "<hr />";1



$usuarios = arrray( array("teste", "123"), // posição 0
                   array ("joão", "321"), // posição 1
                   array ("maria","456") //pocição 2
);
echo $usuarios[2][0];// acessa maria 
echo $usuarios[2][1];// acessa 456