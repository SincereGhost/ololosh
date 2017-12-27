<?php

/* single_view.html.twig */
class __TwigTemplate_0e5c7ae27e5fef7c1808c1d795a9a0ed4dd085fef7bd316c076ca3c99ae04e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "single_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 5
        echo $this->getAttribute((isset($context["contents"]) ? $context["contents"] : null), "title", array(), "array");
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <p>";
        // line 8
        echo $this->getAttribute((isset($context["contents"]) ? $context["contents"] : null), "content", array(), "array");
        echo "</p>
        </div>
        <div class=\"panel-footer\">
           <a href=\"?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" class=\"btn btn-lg btn-success btn-block edit_button\">Назад</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "single_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  41 => 8,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'template_view.html.twig' %}*/
/* {% block content %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ contents['title']|raw }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <p>{{ contents['content']|raw }}</p>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*            <a href="?{{ url }}" class="btn btn-lg btn-success btn-block edit_button">Назад</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
