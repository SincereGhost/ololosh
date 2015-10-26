<?php
use Routing\Router;
use Routing\MatchedRoute;

try {
    $router = new Router(GET_HTTP_HOST());


    //Main
//    $router->add('homepage', '/', 'Controller_Main:action_index');
//    $router->add('error404', '/404', 'Controller_Main:action_error404');
//    $router->add('staticPage', '/(slug:str).html', 'Controller_Main:action_staticPage');

    //News
//    $router->add('news', '/news', 'Controller_News:action_index');
//    $router->add('article', '/article/(slug:str)', 'Controller_News:action_article');

    // $router->add('about', '/about', 'AppController:aboutAction');
    // $router->add('contacts', '/contacts', 'AppController:contactsAction');
    // $router->add('user', '/user/(id:num)', 'AppController:userAction');

    //Admin
//    $router->add('adminMain', '/admin', 'Controller_Admin:action_index' , 'GET|POST');
//    $router->add('adminLogin', '/admin/login', 'Controller_Admin:action_login');
//    $router->add('adminLogout', '/admin/logout', 'Controller_Admin:action_logout');
//    $router->add('adminNews', '/admin/news', 'Controller_Admin:action_news' , 'GET|POST');
//    $router->add('adminArticle', '/admin/article/id(id:num)', 'Controller_Admin:action_article' , 'GET|POST');
//    $router->add('adminPages', '/admin/pages', 'Controller_Admin:action_pages' , 'GET|POST');
//    $router->add('adminOnePage', '/admin/page/id(id:num)', 'Controller_Admin:action_onepage' , 'GET|POST');
    
    //Admin my
    $router->add('adminAutoriz', '/login', 'Controller_Login:action_index', 'GET|POST');
    $router->add('adminLogout', '/logout', 'Controller_Logout:action_index');
    $router->add('adminMain', '/admin', 'Controller_Admin:action_index', 'GET|POST');
    $router->add('adminDelPost', '/admin/delPost', 'Controller_Admin:action_delPost', 'GET|POST');
    $router->add('adminAddPost', '/admin/addPost', 'Controller_Admin:action_addPost', 'GET|POST');
    
    // Main
    $router->add('Main', '/', 'Controller_Main:action_index');
    $router->add('PortfolioMain', '/portfolio', 'Controller_Content:action_index');
    $router->add('PostsMain', '/posts', 'Controller_Content:action_index');
    $router->add('PageMain', '/page', 'Controller_Content:action_index');
    $router->add('error404', '/404', 'Controller_Maiv:action_error404');
    
    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Controller_Main:action_error404');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
