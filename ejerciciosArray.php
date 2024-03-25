<?php
/*1. Trabajamos con un array:
    - Recorrerlo y mostrar
    - Ordenarlo y mostrar
    - Mostrar longitud
    - Buscar algún elemento
    */

    $numeros = [2, 1, 3, 4, 5, 6, 7, 8];

    recorrerMostrar($numeros);
    echo "<br>";
    ordenarMostrar($numeros);
    echo "<br>";
    mostrarLongitud($numeros);
    echo "<br>";
    buscar($numeros);

    function recorrerMostrar($numeros){
        for ($i=0; $i < count($numeros) ; $i++) { 
            echo $numeros[$i]." ";
        }
    }
    
    function ordenarMostrar ($numeros){
        sort($numeros);
        foreach($numeros as $num){
            echo $num." ";
        } 
    }
    
    function mostrarLongitud ($numeros){
        $longitud = count($numeros);
        echo $longitud;
    }

    function buscar($numeros){
        $busqueda = 6;
        if(!empty($search)){
            echo "El número buscado está en el array, en el índice: $search";
        }else{
            echo "No existe el número buscado";
        }
    }
?>
