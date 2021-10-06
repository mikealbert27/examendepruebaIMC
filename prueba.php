<?php

class Persona{
    public $nombre;
    public $estatura;
    public $peso;

    public function calcularIMC($nombre, $estatura, $peso){
        $imc=($peso)/($estatura*$estatura);
        
        if($imc<18.5){
            echo ($nombre .' tu tienes bajo peso');

        }elseif($imc>=18.5 && $imc<=24.9){
          echo $nombre .' tu peso es normal';
 
        }elseif($imc>=25 && $imc<=29.9){
          echo $nombre .' tu tienes sobrepeso';
 
        }elseif($imc>=30){
          echo $nombre . 'tienes obesidad';
        }
        
    }

}

