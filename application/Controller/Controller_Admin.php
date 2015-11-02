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
                header('location:/');
                echo $this->view->render('main_view.html.twig');
            } else {
            if (empty($_GET)) {
                $data = 'Добро пожаловать '.$_SESSION['userName'];
                $arr = array('admin' => $data);
                echo $this->view->render('admin_view.html.twig', $arr);
            } else {
                $fulUrl = $this->model->readGet($_GET);
                if (empty($fulUrl[1])) {
                    $data = $this->model->getContentList($fulUrl[0]);
                    $arr = array('list' => $data, 'urlPage' => $fulUrl[0]);
                    echo $this->view->render($data[0]['templateName'].'.html.twig', $arr);
                } else {
                    if (!empty($_POST)){
                        $postResult = $this->model->readPost($_POST);
                        $data = $this->model->updateContent($postResult['title'], $postResult['content'], $postResult['description'], $postResult['url'], $fulUrl[0], $fulUrl[1]);
                        echo $this->view->render('admin_view.html.twig', $data);
                   } else {
                        $data = $this->model->getContent($fulUrl[0], $fulUrl[1]);
                        $arr = array('content' => $data);
                        echo $this->view->render('editAdmin_view.html.twig', $arr);
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
         if (!empty($_POST)){
            $fulUrl = $this->model->readGet($_GET);
            $postResult = $this->model->readPost($_POST);
            $data = $this->model->addPost($postResult['title'], $postResult['content'], $postResult['description'], $postResult['url'], $fulUrl[0]);
        }
        echo $this->view->render('addAdmin_view.html.twig');   
    }
}