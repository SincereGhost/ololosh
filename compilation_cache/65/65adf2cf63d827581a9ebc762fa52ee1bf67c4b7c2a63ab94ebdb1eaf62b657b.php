<?php

/* admin_view.html.twig */
class __TwigTemplate_c26bb9ffea2c552e7989279d9f027124379fe71a3f817c87d223c87385463640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "admin_view.html.twig", 1);
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["admin"]) ? $context["admin"] : null), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "admin_view.html.twig";
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
/*     <h1>{{admin}}</h1>*/
/* {% endblock%}*/
/* */
/* */
