<?php
    ob_start();
    define('ROOT', __DIR__);
    define("URL", 'http://localhost/mvcWdev');

    session_start();

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    
    require __DIR__.'/vendor/autoload.php';

    use \app\Http\Router;
    use \app\Utils\View;

    // Define o valor padrão das variáveis
    View::init([
        'URL' => URL
    ]);

    $obRouter = new Router(URL);

    include __DIR__.'/routes/pages.php';

    // Imprime o response da página
    $obRouter->run()->sendResponse();
    ob_end_flush();
?>
