<?php

class Controller_Blog extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Blog();
        parent::__construct();
    }

    public function action_index()
    {
        $data = $this->model->getPosts();
        $this->view->generate('blog_view.php', $data);
    }

    public function action_single($url)
    {
        $data = $this->model->getContentOneNews($url);
        $this->view->generate('single_view.php', $data);
    }

}