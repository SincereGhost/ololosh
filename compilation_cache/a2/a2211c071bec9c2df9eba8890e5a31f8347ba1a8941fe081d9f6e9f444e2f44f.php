<?php

/* template_view.html.twig */
class __TwigTemplate_6218f2ec13d7c71ff4c50d12e84c8ab21606970a1c67ced42d22d5221932fba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "    
    ";
        // line 20
        $this->displayBlock('js', $context, $blocks);
        // line 23
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    <div id=\"wrapper\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <div class=\"title_sidebar\">
            </div>
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"/login\">Войти</a>
                </li>
                <li>
                    <a href=\"/\">Главная</a>
                </li>
                <li>
                    <a href=\"portfolio?portfolio\">Портфолио</a>
                </li>
                <li>
                    <a href=\"/posts?posts\">Новости</a>
                </li>
                <li>
                    <a href=\"/page?page/contacts\">Контакты</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"/js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/js/bootstrap.min.js\"></script>

    <!-- Menu Toggle Script -->

</body>

</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Simple Sidebar - Start Bootstrap Template";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\">
    ";
    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        // line 21
        echo "        <script type=\"text/javascript\" src=\"/ckeditor/ckeditor.js\"></script>
    ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template_view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 63,  134 => 21,  131 => 20,  125 => 16,  122 => 15,  116 => 12,  93 => 64,  91 => 63,  49 => 23,  47 => 20,  44 => 19,  42 => 15,  36 => 12,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}Simple Sidebar - Start Bootstrap Template{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     {% block css %}*/
/*         <link href="/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="/css/simple-sidebar.css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     */
/*     {% block js %}*/
/*         <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>*/
/*     {% endblock %}*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     <div id="wrapper">*/
/*         <!-- Sidebar -->*/
/*         <div id="sidebar-wrapper">*/
/*             <div class="title_sidebar">*/
/*             </div>*/
/*             <ul class="sidebar-nav">*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="/login">Войти</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/">Главная</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="portfolio?portfolio">Портфолио</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/posts?posts">Новости</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/page?page/contacts">Контакты</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /#sidebar-wrapper -->*/
/* */
/*         <!-- Page Content -->*/
/*         <div id="page-content-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /#page-content-wrapper -->*/
/* */
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="/js/jquery.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Menu Toggle Script -->*/
/* */
/* </body>*/
/* */
/* </html>*/
