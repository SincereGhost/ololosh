<?php

/* addAdmin_view.html.twig */
class __TwigTemplate_9975e04e3618e23c5781ed3f4d494c5187cb415ab9104652189a2065b290e4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "addAdmin_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'jsPage' => array($this, 'block_jsPage'),
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
        echo "    <form method=\"post\" action=\"\">
        <label>Редактировать заголовок</label>
        <input type=\"text\" name=\"title\" value=\"\"/>
        <label>Редактировать ссылку</label>
        <input type=\"text\" name=\"url\" value=\"\"/>
        <label>Редактировать контент</label>
        <textarea id=\"editor1\" name=\"txt\" cols=\"100\" rows=\"20\"></textarea>
        <label>Редактировать описание</label>
        <textarea id=\"editor2\" name=\"description\" cols=\"120\"></textarea>
        <button type=\"submit\">Сохранить</button>
    </form>
";
    }

    // line 15
    public function block_jsPage($context, array $blocks = array())
    {
        // line 16
        echo "    <script type=\"text/javascript\">
        var ckeditor1 = CKEDITOR.replace( 'editor1' );
        AjexFileManager.init({
                returnTo: 'ckeditor',
                editor: ckeditor1
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "addAdmin_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  47 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/*     <form method="post" action="">*/
/*         <label>Редактировать заголовок</label>*/
/*         <input type="text" name="title" value=""/>*/
/*         <label>Редактировать ссылку</label>*/
/*         <input type="text" name="url" value=""/>*/
/*         <label>Редактировать контент</label>*/
/*         <textarea id="editor1" name="txt" cols="100" rows="20"></textarea>*/
/*         <label>Редактировать описание</label>*/
/*         <textarea id="editor2" name="description" cols="120"></textarea>*/
/*         <button type="submit">Сохранить</button>*/
/*     </form>*/
/* {% endblock %}*/
/* {% block jsPage %}*/
/*     <script type="text/javascript">*/
/*         var ckeditor1 = CKEDITOR.replace( 'editor1' );*/
/*         AjexFileManager.init({*/
/*                 returnTo: 'ckeditor',*/
/*                 editor: ckeditor1*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
