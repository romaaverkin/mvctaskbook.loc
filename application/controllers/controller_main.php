<?php


class Controller_Main extends Controller
{
    function action_index()
    {
        $task_model = $this->require_model('task_model');
        $data['task_list'] = $task_model->get_task_list();

//        echo $_SERVER['HTTP_HOST'];
        $this->view->generate('main_view.php', 'template_view.php', $data['task_list']);
    }
}