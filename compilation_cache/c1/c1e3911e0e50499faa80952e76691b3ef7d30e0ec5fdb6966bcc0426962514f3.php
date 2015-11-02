<?php

/* editAdmin_view.html.twig */
class __TwigTemplate_d7f63b2a147a0b2f02d4b4ffb826dacb9aa7c0b708dbe60b50778f7e9560ff5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "editAdmin_view.html.twig", 1);
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
        echo "    <div class=\"panel panel-default\">
        <form method=\"post\" action=\"\">
            <div class=\"panel-heading\">
                <label>Редактировать заголовок</label>
                <input type=\"text\" name=\"title\" value=\"";
        // line 7
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "array");
        echo "\"/>
                <label>Редактировать ссылку</label>
                <input type=\"text\" name=\"url\" value=\"";
        // line 9
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "url", array(), "array");
        echo "\"/>
            </div>
            <div class=\"panel-body\">
                <label>Редактировать контент</label>
                <textarea id=\"editor1\" name=\"txt\" cols=\"100\" rows=\"20\">";
        // line 13
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array(), "array");
        echo "</textarea>
                <label>Редактировать описание</label>
        <textarea id=\"editor2\" name=\"description\" cols=\"115\" rows=\"10\">";
        // line 15
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array(), "array");
        echo "</textarea>
            </div>
            <button type=\"submit\">Сохранить</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "editAdmin_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  49 => 13,  42 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/*     <div class="panel panel-default">*/
/*         <form method="post" action="">*/
/*             <div class="panel-heading">*/
/*                 <label>Редактировать заголовок</label>*/
/*                 <input type="text" name="title" value="{{ content['title']|raw }}"/>*/
/*                 <label>Редактировать ссылку</label>*/
/*                 <input type="text" name="url" value="{{ content['url']|raw }}"/>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <label>Редактировать контент</label>*/
/*                 <textarea id="editor1" name="txt" cols="100" rows="20">{{ content['content']|raw }}</textarea>*/
/*                 <label>Редактировать описание</label>*/
/*         <textarea id="editor2" name="description" cols="115" rows="10">{{ content['description']|raw }}</textarea>*/
/*             </div>*/
/*             <button type="submit">Сохранить</button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
