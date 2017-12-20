<?php


class Model
{    
    public function connect()
    { 
        $connect = '';
        try {
            $connect = new Mysqli(HOST, USERNAME, PASSWORD, DATABASE);
            $connect->set_charset(CHARSET);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return $connect;
    }
    
    public function login($post)
    {
        $data = null;
        self::connect();
        if (!isset($_SESSION['user'])) {
            if ((isset($_POST['username'])) && (isset($_POST['password']))) {
                $data = self::autoriz($_POST['username'], $_POST['password']);
            }
            
        } else {
        }
 
       return $data;
    }
    
    public function autoriz($login, $pass)
    {
        $errAutoriz = false;
        $trueAutoriz = true;
        $login_1 = trim($login);
        $login_2 = stripslashes($login_1);
        $login_3 = strip_tags($login_2);
        $login_4 = htmlspecialchars($login_3);
        $loginFin = mb_strtolower($login_4, 'UTF-8');
        $heshPass = md5($pass);
        $dbLogin = $this->connect()->query("SELECT login, password FROM manager_user WHERE login='$loginFin' AND password='$heshPass'");
        $loginDB = mysqli_fetch_assoc($dbLogin);
        if ($loginDB != null)
        {
            $_SESSION['user'] = true;
            $_SESSION['userName'] = $loginDB['login'];
            return $trueAutoriz;
        } else {
            return $errAutoriz;
        }
    }
    
    

    // метод выборки данных
    public function get_data()
    {
            // todo
    }
}