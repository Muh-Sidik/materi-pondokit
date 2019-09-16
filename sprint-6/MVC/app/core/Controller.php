<?php
// Class Controller untuk kelas utama juga

class Controller {

    public function view($view, $data = []) {

        require_once '../app/view/'. $view .'.php';

    }

    public function model($model)
    {
        require_once '../app/models/'. $model .'.php';
        return new $model;
    }
    
}