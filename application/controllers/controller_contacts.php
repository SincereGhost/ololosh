<?php

class Controller_Contacts extends Controller
{
    function __construct()
    {
        $this->model = new Model_Contacts();
        parent::__construct();
    }
	
    function action_index()
    {
        $data = $this->model->getData();
        $this->view->generate('contacts_view.php', $data, 'template_view.php');
    }
}
