<?php

/* weye/template/product/products_list.twig */
class __TwigTemplate_b39fedd46b1b5260ae994f54388e22272a75d8f7b9d17ea9fed8bbc67005ac61 extends Twig_Template
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
        echo "<div class=\"container products_list my-5 text-center\">
  <h5 class=\"text-uppercase list_title mb-5\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h5>
  <div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "      ";
            if ((isset($context["product_list_unit_col"]) ? $context["product_list_unit_col"] : null)) {
                // line 6
                echo "        ";
                $context["col"] = (isset($context["product_list_unit_col"]) ? $context["product_list_unit_col"] : null);
                // line 7
                echo "      ";
            } else {
                // line 8
                echo "        ";
                $context["col"] = "3";
                // line 9
                echo "      ";
            }
            // line 10
            echo "
    <div class=\"col-12 col-md-6 col-lg-";
            // line 11
            echo (isset($context["col"]) ? $context["col"] : null);
            echo " product_unit mb-4\">

      ";
            // line 13
            if ($this->getAttribute($context["product"], "special", array())) {
                // line 14
                echo "        <span class=\"tag_special\">OFERTA</span>
      ";
            }
            // line 16
            echo "
      <div>
        <a href=\"";
            // line 18
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
          <img src=\"";
            // line 19
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" />
        </a>
      </div>

      <div class=\"d-flex justify-content-between align-items-center\">
        <div class=\"w-25\">
          ";
            // line 25
            if ($this->getAttribute($context["product"], "is_in_wishlist", array())) {
                // line 26
                echo "            <button type=\"button\" class=\"btn-wishlist\" onclick=\"wishlist.remove(this, '";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">
              <i class=\"fas fa-heart\"></i>
            </button>
          ";
            } else {
                // line 30
                echo "            <button type=\"button\" class=\"btn-wishlist\" onclick=\"wishlist.add(this, '";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">
              <i class=\"far fa-heart\"></i>
            </button>
          ";
            }
            // line 34
            echo "        </div>

        <div class=\"w-50 d-flex justify-content-center\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "          ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 39
                    echo "          <i class=\"fas fa-star text-lightgray\"></i>
          ";
                } else {
                    // line 41
                    echo "          <i class=\"fas fa-star text-warning\"></i>
          ";
                }
                // line 43
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </div>

        <div class=\"w-25\"></div>
      </div>

      <div class=\"my-2 product_name_wrapper\"><a class=\"product_name\" href=\"";
            // line 49
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>

      <div class=\"price_wrapper d-flex flex-column justify-content-end\">
        ";
            // line 52
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 53
                echo "          ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 54
                    echo "          <h4 class=\"mb-0\"><strong>";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</strong></h4>
          ";
                } else {
                    // line 56
                    echo "          <div class=\"price-old small text-secondary\">de ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " por</div> 
          <div class=\"price-new\"><h4 class=\"mb-0\"><strong>";
                    // line 57
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</strong></h4></div>
          ";
                }
                // line 59
                echo "        ";
            }
            // line 60
            echo "      </div>
      
      <div class=\"mb-2\"><small>ou 4x de R\$ 44,44</small></div>

      <div class=\"btn-add-wrapper\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 65
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"btn-add\">
          <i class=\"fal fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 66
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span>
        </button>
      </div>


    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "weye/template/product/products_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 73,  175 => 66,  171 => 65,  164 => 60,  161 => 59,  156 => 57,  151 => 56,  145 => 54,  142 => 53,  140 => 52,  132 => 49,  125 => 44,  119 => 43,  115 => 41,  111 => 39,  108 => 38,  104 => 37,  99 => 34,  91 => 30,  83 => 26,  81 => 25,  68 => 19,  64 => 18,  60 => 16,  56 => 14,  54 => 13,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="container products_list my-5 text-center">*/
/*   <h5 class="text-uppercase list_title mb-5">{{ heading_title }}</h5>*/
/*   <div class="row">*/
/*     {% for product in products %}*/
/*       {% if product_list_unit_col %}*/
/*         {% set col = product_list_unit_col %}*/
/*       {% else %}*/
/*         {% set col = '3' %}*/
/*       {% endif %}*/
/* */
/*     <div class="col-12 col-md-6 col-lg-{{ col }} product_unit mb-4">*/
/* */
/*       {% if product.special %}*/
/*         <span class="tag_special">OFERTA</span>*/
/*       {% endif %}*/
/* */
/*       <div>*/
/*         <a href="{{ product.href }}">*/
/*           <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="d-flex justify-content-between align-items-center">*/
/*         <div class="w-25">*/
/*           {% if product.is_in_wishlist %}*/
/*             <button type="button" class="btn-wishlist" onclick="wishlist.remove(this, '{{ product.product_id }}');">*/
/*               <i class="fas fa-heart"></i>*/
/*             </button>*/
/*           {% else %}*/
/*             <button type="button" class="btn-wishlist" onclick="wishlist.add(this, '{{ product.product_id }}');">*/
/*               <i class="far fa-heart"></i>*/
/*             </button>*/
/*           {% endif %}*/
/*         </div>*/
/* */
/*         <div class="w-50 d-flex justify-content-center">*/
/*           {% for i in 1..5 %}*/
/*           {% if product.rating < i %}*/
/*           <i class="fas fa-star text-lightgray"></i>*/
/*           {% else %}*/
/*           <i class="fas fa-star text-warning"></i>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         <div class="w-25"></div>*/
/*       </div>*/
/* */
/*       <div class="my-2 product_name_wrapper"><a class="product_name" href="{{ product.href }}">{{ product.name }}</a></div>*/
/* */
/*       <div class="price_wrapper d-flex flex-column justify-content-end">*/
/*         {% if product.price %}*/
/*           {% if not product.special %}*/
/*           <h4 class="mb-0"><strong>{{ product.price }}</strong></h4>*/
/*           {% else %}*/
/*           <div class="price-old small text-secondary">de {{ product.price }} por</div> */
/*           <div class="price-new"><h4 class="mb-0"><strong>{{ product.special }}</strong></h4></div>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </div>*/
/*       */
/*       <div class="mb-2"><small>ou 4x de R$ 44,44</small></div>*/
/* */
/*       <div class="btn-add-wrapper">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');" class="btn-add">*/
/*           <i class="fal fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span>*/
/*         </button>*/
/*       </div>*/
/* */
/* */
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
