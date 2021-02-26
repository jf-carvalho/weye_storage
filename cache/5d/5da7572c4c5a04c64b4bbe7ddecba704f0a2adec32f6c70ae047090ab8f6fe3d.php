<?php

/* weye/template/common/menu.twig */
class __TwigTemplate_c36e596b882be52bd92846f2f4cb33f43eae328b1f2fbcf924077b404fc0d871 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"container navbar-mainmenu\">
  <nav class=\"navbar navbar-expand-md navbar-light bg-light p-0\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav w-100 d-flex justify-content-center align-items-center\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "          ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 11
                    echo "            <li class=\"nav-item dropdown px-3\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink-";
                    // line 12
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" onmouseover=\"\$(this).parent().find('.dropdown-menu').show()\" onmouseleave=\"\$(this).parent().find('.dropdown-menu').hide()\">
                ";
                    // line 13
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "
              </a>
              ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 16
                        echo "                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\" onmouseover=\"\$(this).show()\" onmouseleave=\"\$(this).hide()\">
                  ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 18
                            echo "                    <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            </li>
          ";
                } else {
                    // line 24
                    echo "            <li class=\"nav-item px-3\">
              <a class=\"nav-link\" href=\"";
                    // line 25
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
            </li>
          ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        <li class=\"nav-item\">
          <a href=\"";
            // line 30
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\" class=\"nav-link\">
            <span class=\"text-lightpurple\">OFERTAS</span> <span class=\"text-purple\">IMPERDÍVEIS</span>
          </a>
        </li>
        <li class=\"nav-item d-block d-md-none\">
          <a href=\"";
            // line 35
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" class=\"nav-link\">
            Minha conta
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "weye/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  102 => 30,  99 => 29,  93 => 28,  85 => 25,  82 => 24,  78 => 22,  71 => 20,  60 => 18,  56 => 17,  53 => 16,  49 => 15,  44 => 13,  40 => 12,  37 => 11,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="container navbar-mainmenu">*/
/*   <nav class="navbar navbar-expand-md navbar-light bg-light p-0">*/
/*     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">*/
/*       <span class="navbar-toggler-icon"></span>*/
/*     </button>*/
/*     <div class="collapse navbar-collapse" id="navbarNavDropdown">*/
/*       <ul class="navbar-nav w-100 d-flex justify-content-center align-items-center">*/
/*         {% for category in categories %}*/
/*           {% if category.children %}*/
/*             <li class="nav-item dropdown px-3">*/
/*               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-{{ category.name }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="$(this).parent().find('.dropdown-menu').show()" onmouseleave="$(this).parent().find('.dropdown-menu').hide()">*/
/*                 {{ category.name }}*/
/*               </a>*/
/*               {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" onmouseover="$(this).show()" onmouseleave="$(this).hide()">*/
/*                   {% for child in children %}*/
/*                     <a class="dropdown-item" href="{{ child.href }}">{{ child.name }}</a>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </li>*/
/*           {% else %}*/
/*             <li class="nav-item px-3">*/
/*               <a class="nav-link" href="{{ category.href }}">{{ category.name }}</a>*/
/*             </li>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*         <li class="nav-item">*/
/*           <a href="{{ special }}" class="nav-link">*/
/*             <span class="text-lightpurple">OFERTAS</span> <span class="text-purple">IMPERDÍVEIS</span>*/
/*           </a>*/
/*         </li>*/
/*         <li class="nav-item d-block d-md-none">*/
/*           <a href="{{ account }}" class="nav-link">*/
/*             Minha conta*/
/*           </a>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %}*/
