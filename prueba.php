<?php

class Persona{
    public $nombre;
    public $estatura;
    public $peso;

    public function calcularIMC($nombre, $estatura, $peso){
        $imc=$peso/$estatura*$estatura;
        
        if($imc<18.5){
            echo ($nombre . ' tienes una altura de: '. $estatura . ', un peso de ' .$peso .'kg' . ' tu imc es: Peso saludable');

        }elseif($imc>=18.5 && $imc<=24.9){
          echo $nombre . ' tienes una altura de: ' . $estatura . ', un peso de ' .$peso .'kg' .' tu imc es: Peso normal';
 
        }elseif($imc>=25 && $imc<=29.9){
          echo $nombre .' tienes una altura de: '. $estatura . ', un peso de ' .$peso.'kg' .'tu imc es: Sobrepeso';
 
        }elseif($imc>=30){
          echo $nombre . ' tienes una altura de: ' . $estatura . ', un peso de ' .$peso. 'kg'.' tu imc es: Obesidad';
        }
        
    }

}

