<?php
use DebugBar\StandardDebugBar;

require_once __DIR__ . '/header.php';

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");
$debugbar["messages"]->addMessage($_ENV);
$debugbar["messages"]->info('ok');
?>
<html>
    <head>
        <?php echo $debugbarRenderer->renderHead() ?>
    </head>
    <body>
        <?php echo $debugbarRenderer->render() ?>
    </body>
</html>
