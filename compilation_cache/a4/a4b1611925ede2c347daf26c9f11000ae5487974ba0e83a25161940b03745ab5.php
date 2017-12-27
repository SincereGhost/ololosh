<?php

/* userListAdmin_view.html.twig */
class __TwigTemplate_d1a8d37c1b969d7d648780322adb4624e4aec681eda44e35706a205be0ca76d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "userListAdmin_view.html.twig", 1);
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
        echo "<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 5
            echo "    <li>
        <h1>";
            // line 6
            echo $this->getAttribute($context["content"], "login", array(), "array");
            echo "</h1>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "userListAdmin_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/* <ul>*/
/*     {% for content in list %}*/
/*     <li>*/
/*         <h1>{{ content['login']|raw }}</h1>*/
/*     </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
