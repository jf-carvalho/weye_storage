<?php

/* weye/template/common/header.twig */
class __TwigTemplate_21c8c451aa09bd5d79bbe62bb580f5f0a59cf14784901632e181bb1a28f5e316 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>

    <base href=\"";
        // line 10
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />

    ";
        // line 12
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 13
            echo "      <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 17
            echo "      <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["robots"]) ? $context["robots"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["robot"]) {
            // line 21
            echo "      <meta name=\"";
            echo $this->getAttribute($context["robot"], "name", array());
            echo "\" content=\"";
            echo $this->getAttribute($context["robot"], "content", array());
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['robot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" /> 
    <link href=\"catalog/view/theme/weye/stylesheet/stylesheet.css\" rel=\"stylesheet\">

    <link rel=\"dns-prefetch\" href=\"https://cdnjs.cloudflare.com\">
    <link rel=\"preconnect\" href=\"https://cdnjs.cloudflare.com/\" crossorigin>
    <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "      <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "      <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 45
            echo "      ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

  </head>
  <body>
  <header>
    <div style=\"background: #170358\" class=\"py-2 w-100\">
      ";
        // line 54
        echo (isset($context["topper"]) ? $context["topper"] : null);
        echo "
    </div>
    <div class=\"container py-4\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-3 text-center text-lg-left mb-3 mb-lg-0\">
          <div id=\"logo\">";
        // line 59
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 60
            echo "            <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
            ";
        }
        // line 61
        echo "</div>
        </div>
        <div class=\"col-8 mt-2 mt-lg-0 offset-2 col-lg-4 offset-lg-0\">";
        // line 63
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
        <div class=\"col-3 justify-content-center d-none d-lg-flex\">
          <div class=\"row align-items-center\">
            <div class=\"col-3 d-flex alig-items-center flex-column justify-content-center\">
              <i class=\"fas fa-user-circle text-white fa-2x\"></i>
            </div>
            <div class=\"col-9 d-flex alig-items-center flex-column justify-content-center text-white small\">
              <div>Meu perfil</div>
              <div>
                ";
        // line 72
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 73
            echo "                  <a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" class=\"text-white\">Minha conta</a>
                  <a href=\"";
            // line 74
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" title=\"Sair da sua conta\"><i class=\"fas fa-power-off text-danger ml-2\"></i></a>
                ";
        } else {
            // line 76
            echo "                  <a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" class=\"text-white\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a>
                  ou
                  <a href=\"";
            // line 78
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"text-lightpurple\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a>
                ";
        }
        // line 80
        echo "              </div>
            </div>
          </div>
        </div>
        <div class=\"col-4 offset-4 offset-md-0 col-md-2 mt-3 mt-md-0 d-flex justify-content-end\">";
        // line 84
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
      </div>
    </div>
  </header>
";
        // line 88
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "weye/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 88,  244 => 84,  238 => 80,  231 => 78,  223 => 76,  218 => 74,  213 => 73,  211 => 72,  199 => 63,  195 => 61,  187 => 60,  175 => 59,  167 => 54,  158 => 47,  149 => 45,  145 => 44,  142 => 43,  131 => 41,  127 => 40,  124 => 39,  115 => 37,  111 => 36,  108 => 35,  95 => 33,  91 => 32,  80 => 23,  69 => 21,  65 => 20,  62 => 19,  56 => 17,  54 => 16,  51 => 15,  45 => 13,  43 => 12,  38 => 10,  33 => 8,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <title>{{ title }}</title>*/
/* */
/*     <base href="{{ base }}" />*/
/* */
/*     {% if description %}*/
/*       <meta name="description" content="{{ description }}" />*/
/*     {% endif %}*/
/* */
/*     {% if keywords %}*/
/*       <meta name="keywords" content="{{ keywords }}" />*/
/*     {% endif %}*/
/* */
/*     {% for robot in robots %}*/
/*       <meta name="{{ robot.name }}" content="{{ robot.content }}" />*/
/*     {% endfor %}*/
/* */
/*     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" media="screen" /> */
/*     <link href="catalog/view/theme/weye/stylesheet/stylesheet.css" rel="stylesheet">*/
/* */
/*     <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">*/
/*     <link rel="preconnect" href="https://cdnjs.cloudflare.com/" crossorigin>*/
/*     <link rel="dns-prefetch" href="https://fonts.gstatic.com">*/
/*     <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>*/
/* */
/*     {% for style in styles %}*/
/*       <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/*     {% endfor %}*/
/* */
/*     {% for script in scripts %}*/
/*       <script src="{{ script }}" type="text/javascript"></script>*/
/*     {% endfor %}*/
/* */
/*     {% for link in links %}*/
/*       <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/*     {% endfor %}*/
/* */
/*     {% for analytic in analytics %}*/
/*       {{ analytic }}*/
/*     {% endfor %}*/
/* */
/*     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>*/
/* */
/*   </head>*/
/*   <body>*/
/*   <header>*/
/*     <div style="background: #170358" class="py-2 w-100">*/
/*       {{ topper }}*/
/*     </div>*/
/*     <div class="container py-4">*/
/*       <div class="row align-items-center">*/
/*         <div class="col-12 col-lg-3 text-center text-lg-left mb-3 mb-lg-0">*/
/*           <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{%   else %}*/
/*             <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*             {% endif %}</div>*/
/*         </div>*/
/*         <div class="col-8 mt-2 mt-lg-0 offset-2 col-lg-4 offset-lg-0">{{ search }}</div>*/
/*         <div class="col-3 justify-content-center d-none d-lg-flex">*/
/*           <div class="row align-items-center">*/
/*             <div class="col-3 d-flex alig-items-center flex-column justify-content-center">*/
/*               <i class="fas fa-user-circle text-white fa-2x"></i>*/
/*             </div>*/
/*             <div class="col-9 d-flex alig-items-center flex-column justify-content-center text-white small">*/
/*               <div>Meu perfil</div>*/
/*               <div>*/
/*                 {% if logged %}*/
/*                   <a href="{{ account }}" class="text-white">Minha conta</a>*/
/*                   <a href="{{ logout }}" title="Sair da sua conta"><i class="fas fa-power-off text-danger ml-2"></i></a>*/
/*                 {% else %}*/
/*                   <a href="{{ login }}" class="text-white">{{ text_login }}</a>*/
/*                   ou*/
/*                   <a href="{{ register }}" class="text-lightpurple">{{ text_register }}</a>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-4 offset-4 offset-md-0 col-md-2 mt-3 mt-md-0 d-flex justify-content-end">{{ cart }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/* {{ menu }}*/
/* */
