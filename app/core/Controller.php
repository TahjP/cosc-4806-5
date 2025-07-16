<?php

class Controller {
    
    public function model ($model) {
        require_once 'app/models/' .$model . '.php';
        return new $model();
    }
    
    public function view($view, $data = []) {
        // Make variables from the data array available to the view
        if (is_array($data)) {
            extract($data, EXTR_SKIP);
        }
        require_once 'app/views/' . $view . '.php';
    }

}
