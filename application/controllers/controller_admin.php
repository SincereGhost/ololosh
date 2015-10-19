<?php

class Controller_Admin extends Controller
{
    public $link;
    
    public function __construct() 
    {
        $this->model = new Model_Admin();
        parent::__construct();
    }
    
    public function action_index()
    {
        if (!isset($_SESSION['user'])) {
            header('location:/login');
            $this->view->generate('login_view.php');
        } else {
            if (empty($_GET)) {
                $data = 'Добро пожаловать '.$_SESSION['userName'];
                $this->view->generate('admin_view.php', $data, 'adminTemplateView.php');
            } else {
                $mykey = key($_GET);
                $fulUrl = explode('/', $mykey);
                if (empty($fulUrl[1])) {
                    $data = $this->model->getContentList($fulUrl[0]);
                    $this->view->generate('listResultAdmin_view.php', $data, 'adminTemplateView.php');
                } else {
                    if (!empty($_POST)){
                        $title = $_POST['title'];
                        $content = $_POST['txt'];
                        $urlCont = $_POST['url'];
                        $data = $this->model->updateContent($title, $content, $urlCont, $fulUrl[0], $fulUrl[1]);
                        $this->view->generate('admin_view.php', $data, 'adminTemplateView.php');
                   } else {
                        $data = $this->model->getContent($fulUrl[0], $fulUrl[1]);
                        $this->view->generate('editAdmin_view.php', $data, 'adminTemplateView.php');
                   }
                }   
            }
        }
    }
    
    public static function menu()
    {
        $test = 'privet';
        echo $test;
    }
}