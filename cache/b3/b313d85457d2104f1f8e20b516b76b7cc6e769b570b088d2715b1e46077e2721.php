<?php

/* weye/template/common/footer.twig */
class __TwigTemplate_1e39bfda4f0128c6125aa97552078583f295d6c7ac10094623e115d3a2f9c2f5 extends Twig_Template
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
        echo "<footer>
  ";
        // line 2
        if (( !(isset($context["logged"]) ? $context["logged"] : null) ||  !(isset($context["in_newsletter"]) ? $context["in_newsletter"] : null))) {
            // line 3
            echo "    <div class=\"newsletter_wrapper pt-5 pb-4 bg-primary mb-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 mb-3 col-lg-6 mb-lg-0\">
            <h3 class=\"text-center text-lg-left text-white mb-0\">DESEJA RECEBER</h3>
            <h3 class=\"text-center text-lg-left text-lightpurple\">DESCONTOS EXCLUSIVOS?</h3>
          </div>
          <div class=\"col-12 col-lg-6\">
            <div class=\"row\">
              <div class=\"col-12 col-lg-7 mb-3 mb-lg-0 pr-lg-0\">
                <input type=\"text\" name=\"newsletter_email\" class=\"form-control border-radius-0\" placeholder=\"Seu melhor email\">
              </div>
              <div class=\"col-12 col-lg-5 mb-3 mb-lg-0\">
                <button onclick=\"redirect()\" class=\"btn btn-lightpurple w-100 border-radius-0\"> <i class=\"fal fa-paper-plane\"></i> Quero descontos</button>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-12\">
                <small class=\"text-center text-white\">
                  Ao concluir, você aceitará nossos <a href=\"/termos-condicoes-br\">Termos de uso</a> e <a href=\"/politica-privacidade-br\">Políticas de privacidade</a>. Desconto não aplicado para produtos da seleção. <a href=\"/regulamento-das-promocoes\">Confira o regulamento</a>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 31
        echo "
  <div class=\"container-fluid px-0\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 35
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 36
            echo "        <div class=\"col-sm-3 d-flex justify-content-center mb-3 mb-lg-0\">
         <div class=\"text-center text-lg-left\">
           <h6 class=\"mb-4 font-weight-bold\">";
            // line 38
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h6>
           <ul class=\"list-unstyled\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 41
                echo "             <li class=\"mb-1\"><a class=\"text-dark\" href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "           </ul>
         </div>
        </div>
        ";
        }
        // line 47
        echo "        <div class=\"col-sm-3 d-flex justify-content-center mb-3 mb-lg-0\">
         <div class=\"text-center text-lg-left\">
           <h6 class=\"mb-4 font-weight-bold\">";
        // line 49
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h6>
           <ul class=\"list-unstyled\">
             <li class=\"mb-1\"><a class=\"text-dark\" href=\"";
        // line 51
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
             <li class=\"mb-1\"><a class=\"text-dark\" href=\"";
        // line 52
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
             <li class=\"mb-1\"><a class=\"text-dark\" href=\"";
        // line 53
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
             <li class=\"mb-1\"><a class=\"text-dark\" href=\"";
        // line 54
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
           </ul>
         </div>
        </div>
        <div class=\"col-sm-3 d-flex justify-content-center mb-3 mb-lg-0\">
          <div class=\"text-center text-lg-left\">
            <h6 class=\"mb-4 font-weight-bold\">Central de atendimento</h6>
            <ul class=\"list-unstyled\">
              <li><a data-tel=\"true\" data-telnumber=\"";
        // line 62
        echo (isset($context["telefone"]) ? $context["telefone"] : null);
        echo "\" class=\"text-dark\">";
        echo (isset($context["telefone"]) ? $context["telefone"] : null);
        echo "</a></li>      
              <li class=\"mb-3\"><a href=\"mailto:";
        // line 63
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" class=\"text-dark\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></li>      
              <li class=\"mb-1 text-dark\">";
        // line 64
        echo (isset($context["funcionamento"]) ? $context["funcionamento"] : null);
        echo "</li>      
            </ul>
          </div>
        </div>
        <div class=\"col-sm-3 d-flex justify-content-center mb-3 mb-lg-0\">
          <div class=\"text-center text-lg-left\">
            <h6 class=\"mb-4 font-weight-bold\">Siga-nos</h6>
            <ul class=\"list-unstyled d-flex\">
              <li class=\"mb-1\">
                <a href=\"";
        // line 73
        echo (isset($context["instagram"]) ? $context["instagram"] : null);
        echo "\" target=\"_blank\" class=\"pr-3\">
                  <i class=\"fab fa-instagram fa-2x social_media\"></i>
                </a>
              </li>
              <li class=\"mb-1\">
                <a href=\"";
        // line 78
        echo (isset($context["facebook"]) ? $context["facebook"] : null);
        echo "\" target=\"_blank\" class=\"pr-3\">
                  <i class=\"fab fa-facebook-f fa-2x social_media\"></i>
                </a>
              </li>
              <li class=\"mb-1\">
                <a href=\"";
        // line 83
        echo (isset($context["youtube"]) ? $context["youtube"] : null);
        echo "\" target=\"_blank\" class=\"pr-3\">
                  <i class=\"fab fa-youtube fa-2x social_media\"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container my-5\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center\">
          <img src=\"/\" onerror=\"this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/bandeiras.png'\" class=\"img-fluid\">
        </div>
        <div class=\"col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center\">
          <img src=\"/\" onerror=\"this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/seguranca.png'\" class=\"img-fluid\">
        </div>
        <div class=\"col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center align-items-center\">
            <div class=\"small mr-3 mt-2\">
              DESENVOLVIDO POR: 
            </div>
            <a href=\"https://orions.com.br\" target=\"_blank\">
              <img src=\"/\" onerror=\"this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/logoorions.png'\" class=\"img-fluid\">
            </a>
        </div>
      </div>
    </div>

    <div id=\"disclaimer\" class=\"pt-4 pb-4 mt-3\">
      <div class=\"container\">
        <p class=\"text-center\">
          <img class=\"img-fluid\" src=\"/\" onerror=\"this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/purplelogo.png'\">
        </p>
        <p class=\"text-center mb-0\">
          <small>
            ";
        // line 119
        echo (isset($context["comments"]) ? $context["comments"] : null);
        echo "
          </small>
        </p>
      </div>
    </div>
  </div>
