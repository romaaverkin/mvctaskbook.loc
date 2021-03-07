<?php


class Controller_User extends Controller
{
    function action_login()
    {
        if (isset($_POST) && !empty($_POST))
        {
            $user = isset($_POST['user']) ? $_POST['user'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $user_model = $this->require_model('user_model');
            $count_user = $user_model->login($user, $email, $password);

            if ($count_user)
            {
                $data = "Пользователь с таким email уже существует!";
                $this->view->generate('user_view.php', 'template_view.php', $data);
            }
            else
            {
                $_SESSION['user'] = $user;
                header('Location: http://' . $_SERVER['HTTP_HOST']);
            }
        }
        else
        {
            $this->view->generate('user_view.php', 'template_view.php');
        }
    }

    public function action_logout()
    {
        session_destroy();
        header('Location: http://' . $_SERVER['HTTP_HOST']);
        exit;
    }
}