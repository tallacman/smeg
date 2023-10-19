<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>" data-bs-theme=light>
<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>

<?php   echo $html->css($view->getStylesheet('main.less'))?>
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass()?>">