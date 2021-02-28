<?php


class Task_Model extends Model
{
    public function get_task_list($sorting, $sorting_type, $start_from, $num_per_page)
    {
        $pdo = $this->db();
        $query = $pdo->prepare("SELECT tasks.id, users.login, users.email, tasks.task, tasks.performed
                                        FROM `tasks`
                                        JOIN `users`
                                        ON tasks.user_id = users.id
                                        ORDER BY $sorting $sorting_type
                                        LIMIT $start_from, $num_per_page");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function count_row()
    {
        $pdo = $this->db();
        $query = $pdo->query("SELECT COUNT(*) FROM tasks");
        return $query->fetchColumn();
    }

    public function add_task()
    {
        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $task = isset($_POST['task']) ? $_POST['task'] : '';

        $pdo = $this->db();
        $query = $pdo->query("SELECT id FROM users WHERE login='$login' AND email='$email'");
        $user_id = $query->fetchColumn();

        if ($user_id)
        {
            $query = $pdo->prepare('INSERT INTO tasks (id, user_id, task, performed) VALUES (NULL, :user_id, :task, 0)');
            $result = $query->execute(array(
                'user_id' => $user_id,
                'task' => $task,
            ));
        }
        else
        {
            $result = 0;
        }

        return $result;
    }
}