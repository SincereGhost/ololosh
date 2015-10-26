<?php

/* login_view.html.twig */
class __TwigTemplate_bbff0854d3e0376b7ef7364fea1ab2c996ebbd75685fd29688bd0be398f09604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "login_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"wrap_form_autoriz\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Пожалуйста авторизуйтесь</h3>
        </div>
        <div class=\"panel-body\">
            <form method=\"post\" action=\"\">
                <div class=\"form-group\">
                    <input class=\"form-control\" placeholder=\"Username\" name=\"username\" type=\"text\" value=\"\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
                </div>
                <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Войти</button>
            </form>
        </div>
    </div>  
";
    }

    public function getTemplateName()
    {
        return "login_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/*     <div class="wrap_form_autoriz">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Пожалуйста авторизуйтесь</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form method="post" action="">*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" placeholder="Username" name="username" type="text" value="">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" placeholder="Password" name="password" type="password" value="">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-lg btn-success btn-block">Войти</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>  */
/* {% endblock %}*/
