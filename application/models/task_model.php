<?php


class Task_Model extends Model
{
    public function get_task_list()
    {
        $sorting_array = array("login", "email", "performed");
        $sorting_type_array = array("asc", "desc");

        $sorting = isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'login';
        $sorting_type = isset($_GET['sort_type']) ? htmlspecialchars($_GET['sort_type']) : 'asc';

        if (!array_search($sorting, $sorting_array)) $sorting = 'login';
        if (!array_search($sorting_type, $sorting_type_array)) $sorting_type = 'asc';

        $pdo = $this->db();
        $query = $pdo->prepare("SELECT users.login, users.email, tasks.task, tasks.performed
                                        FROM `tasks`
                                        JOIN `users`
                                        ON tasks.user_id = users.id
                                        ORDER BY $sorting $sorting_type");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}