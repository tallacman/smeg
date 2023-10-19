<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');
?>

<?php
$a = new GlobalArea('Navigation');
$a->display();
?>

<?php
 $a = new Area('Main');
 $a->enableGridContainer();
 $a->display($c);
 ?>

<?php
$view->inc('elements/footer.php');