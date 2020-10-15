<?php
require_once 'index.php';

/**
 * Práctica PHP
 *
 * 2.3  Dado un número ​ N, imprima en pantalla una matriz de ​ N ​ x ​ N ​ , donde cada una de las posiciones tenga un número aleatorio en el rango [​ N ​ , ​ 2N​ ]
 */

if (isset($_GET['N']) && !empty($_GET['N']) && is_numeric($_GET['N']) && $_GET['N'] > 0) {
    $width = intval($_GET['N']);
    $height = $width;

    printMatriz($width, $height);
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo 'Por favor digite un valor para N (entero) y mayor a 0 por la URL'; ?>
        
    </div>
    <?php
}

function geneMatriz($width, $height): array
{
    $numeros = [];
    
    for ($i = 0; $i<$width; $i++) {
        for ($j= 0; $j<$height; $j++) {
            $numeros[$i][$j] = rand($width, (2 * $height));
        }
    }
    return $numeros;
}


function printMatriz($width, $height)
{
    $arr_numbers = geneMatriz($width, $height);


    foreach ($arr_numbers as $row) {
        $html.='<tr>' . PHP_EOL;
        foreach ($row as $value) {
            $html .= '<td>' . $value . '</td>' . PHP_EOL;
        }
        $html.='</tr>' . PHP_EOL;
    }

    echo '<table>' . PHP_EOL . $html . '</table>'; ?>
    <button id="boton" type="button" class="btn btn-primary text-center ">Diplicar valor</button>
    <?php
}
require_once 'footer.php';
