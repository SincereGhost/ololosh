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
                $fulUrl = $this->model->readGet($_GET);
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
    
    public function action_delPost()
    {
        $fulUrl = $this->model->readGet($_GET);
        $data = $this->model->delPost($fulUrl[0], $fulUrl[1]);
    }
    
    public function action_addPost()
    {
        $data = null;
         if (!empty($_POST)){
            $fulUrl = $this->model->readGet($_GET);
            $postResult = $this->model->readPost($_POST);
            $data = $this->model->addPost($postResult['title'], $postResult['content'], $postResult['url'], $fulUrl[0]);
        }
        $this->view->generate('addAdmin_view.php', $data, 'adminTemplateView.php');
        
    }
}