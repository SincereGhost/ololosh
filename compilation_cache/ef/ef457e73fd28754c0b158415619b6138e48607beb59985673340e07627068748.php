<?php

/* admin_view.html.twig */
class __TwigTemplate_4b8fb09766635424280f363a7a18db346d1bf91b8f75a7be93803ad08740d873 extends Twig_Template
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
