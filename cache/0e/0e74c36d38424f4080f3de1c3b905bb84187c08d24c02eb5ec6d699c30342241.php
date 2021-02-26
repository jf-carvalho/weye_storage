<?php

/* weye/template/common/cart.twig */
class __TwigTemplate_5d947eb9c855063544e54186ea45ecaa2c21a655ad268fe8a5137d1399376545 extends Twig_Template
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
        echo "<div id=\"cart_view_wrapper\">
<div id=\"cart\" class=\"btn-group btn-block\">

  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 4
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-default dropdown-toggle\">
    <div class=\"d-flex justify-content-around align-items-center\">
      <div><i class=\"fal fa-shopping-cart fa-2x text-white px-2\"></i></div>
      <div class=\"text-left text-white\">
        ";
        // line 8
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "
      </div>
    </div>
  </button>

  <ul class=\"dropdown-menu\">
    ";
        // line 14
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 15
            echo "    <li>
    
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "
          <div class=\"row align-items-center mb-3\">
          <div class=\"col-10\">
            <div class=\"row align-items-center\">
              <div class=\"d-none d-lg-block col-lg-3\">
                ";
                // line 23
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " 
                  <a href=\"";
                    // line 24
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
                    <img src=\"";
                    // line 25
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-fluid\" />
                  </a> 
                ";
                }
                // line 28
                echo "              </div>

              <div class=\"col-6\">
                <a class=\"small\" href=\"";
                // line 31
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                ";
                // line 32
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 33
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                    - <small>";
                        // line 34
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> 
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                ";
                }
                // line 37
                echo "              </div>
              
              ";
                // line 40
                echo "
              <div class=\"col-3 d-flex justify-content-start\">
                <span>
                  ";
                // line 43
                echo $this->getAttribute($context["product"], "total", array());
                echo "
                </span>
              </div>
            </div>
          </div>
          <div class=\"col-2\">
            <div class=\"row align-items-center\">
              <div class=\"col-12 d-flex justify-content-end\">
                <button type=\"button\" class=\"btn_remove\" onclick=\"cart.remove('";
                // line 51
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\"><i class=\"fa fa-trash\"></i></button>
              </div>
            </div>
          </div>

        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "       
    </li>
    <li>
      <div>
        <table class=\"table\">
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 64
                echo "          <tr>
            <td style=\"width: 75%\" class=\"text-right text-white\">";
                // line 65
                echo $this->getAttribute($context["total"], "title", array());
                echo "</td>
            <td style=\"width: 25%\" class=\"text-right text-white\">";
                // line 66
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </table>

        <p class=\"text-center my-5\">
          <a href=\"";
            // line 72
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">
              <i class=\"fa fa-shopping-cart\"></i> 
              ";
            // line 74
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "
          </a>
          &nbsp;&nbsp;&nbsp;
          <a href=\"";
            // line 77
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">
              <i class=\"fa fa-share\"></i> 
              ";
            // line 79
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "
          </a>
        </p>

      </div>
    </li>
    ";
        } else {
            // line 86
            echo "    <li>
      <p class=\"text-center text-white\">";
            // line 87
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 90
        echo "  </ul>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 90,  204 => 87,  201 => 86,  191 => 79,  186 => 77,  180 => 74,  175 => 72,  170 => 69,  161 => 66,  157 => 65,  154 => 64,  150 => 63,  143 => 58,  128 => 51,  117 => 43,  112 => 40,  108 => 37,  105 => 36,  95 => 34,  88 => 33,  86 => 32,  80 => 31,  75 => 28,  65 => 25,  61 => 24,  57 => 23,  50 => 18,  46 => 17,  42 => 15,  40 => 14,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div id="cart_view_wrapper">*/
/* <div id="cart" class="btn-group btn-block">*/
/* */
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn btn-default dropdown-toggle">*/
/*     <div class="d-flex justify-content-around align-items-center">*/
/*       <div><i class="fal fa-shopping-cart fa-2x text-white px-2"></i></div>*/
/*       <div class="text-left text-white">*/
/*         {{ text_items }}*/
/*       </div>*/
/*     </div>*/
/*   </button>*/
/* */
/*   <ul class="dropdown-menu">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*     */
/*         {% for product in products %}*/
/* */
/*           <div class="row align-items-center mb-3">*/
/*           <div class="col-10">*/
/*             <div class="row align-items-center">*/
/*               <div class="d-none d-lg-block col-lg-3">*/
/*                 {% if product.thumb %} */
/*                   <a href="{{ product.href }}">*/
/*                     <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-fluid" />*/
/*                   </a> */
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               <div class="col-6">*/
/*                 <a class="small" href="{{ product.href }}">{{ product.name }}</a>*/
/*                 {% if product.option %}*/
/*                   {% for option in product.option %} <br />*/
/*                     - <small>{{ option.name }} {{ option.value }}</small> */
/*                   {% endfor %}*/
/*                 {% endif %}*/
/*               </div>*/
/*               */
/*               {# x{{ product.quantity }} #}*/
/* */
/*               <div class="col-3 d-flex justify-content-start">*/
/*                 <span>*/
/*                   {{ product.total }}*/
/*                 </span>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-2">*/
/*             <div class="row align-items-center">*/
/*               <div class="col-12 d-flex justify-content-end">*/
/*                 <button type="button" class="btn_remove" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}"><i class="fa fa-trash"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/*         {% endfor %}*/
/*        */
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td style="width: 75%" class="text-right text-white">{{ total.title }}</td>*/
/*             <td style="width: 25%" class="text-right text-white">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/* */
/*         <p class="text-center my-5">*/
/*           <a href="{{ cart }}">*/
/*               <i class="fa fa-shopping-cart"></i> */
/*               {{ text_cart }}*/
/*           </a>*/
/*           &nbsp;&nbsp;&nbsp;*/
/*           <a href="{{ checkout }}">*/
/*               <i class="fa fa-share"></i> */
/*               {{ text_checkout }}*/
/*           </a>*/
/*         </p>*/
/* */
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center text-white">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* </div>*/
