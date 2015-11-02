<?php
use Routing\UrlGenerator;

class Controller 
{
    public $model;
    public $view;
    protected $router;

    function __construct()
    {
        global $router;
        $this->router = $router;
        $loader = new Twig_Loader_Filesystem(DIR_VIEW);
        $this->view = new Twig_Environment($loader, array(
            'cache'       => 'compilation_cache',
            'auto_reload' => true,
            'debug' => true
        ));
        $this->view->addGlobal('url', $this->router);
        $this->view->addExtension(new Twig_Extension_Debug());
        if (isset($_SESSION['userName'])) {
            $this->view->addGlobal('user', $_SESSION['userName']);
        }
    }

    // действие (action), вызываемое по умолчанию
    function action_index($getUrl)
    {
        // todo	
    }
}
