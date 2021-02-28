<?php


class Controller_task extends Controller
{
    function action_add()
    {
        if (isset($_POST) && !empty($_POST)) {
            $task_model = $this->require_model('task_model');
            if($task_model->add_task()) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] );
                exit;
            }
            else
            {
                todo();
            }
        }
        $this->view->generate('task_view.php', 'template_view.php');
    }
}