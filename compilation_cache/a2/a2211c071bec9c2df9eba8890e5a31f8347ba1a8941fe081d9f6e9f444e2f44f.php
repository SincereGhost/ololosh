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
            'sidebar' => array($this, 'block_sidebar'),
            'navigation' => array($this, 'block_navigation'),
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
        // line 39
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
        ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 76
        echo "        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 82
        $this->loadTemplate("login_view.html.twig", "template_view.html.twig", 82)->display($context);
        // line 83
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper --> 
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
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"/vendor/ckeditor/ckeditor.js\"></script>
        <script type=\"text/javascript\" src=\"/js/login.js\"></script>
        <script>
            \$(document).ready(function(){
                //Скрыть PopUp при загрузке страницы    
                PopUpHide();
            });
            //Функция отображения PopUp
            function PopUpShow(){
                \$(\"#popup1\").show();
            }
            //Функция скрытия PopUp
            function PopUpHide(){
                \$(\"#popup1\").hide();
            }
        </script>
    ";
    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        // line 52
        echo "        <div id=\"sidebar-wrapper\">
            <div class=\"title_sidebar\">
            </div>
            <ul class=\"sidebar-nav\">
                ";
        // line 56
        $this->displayBlock('navigation', $context, $blocks);
        // line 73
        echo "            </ul>
        </div>
        ";
    }

    // line 56
    public function block_navigation($context, array $blocks = array())
    {
        // line 57
        echo "                <li class=\"sidebar-brand\">
                    <a href=\"javascript:PopUpShow()\">Войти</a>
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
                ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 83,  152 => 57,  149 => 56,  143 => 73,  141 => 56,  135 => 52,  132 => 51,  111 => 21,  108 => 20,  102 => 16,  99 => 15,  93 => 12,  80 => 84,  77 => 83,  75 => 82,  67 => 76,  65 => 51,  51 => 39,  49 => 20,  46 => 19,  44 => 15,  38 => 12,  25 => 1,);
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
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="/vendor/ckeditor/ckeditor.js"></script>*/
/*         <script type="text/javascript" src="/js/login.js"></script>*/
/*         <script>*/
/*             $(document).ready(function(){*/
/*                 //Скрыть PopUp при загрузке страницы    */
/*                 PopUpHide();*/
/*             });*/
/*             //Функция отображения PopUp*/
/*             function PopUpShow(){*/
/*                 $("#popup1").show();*/
/*             }*/
/*             //Функция скрытия PopUp*/
/*             function PopUpHide(){*/
/*                 $("#popup1").hide();*/
/*             }*/
/*         </script>*/
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
/*         {% block sidebar %}*/
/*         <div id="sidebar-wrapper">*/
/*             <div class="title_sidebar">*/
/*             </div>*/
/*             <ul class="sidebar-nav">*/
/*                 {% block navigation %}*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="javascript:PopUpShow()">Войти</a>*/
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
/*                 {% endblock %}*/
/*             </ul>*/
/*         </div>*/
/*         {% endblock %}*/
/*         <!-- /#sidebar-wrapper -->*/
/*         <!-- Page Content -->*/
/*         <div id="page-content-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         {% include 'login_view.html.twig' %}*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /#page-content-wrapper -->*/
/*     </div>*/
/*     <!-- /#wrapper --> */
/* </body>*/
/* */
/* </html>*/
