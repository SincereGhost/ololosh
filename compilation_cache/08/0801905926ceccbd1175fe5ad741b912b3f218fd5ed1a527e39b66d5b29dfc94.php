<?php

/* adminTemplate.html.twig */
class __TwigTemplate_2d08f98ef25cbe84e2030f09b38fc17d1702305974b0b84b03425f51f0f4d171 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "    
    ";
        // line 18
        $this->displayBlock('js', $context, $blocks);
        // line 36
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
            <h4>Вы вошли как: <a href=\"/admin\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "</a></h4>
            </div>
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"/logout\">Выйти</a>
                </li>
                <li>
                    <a href=\"/admin\">Главная</a>
                </li>
                <li>
                    <a href=\"/admin?portfolio\">Портфолио</a>
                </li>
                <li>
                    <a href=\"/admin?posts\">Новости</a>
                </li>
                <li>
                    <a href=\"/admin?page\">Страницы</a>
                </li>
                <li>
                    <a href=\"/admin?manager_user\">Пользователи</a>
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
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script type=\"text/javascript\">
        var ckeditor1 = CKEDITOR.replace( 'editor1' );
        AjexFileManager.init({
                returnTo: 'ckeditor',
                editor: ckeditor1
        });
    </script>
    <!-- Menu Toggle Script -->

</body>

</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Портфолио";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        // line 14
        echo "        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\">
    ";
    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        // line 19
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
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
        <script type=\"text/javascript\" src=\"/vendor/ckeditor/ckeditor.js\"></script>
    ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "adminTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 80,  143 => 19,  140 => 18,  134 => 14,  131 => 13,  125 => 10,  98 => 81,  96 => 80,  63 => 50,  47 => 36,  45 => 18,  42 => 17,  40 => 13,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}Портфолио{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     {% block css %}*/
/*         <link href="/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="/css/simple-sidebar.css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     */
/*     {% block js %}*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
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
/*         <script type="text/javascript" src="/vendor/ckeditor/ckeditor.js"></script>*/
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
/*             <h4>Вы вошли как: <a href="/admin">{{user}}</a></h4>*/
/*             </div>*/
/*             <ul class="sidebar-nav">*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="/logout">Выйти</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin">Главная</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?portfolio">Портфолио</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?posts">Новости</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?page">Страницы</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?manager_user">Пользователи</a>*/
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
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script type="text/javascript">*/
/*         var ckeditor1 = CKEDITOR.replace( 'editor1' );*/
/*         AjexFileManager.init({*/
/*                 returnTo: 'ckeditor',*/
/*                 editor: ckeditor1*/
/*         });*/
/*     </script>*/
/*     <!-- Menu Toggle Script -->*/
/* */
/* </body>*/
/* */
/* </html>*/
