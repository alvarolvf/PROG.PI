<?php
    
    require_once __DIR__ . '/app/controller/controller.php';

    $controller = new tarefaController();

    $action = $_GET['action'] ?? 'index';

    switch($action){
        case 'index':
            $controller->index();
            break; 
        case 'criar':
            $controller->criar();
            break; 
        case 'excluir':
            $controller->excluir(); 
            break; 
        case 'editar':
            $controller->editar();
        default:
            echo "Ação inválida"; 
            break; 
    }


?>