</footer>
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 127
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
  <link href=\"catalog/view/javascript/font-awesome/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />

  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js\" integrity=\"sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF\" crossorigin=\"anonymous\"></script>
  
  <script src=\"catalog/view/javascript/common.js\"></script>

  <script type=\"text/javascript\">
    document.querySelector('a[data-tel=\"true\"]').href = 'tel:'+ document.querySelector('a[data-tel=\"true\"]').getAttribute('data-telnumber').replace(/[^0-9\\\\.]+/g, '')

    const redirect = () => {
      const email_input = document.querySelector('input[name=\"newsletter_email\"]')

      if(validateEmail(email_input.value)){
        ";
        // line 146
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 147
            echo "          \$.ajax({
            url: '";
            // line 148
            echo (isset($context["action_newsletter"]) ? $context["action_newsletter"] : null);
            echo "',
            type: 'post',
            data: {newsletter: '1', ajax: true},
            success: function(res){
              if(res['success']){
                \$('#content').parent().before(`<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle mr-3\"></i>\${res['success']}<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>`);

                \$('.newsletter_wrapper').css({
                  'transition': 'all 2s',
                  'opacity': '0'
                })

                setTimeout(function(){
                   \$('.newsletter_wrapper').hide()
                },2500)
              }
            }
          })
        ";
        } else {
            // line 167
            echo "          location.href = `";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "?newsletter=true&email=\${email_input.value}`
        ";
        }
        // line 169
        echo "      }else{
        \$('#content').parent().before('<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-triangle mr-3\"></i>Email inválido<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
      }
      
    }

    const validateEmail = email => {
      const re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
      return re.test(email);
    }
  </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "weye/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 169,  280 => 167,  258 => 148,  255 => 147,  253 => 146,  234 => 129,  225 => 127,  221 => 126,  211 => 119,  172 => 83,  164 => 78,  156 => 73,  144 => 64,  138 => 63,  132 => 62,  119 => 54,  113 => 53,  107 => 52,  101 => 51,  96 => 49,  92 => 47,  86 => 43,  75 => 41,  71 => 40,  66 => 38,  62 => 36,  60 => 35,  54 => 31,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   {% if not logged or not in_newsletter %}*/
