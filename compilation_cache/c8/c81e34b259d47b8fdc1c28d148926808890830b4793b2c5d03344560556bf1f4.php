<?php

/* portfolio_view.html.twig */
class __TwigTemplate_b2d2cdb71d4a650070c9908548ef89a771e630c2646b89da3986bcbd51fd2917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "portfolio_view.html.twig", 1);
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
        echo "    <h1>Портфолио</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolio"]) ? $context["portfolio"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 7
            echo $this->getAttribute($context["post"], "title", array(), "array");
            echo "</h3>
            </div>
            <div class=\"panel-body\">
                <p>";
            // line 10
            echo $this->getAttribute($context["post"], "content", array(), "array");
            echo "</p>
            </div>
            <div class=\"panel-footer\">
               <a href=\"?";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo $this->getAttribute($context["post"], "url", array(), "array");
            echo "\" class=\"btn btn-lg btn-success btn-block edit_button\">Просмотреть</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portfolio_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  48 => 10,  42 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'template_view.html.twig' %}*/
/* {% block content %}*/
/*     <h1>Портфолио</h1>*/
/*     {% for post in portfolio %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ post['title']|raw }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <p>{{ post['content']|raw }}</p>*/
/*             </div>*/
/*             <div class="panel-footer">*/
/*                <a href="?{{ url }}/{{ post['url']|raw }}" class="btn btn-lg btn-success btn-block edit_button">Просмотреть</a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
