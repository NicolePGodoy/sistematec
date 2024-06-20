<?php
class Controller {
    public function loadModel($model) {
        require_once "../models/$model.php";
        return new $model();
    }

    public function render($view, $data = []) {
        extract($data);

        ob_start();
        require_once "../views/sections/header.php";
        $viewHeader = ob_get_clean();
        
        ob_start();
        require_once "../views/$view.php";
        $viewContent = ob_get_clean();

        $template = file_get_contents('../views/template.php');
        $template = str_replace('{{ header }}', $viewHeader, $template);
        $template = str_replace('{{ content }}', $viewContent, $template);
        
        echo $template;
    }
}
?>
