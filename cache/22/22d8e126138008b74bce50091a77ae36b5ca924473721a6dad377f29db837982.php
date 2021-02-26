<?php

/* weye/template/extension/module/html.twig */
class __TwigTemplate_a0d53b7160342938cae161089feac3c24a8c4fbbf786a1206de43e8ba94376f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "  <h2>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>
  ";
        }
        // line 5
        echo "  ";
        echo (isset($context["html"]) ? $context["html"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div>*/
/*   {% if heading_title %}*/
/*   <h2>{{ heading_title }}</h2>*/
/*   {% endif %}*/
/*   {{ html }}*/
/* </div>*/
