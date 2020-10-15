<?php
require_once 'index.php';
/**
 * Práctica PHP
 *
 * 2.1. Dado un número ​ N ​ y un texto ​ S ​ , muestre en pantalla el texto ​ S ​ repetido N veces
 */

if (isset($_GET['N']) && !empty($_GET['N']) && is_numeric($_GET['N']) && isset($_GET['S']) && !empty($_GET['S'])) {
    $number = $_GET['N'] ;
    $string = $_GET['S'];

    
    $i = 0;
    while ($i < $number) {
        ?>
        <div class="alert alert-success" role="alert">
  <?php echo $string; ?>
</div>
<?php
        $i++;
    }
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo 'Por favor ingresa los datos para N (entero) & S (string) por la URL'; ?>
        
    </div>
    <?php
}
require_once 'footer.php';
