<?php


class Task_Model extends Model
{
    public function get_task_list($sorting, $sorting_type, $start_from, $num_per_page)
    {
        $pdo = $this->db();
        $query = $pdo->prepare("SELECT users.login, users.email, tasks.task, tasks.performed
                                        FROM `tasks`
                                        JOIN `users`
                                        ON tasks.user_id = users.id
                                        ORDER BY $sorting $sorting_type
                                        LIMIT $start_from, $num_per_page");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}