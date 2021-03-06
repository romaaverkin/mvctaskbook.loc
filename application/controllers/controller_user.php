<?php


class Controller_User extends Controller
{
    function action_login()
    {
        if (isset($_POST) && !empty($_POST)) {
            $user = isset($_POST['user']) ? $_POST['user'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';

            $user_model = $this->require_model('user_model');
            $check_login = $user_model->login($email);

            if ($check_login)
            {
                $data = "Пользователь с таким email уже существует!";
                $this->view->generate('user_view.php', 'template_view.php', $data);
            }
            else
            {
                echo 42;
                exit;
                $_SESSION['user'] = $user;
                header('Location: http://' . $_SERVER['HTTP_HOST']);
            }



            if ($user)
            {
                $_SESSION['user'] =$user;
            }

            if($user_model->add_user($user, $email)) {
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
            $this->view->generate('user_view.php', 'template_view.php');
        }
    }
}