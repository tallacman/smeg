<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

?>

<?php
    View::element('system_errors', [
        'format' => 'block',
        'error' => isset($error) ? $error : null,
        'success' => isset($success) ? $success : null,
        'message' => isset($message) ? $message : null,
    ]);
    echo $innerContent;
?>


<?php
$view->inc('elements/footer.php');