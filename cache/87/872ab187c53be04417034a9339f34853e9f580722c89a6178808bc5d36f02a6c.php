<?php

/* weye/template/common/search.twig */
class __TwigTemplate_4adebd138c78eee8f09760d5a0cefc4f233836c4c068cc9b153dc420b9e7165a extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
  <button type=\"button\" class=\"btn btn-default py-0 px-3\"><i class=\"fas fa-search\"></i></button>
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/*   <button type="button" class="btn btn-default py-0 px-3"><i class="fas fa-search"></i></button>*/
/* </div>*/
