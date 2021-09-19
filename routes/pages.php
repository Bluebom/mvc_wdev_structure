<?php
    use \app\Http\Response;
    use \app\Controller\Pages;

    // Rota Home
    $obRouter-> get('/',[
        function(){
            return new Response(200, Pages\Home::getHome());
        }
    ]); 

    // Rota About
    $obRouter-> get('/sobre',[
        function(){
            return new Response(200, Pages\About::getAbout());
        }
    ]); 

    // Rota DINÂMICA
    $obRouter-> get('/pagina/{idPagina}/{acao}',[
        function($idPagina, $acao){
            return new Response(200, 'Página '.$idPagina." - $acao");
        }
    ]); 

?>
