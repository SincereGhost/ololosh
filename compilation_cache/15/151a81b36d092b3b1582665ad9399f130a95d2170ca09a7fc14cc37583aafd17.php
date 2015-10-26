<?php

/* listResultAdmin_view.html.twig */
class __TwigTemplate_1daf0bf1e843882b2e800a092615bb6a22ae303b2154ed750df71383fd318df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "listResultAdmin_view.html.twig", 1);
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
        echo "<nav class=\"navbar navbar-inverse\">
  <a href=\"/admin/addPost?";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["urlPage"]) ? $context["urlPage"] : null), "html", null, true);
        echo "\" class=\"btn btn-lg btn-success btn-block add_button\">Добавить новую запись</a>
</nav>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 7
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 9
            echo $this->getAttribute($context["content"], "title", array(), "array");
            echo "</h3>
            </div>
            <div class=\"panel-body\">
                <p>";
            // line 12
            echo $this->getAttribute($context["content"], "content", array(), "array");
            echo "</p>
            </div>
            <div class=\"panel-footer ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "class", array(), "array"), "html", null, true);
            echo "\">
               <a href=\"?";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["urlPage"]) ? $context["urlPage"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "url", array(), "array"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-success btn-block edit_button\">Редактировать</a>
               <a href=\"/admin/delPost?";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["urlPage"]) ? $context["urlPage"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "url", array(), "array"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-success btn-block del_button\">Удалить</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "listResultAdmin_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  62 => 15,  58 => 14,  53 => 12,  47 => 9,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/* <nav class="navbar navbar-inverse">*/
/*   <a href="/admin/addPost?{{urlPage}}" class="btn btn-lg btn-success btn-block add_button">Добавить новую запись</a>*/
/* </nav>*/
/*     {% for content in list %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ content['title']|raw }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <p>{{ content['content']|raw }}</p>*/
/*             </div>*/
/*             <div class="panel-footer {{content['class']}}">*/
/*                <a href="?{{urlPage}}/{{content['url']}}" class="btn btn-lg btn-success btn-block edit_button">Редактировать</a>*/
/*                <a href="/admin/delPost?{{urlPage}}/{{content['url']}}" class="btn btn-lg btn-success btn-block del_button">Удалить</a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
