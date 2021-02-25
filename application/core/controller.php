<?php


class Controller
{
    public $view;

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->view= new View();
    }

    public function require_model($model)
    {
        $model_file = $model . ".php";
        require_once "application/models/" . $model_file;
        return new $model();
    }
}