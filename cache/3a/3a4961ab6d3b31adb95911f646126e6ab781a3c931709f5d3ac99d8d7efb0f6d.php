<?php

/* weye/template/extension/module/carousel.twig */
class __TwigTemplate_21889492ec27754462c473d8348cda5624e0dc2ee8419b2666a77188d51dbe33 extends Twig_Template
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
        echo "<div class=\"container my-5 py-3\" id=\"carousel";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
    <div class=\"row\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "        <div class=\"col-12 col-lg-";
            echo (isset($context["col"]) ? $context["col"] : null);
            echo " text-center\">
          ";
            // line 5
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo " 
            <a href=\"";
                // line 6
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\">
              <img src=\"";
                // line 7
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-fluid\" /></a>
            ";
            } else {
                // line 9
                echo "              <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-fluid\" />
            ";
            }
            // line 11
            echo "        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  57 => 11,  49 => 9,  42 => 7,  38 => 6,  34 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="container my-5 py-3" id="carousel{{ module }}">*/
/*     <div class="row">*/
/*       {% for banner in banners %}*/
/*         <div class="col-12 col-lg-{{ col }} text-center">*/
/*           {% if banner.link %} */
/*             <a href="{{ banner.link }}">*/
/*               <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-fluid" /></a>*/
/*             {% else %}*/
/*               <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-fluid" />*/
/*             {% endif %}*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/* </div>*/
