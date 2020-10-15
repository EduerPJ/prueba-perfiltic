<?php
require_once 'index.php';

/**
 * Práctica PHP
 *
 * 2.2  Dado un número ​ N ​ , muestre en pantalla los números primos desde ​ 2 ​ hasta ​ N
 */


if (isset($_GET['N']) && !empty($_GET['N']) && is_numeric($_GET['N']) && $_GET['N'] > 1) {
    $desde = 2; // Desde el numero 2
    $hasta = intval($_GET['N']); // Hasta el número N
    
    print 'Números primos del ';
    print $desde;
    print ' al ';
    print $hasta;

    for ($i = $desde; $i <= $hasta; $i++) {
        $nDiv = 0; // Número de divisores

        for ($n = 1; $n <= $i; $n++) { // Desde 2 hasta el valor que tenga $i
        
            if ($i%$n === 0) { // $n es un divisor de $i
                $nDiv = $nDiv + 1; // Agregamos un divisor mas.
            }
        }

        if ($nDiv == 2) {// Si tiene 2 divisores: 1 y sí mismo --> Es primo
            print '<br>';
            print $i;
        }
    }
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo 'Por favor ingrasa el dato N (entero) mayor a 1 por la URL'; ?>
        
    </div>
    <?php
}
require_once 'footer.php';