/*     <div class="newsletter_wrapper pt-5 pb-4 bg-primary mb-5">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-12 mb-3 col-lg-6 mb-lg-0">*/
/*             <h3 class="text-center text-lg-left text-white mb-0">DESEJA RECEBER</h3>*/
/*             <h3 class="text-center text-lg-left text-lightpurple">DESCONTOS EXCLUSIVOS?</h3>*/
/*           </div>*/
/*           <div class="col-12 col-lg-6">*/
/*             <div class="row">*/
/*               <div class="col-12 col-lg-7 mb-3 mb-lg-0 pr-lg-0">*/
/*                 <input type="text" name="newsletter_email" class="form-control border-radius-0" placeholder="Seu melhor email">*/
/*               </div>*/
/*               <div class="col-12 col-lg-5 mb-3 mb-lg-0">*/
/*                 <button onclick="redirect()" class="btn btn-lightpurple w-100 border-radius-0"> <i class="fal fa-paper-plane"></i> Quero descontos</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="row">*/
/*               <div class="col-12">*/
/*                 <small class="text-center text-white">*/
/*                   Ao concluir, você aceitará nossos <a href="/termos-condicoes-br">Termos de uso</a> e <a href="/politica-privacidade-br">Políticas de privacidade</a>. Desconto não aplicado para produtos da seleção. <a href="/regulamento-das-promocoes">Confira o regulamento</a>*/
/*                 </small>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div class="container-fluid px-0">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if informations %}*/
/*         <div class="col-sm-3 d-flex justify-content-center mb-3 mb-lg-0">*/
/*          <div class="text-center text-lg-left">*/
/*            <h6 class="mb-4 font-weight-bold">{{ text_information }}</h6>*/
/*            <ul class="list-unstyled">*/
/*             {% for information in informations %}*/
/*              <li class="mb-1"><a class="text-dark" href="{{ information.href }}">{{ information.title }}</a></li>*/
/*              {% endfor %}*/
/*            </ul>*/
/*          </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="col-sm-3 d-flex justify-content-center mb-3 mb-lg-0">*/
/*          <div class="text-center text-lg-left">*/
/*            <h6 class="mb-4 font-weight-bold">{{ text_extra }}</h6>*/
/*            <ul class="list-unstyled">*/
/*              <li class="mb-1"><a class="text-dark" href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*              <li class="mb-1"><a class="text-dark" href="{{ special }}">{{ text_special }}</a></li>*/
/*              <li class="mb-1"><a class="text-dark" href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*              <li class="mb-1"><a class="text-dark" href="{{ return }}">{{ text_return }}</a></li>*/
/*            </ul>*/
/*          </div>*/
/*         </div>*/
/*         <div class="col-sm-3 d-flex justify-content-center mb-3 mb-lg-0">*/
/*           <div class="text-center text-lg-left">*/
/*             <h6 class="mb-4 font-weight-bold">Central de atendimento</h6>*/
/*             <ul class="list-unstyled">*/
/*               <li><a data-tel="true" data-telnumber="{{ telefone }}" class="text-dark">{{ telefone }}</a></li>      */
/*               <li class="mb-3"><a href="mailto:{{ email }}" class="text-dark">{{ email }}</a></li>      */
/*               <li class="mb-1 text-dark">{{ funcionamento }}</li>      */
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-3 d-flex justify-content-center mb-3 mb-lg-0">*/
/*           <div class="text-center text-lg-left">*/
/*             <h6 class="mb-4 font-weight-bold">Siga-nos</h6>*/
/*             <ul class="list-unstyled d-flex">*/
/*               <li class="mb-1">*/
/*                 <a href="{{ instagram }}" target="_blank" class="pr-3">*/
/*                   <i class="fab fa-instagram fa-2x social_media"></i>*/
/*                 </a>*/
/*               </li>*/
/*               <li class="mb-1">*/
/*                 <a href="{{ facebook }}" target="_blank" class="pr-3">*/
/*                   <i class="fab fa-facebook-f fa-2x social_media"></i>*/
/*                 </a>*/
/*               </li>*/
/*               <li class="mb-1">*/
/*                 <a href="{{ youtube }}" target="_blank" class="pr-3">*/
/*                   <i class="fab fa-youtube fa-2x social_media"></i>*/
/*                 </a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container my-5">*/
/*       <div class="row align-items-center">*/
/*         <div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center">*/
/*           <img src="/" onerror="this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/bandeiras.png'" class="img-fluid">*/
/*         </div>*/
/*         <div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center">*/
/*           <img src="/" onerror="this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/seguranca.png'" class="img-fluid">*/
/*         </div>*/
/*         <div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex justify-content-center align-items-center">*/
/*             <div class="small mr-3 mt-2">*/
/*               DESENVOLVIDO POR: */
/*             </div>*/
/*             <a href="https://orions.com.br" target="_blank">*/
/*               <img src="/" onerror="this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/rodape/logoorions.png'" class="img-fluid">*/
/*             </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div id="disclaimer" class="pt-4 pb-4 mt-3">*/
/*       <div class="container">*/
/*         <p class="text-center">*/
/*           <img class="img-fluid" src="/" onerror="this.src = document.getElementsByTagName('base')[0].href + 'image/catalog/purplelogo.png'">*/
/*         </p>*/
/*         <p class="text-center mb-0">*/
/*           <small>*/
/*             {{ comments }}*/
/*           </small>*/
/*         </p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/*   <link href="catalog/view/javascript/font-awesome/css/all.min.css" rel="stylesheet" type="text/css" />*/
/*   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* */
/*   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>*/
/* */
/*   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>*/
/*   */
/*   <script src="catalog/view/javascript/common.js"></script>*/
/* */
/*   <script type="text/javascript">*/
/*     document.querySelector('a[data-tel="true"]').href = 'tel:'+ document.querySelector('a[data-tel="true"]').getAttribute('data-telnumber').replace(/[^0-9\\.]+/g, '')*/
/* */
/*     const redirect = () => {*/
/*       const email_input = document.querySelector('input[name="newsletter_email"]')*/
/* */
/*       if(validateEmail(email_input.value)){*/
/*         {% if logged %}*/
/*           $.ajax({*/
/*             url: '{{ action_newsletter }}',*/
/*             type: 'post',*/
/*             data: {newsletter: '1', ajax: true},*/
/*             success: function(res){*/
/*               if(res['success']){*/
/*                 $('#content').parent().before(`<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle mr-3"></i>${res['success']}<button type="button" class="close" data-dismiss="alert">&times;</button></div>`);*/
/* */
/*                 $('.newsletter_wrapper').css({*/
/*                   'transition': 'all 2s',*/
/*                   'opacity': '0'*/
/*                 })*/
/* */
/*                 setTimeout(function(){*/
/*                    $('.newsletter_wrapper').hide()*/
/*                 },2500)*/
/*               }*/
/*             }*/
/*           })*/
/*         {% else %}*/
/*           location.href = `{{ register }}?newsletter=true&email=${email_input.value}`*/
/*         {% endif %}*/
/*       }else{*/
/*         $('#content').parent().before('<div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-triangle mr-3"></i>Email inválido<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*       }*/
/*       */
/*     }*/
/* */
/*     const validateEmail = email => {*/
/*       const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;*/
/*       return re.test(email);*/
/*     }*/
/*   </script>*/
/* */
/* </body>*/
/* </html>*/
