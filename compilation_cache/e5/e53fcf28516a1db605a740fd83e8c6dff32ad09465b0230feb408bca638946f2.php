<?php

/* admin_view.php */
class __TwigTemplate_01dd837fb2f6cf24c35aa7202fc97e23ba1a530395b72724ac38f15f62b6401b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplateView.php", "admin_view.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminTemplateView.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1><?php echo \$data; ?></h1>
";
    }

    public function getTemplateName()
    {
        return "admin_view.php";
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
/* {% extends "adminTemplateView.php" %}*/
/* {% block content %}*/
/* <h1><?php echo $data; ?></h1>*/
/* {% endblock %}*/
/* */
/* */
