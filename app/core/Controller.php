<?php namespace app\core;


class Controller {
    public function view($view, $data = array())
    {
        require_once 'app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';

        $model = "app\models\\$model";
        return new $model;
    }
}