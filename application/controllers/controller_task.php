<?php


class Controller_task extends Controller
{
    function action_add()
    {
        if (isset($_POST) && !empty($_POST)) {
            $login = isset($_POST['login']) ? $_POST['login'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $task = isset($_POST['task']) ? $_POST['task'] : '';

            $task_model = $this->require_model('task_model');
            if($task_model->add_task($login, $email, $task)) {
                $_SESSION['user'] = $login;
                header('Location: http://' . $_SERVER['HTTP_HOST'] );
                exit;
            }
            else
            {
                $data = "Неверный логин и/или пароль, пожалуйста введите правильные данные или зарегистрируютесь!";
                $this->view->generate('task_view.php', 'template_view.php', $data);
            }
        }
        else
        {
            $this->view->generate('task_view.php', 'template_view.php');
        }
    }
}