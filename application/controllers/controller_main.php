<?php


class Controller_Main extends Controller
{

    function action_index()
    {
        $sorting_array = array("login", "email", "performed");
        $sorting_type_array = array("asc", "desc");

        $sorting = isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'login';
        $sorting_type = isset($_GET['sort_type']) ? htmlspecialchars($_GET['sort_type']) : 'asc';

        if (!array_search($sorting, $sorting_array)) $sorting = 'login';
        if (!array_search($sorting_type, $sorting_type_array)) $sorting_type = 'asc';

        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $num_per_page = 3;
        $start_from = ($page - 1) * 3;

        $task_model = $this->require_model('task_model');
        $total_record = $task_model->count_row();

        $total_page = ceil($total_record / $num_per_page);

        $data = $task_model->get_task_list($sorting, $sorting_type, $start_from, $num_per_page);

        $this->view->generate('main_view.php', 'template_view.php', $data, $page, $total_page, $sorting, $sorting_type);
    }
}