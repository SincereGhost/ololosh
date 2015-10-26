<?php

class Controller_Main extends Controller
{
    public function __construct() 
    {
        $this->model = new Model_Main();
        parent::__construct();
    }

    public function action_index()
    {
        $data = $this->model->getContent();
        $arr = array('contents' => $data);
        echo $this->view->render('main_view.html.twig', $arr);
    }
    
    public function action_error404()
    {
        echo $this->view->render('404_view.html.twig');
    }
}