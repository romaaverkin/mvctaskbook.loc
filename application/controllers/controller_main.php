<?php


class Controller_Main extends Controller
{

    function action_index()
    {
        if (isset($_GET['Page']))
        {
            $page = $_GET['page'];
        } else
        {
            $page = 1;
        }

        $num_per_page = 3;
        $start_from = ($page - 1) * 3;

        $task_model = $this->require_model('task_model');
        $data = $task_model->get_task_list($start_from, $num_per_page);

        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}