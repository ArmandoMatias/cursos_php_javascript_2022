<?php

function saludar(){
    return 'Hola mundo';
}

function saludame($nombre){
    return 'Hola'.$nombre;
}

//LLamada de funcion
echo saludar();
echo '<br/>';
echo saludame(' Armando');

?>