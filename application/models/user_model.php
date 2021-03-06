<?php


class User_Model extends Model
{
    public function login($user, $email, $password)
    {
//        echo "$user<br>$email<br>$password";
//        exit();
        $pdo = $this->db();
        $query = $pdo->query("SELECT COUNT(*) FROM `users` WHERE email = '$email'");
        $count_user = $query->fetchColumn();

        if ($count_user)
        {
            return $count_user;
        }
        else
        {
            $query = $pdo->prepare('INSERT INTO users (id, login, email, password, role_id) VALUES (NULL, :login, :email, :password, 2)');
            $result = $query->execute(array(
                'login' => $user,
                'email' => $email,
                'password' => $password,
            ));
            return false;
        }
    }
}