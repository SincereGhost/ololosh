<?php

class Controller_Content extends Controller
{

    function __construct()
    {
        $this->model = new Model_Content();
        parent::__construct();
    }

    function action_index()
    {
        $fulUrl = $this->model->readGet($_GET);
        if (empty($fulUrl[1])) {
            $data = $this->model->getPortfolioList($fulUrl[0]);
            $arr = array('portfolio' => $data, 'url' => $fulUrl[0]);
            echo $this->view->render('portfolio_view.html.twig',$arr);
        } else {
            $data = $this->model->getContent($fulUrl[0], $fulUrl[1]);
            $arr = array('contents' => $data, 'url' => $fulUrl[0]);
            echo $this->view->render('single_view.html.twig', $arr);
        }
    }
}
