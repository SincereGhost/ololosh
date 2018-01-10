<?php

class Controller_Admin extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Admin();
        parent::__construct();
    }

    public function action_index()
    {
        $this->view->generate('admin_view.php', [], 'adminTemplateView.php');
    }

    public function action_articles()
    {
        $data = $this->model->getArticles();
        $this->view->generate('admin_articles_view.php', $data, 'adminTemplateView.php');
    }

    public function action_articleUpdate($id)
    {
        if (isset($_POST) && !empty($_POST)) {
            $data = $_POST;
            $data['id'] = $id;
            $this->model->updateArticle($data);
        }
        $data = $this->model->getArticleById($id);
        $this->view->generate('admin_articles_update_view.php', $data, 'adminTemplateView.php');
    }

    public function action_articleInsert()
    {
        if (isset($_POST) && !empty($_POST)) {
            $data = $_POST;
            $data = $this->model->articleInsert($data);

//            header('Location: /admin/articleUpdate/'.$data['id']);
            header('Location: /blog/single/'.$data['url']);
            exit;
        }

        $this->view->generate('admin_articles_insert_view.php', [], 'adminTemplateView.php');
    }
}