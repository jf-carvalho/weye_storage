<?php

/* weye/template/extension/module/slideshow.twig */
class __TwigTemplate_160225fd60187d01a265b388aa47e5b91969a301bb46cd414fb189d0afbf7b43 extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        ";
            if (($context["i"] == 0)) {
                // line 5
                echo "          <li data-target=\"#carousel-";
                echo (isset($context["module_name"]) ? $context["module_name"] : null);
                echo "\" data-slide-to=\"";
                echo $context["i"];
                echo "\" class=\"active\"></li>
        ";
            } else {
                // line 7
                echo "          <li data-target=\"#carousel-";
                echo (isset($context["module_name"]) ? $context["module_name"] : null);
                echo "\" data-slide-to=\"";
                echo $context["i"];
                echo "\"></li>
        ";
            }
            // line 9
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ol>
  <div class=\"carousel-inner\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "        <div class=\"carousel-item ";
            echo ((($context["i"] == 0)) ? ("active") : (""));
            echo " text-center\">
            ";
            // line 14
            if ($this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "link", array())) {
                // line 15
                echo "              <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "link", array());
                echo "\">
                <img src=\"";
                // line 16
                echo $this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "title", array());
                echo "\" class=\"img-fluid\" />
              </a>
            ";
            } else {
                // line 19
                echo "              <img src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), $context["i"], array(), "array"), "title", array());
                echo "\" class=\"img-fluid\" />
            ";
            }
            // line 21
            echo "        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
  <a class=\"carousel-control-prev\" href=\"#carousel-";
        // line 24
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carousel-";
        // line 28
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  100 => 24,  97 => 23,  90 => 21,  82 => 19,  74 => 16,  69 => 15,  67 => 14,  62 => 13,  58 => 12,  54 => 10,  48 => 9,  40 => 7,  32 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div id="carousel-{{module_name}}" class="carousel slide carousel-fade" data-ride="carousel">*/
/*   <ol class="carousel-indicators">*/
/*       {% for i in 0..banners|length-1 %}*/
/*         {% if i == 0 %}*/
/*           <li data-target="#carousel-{{module_name}}" data-slide-to="{{i}}" class="active"></li>*/
/*         {% else %}*/
/*           <li data-target="#carousel-{{module_name}}" data-slide-to="{{i}}"></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*   </ol>*/
/*   <div class="carousel-inner">*/
/*       {% for i in 0..banners|length-1 %}*/
/*         <div class="carousel-item {{ i == 0 ? 'active' : '' }} text-center">*/
/*             {% if banners[i].link %}*/
/*               <a href="{{ banners[i].link }}">*/
/*                 <img src="{{ banners[i].image }}" alt="{{ banners[i].title }}" class="img-fluid" />*/
/*               </a>*/
/*             {% else %}*/
/*               <img src="{{ banners[i].image }}" alt="{{ banners[i].title }}" class="img-fluid" />*/
/*             {% endif %}*/
/*         </div>*/
/*       {% endfor %}*/
/*   </div>*/
/*   <a class="carousel-control-prev" href="#carousel-{{module_name}}" role="button" data-slide="prev">*/
/*     <span class="carousel-control-prev-icon" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="carousel-control-next" href="#carousel-{{module_name}}" role="button" data-slide="next">*/
/*     <span class="carousel-control-next-icon" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
