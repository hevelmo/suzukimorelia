<?php

/* home/banner.twig */
class __TwigTemplate_3c60c3dd76be51d3813ffb0505041f591f5b9db9f96a7acf872931a1daed423d extends Twig_Template
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
        // line 2
        echo "    <div class=\"specifications-wrapper\">
        <div class=\"specifications\" id=\"features-wrapper\">
            <!-- slide extra -->
            <div class=\"specification\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/home/slider/SLIDER-DE-PROMOCIONES-1659X655-GUADALAJARA.jpg');\">
                <div class=\"title-wrapper\" style=\"color: #fff\">
                    <div class=\"title\">
                       &nbsp;
                    </div>
                </div>
                <div class=\"description compact\"><p>&nbsp;</p></div>
            </div>
            ";
        // line 30
        echo "            ";
        // line 50
        echo "            <!-- slide 00 -->
            <div class=\"specification\" style=\"background-image: url('";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/home/slider/SLIDER-DE-PROMOCIONES-03.jpg');\">
                <div class=\"title-wrapper\" style=\"color: #fff\">
                    <div class=\"title\">
                       &nbsp;
                    </div>
                </div>
                <div class=\"description compact\"><p>&nbsp;</p></div>
            </div>
            ";
        // line 76
        echo "            <!-- slide 02 -->
            <div class=\"specification\" style=\"background-image: url('";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/home/slider/slider_marca-2017.jpg');\">
                <div class=\"title-wrapper\" style=\"color: #fff\">
                    <div class=\"title\">
                        &nbsp;
                    </div>
                </div>
                <div class=\"description extra-compact\"><p>&nbsp;</p></div>
            </div>
            ";
        // line 105
        echo "        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"specifications-controls\">
        <div class=\"arrows\">
            <div class=\"arrow left\"><a class=\"specifications-controls\" href=\"#left\"><span>Left</span></a></div>
            <div class=\"arrow right\"><a class=\"specifications-controls\" href=\"#right\"><span>Right</span></a></div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 105,  54 => 77,  51 => 76,  40 => 51,  37 => 50,  35 => 30,  24 => 5,  19 => 2,);
    }
}
/* {# INICIO DE NUEVO SLIDER #}*/
/*     <div class="specifications-wrapper">*/
/*         <div class="specifications" id="features-wrapper">*/
/*             <!-- slide extra -->*/
/*             <div class="specification" style="background-image: url('{{ _host }}img/sections/home/slider/SLIDER-DE-PROMOCIONES-1659X655-GUADALAJARA.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             {#*/
/*             <!-- slide extra -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/SLIDER-DE-PROMOCIONES-02.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description extra-compact">*/
/*                     <p>*/
/*                         <a class='button button-resp button-sm button-default' title='Suzuki Test Drive GDL 2016' target='_blank' onclick="ga('send', 'event', 'Suzuki Test Drive GDL 2016', 'Home Slider', 'Suzuki Test Drive GDL 2016');" href="http://suzukigdl.com.mx/test-drive/">*/
/*                             Visitar sitio*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             #}*/
/*             {#*/
/*             <!-- slide extra -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/SLIDER-DE-PROMOCIONES-04.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             <!-- slide extra -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/SLIDER-DE-PROMOCIONES-05.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             #}*/
/*             <!-- slide 00 -->*/
/*             <div class="specification" style="background-image: url('{{ _host }}img/sections/home/slider/SLIDER-DE-PROMOCIONES-03.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             {#*/
/*             <!-- slide 01 -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/SLIDER-DE-PROMOCIONES2-1659X655.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                         &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description extra-compact">*/
/*                     <p>*/
/*                         <a id="go-landing-nueva-vitara" class='button button-resp button-sm button-default' title='Nueva VITARA 2016' target='_blank' onclick="ga('send', 'event', 'Suzuki GDL Nueva Vitara 2016', 'Home Slider', 'Nueva_Vitara_2016');">*/
/*                             Más Información*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             #}*/
/*             <!-- slide 02 -->*/
/*             <div class="specification" style="background-image: url('{{ _host }}img/sections/home/slider/slider_marca-2017.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                         &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description extra-compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             {#*/
/*             <!-- slide 03 -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/promos03.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             <!-- slide 04 -->*/
/*             <div class="specification" style="background-image: url('img/sections/home/slider/nueva-vitara.jpg');">*/
/*                 <div class="title-wrapper" style="color: #fff">*/
/*                     <div class="title">*/
/*                        &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="description compact"><p>&nbsp;</p></div>*/
/*             </div>*/
/*             #}*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/*     <div class="specifications-controls">*/
/*         <div class="arrows">*/
/*             <div class="arrow left"><a class="specifications-controls" href="#left"><span>Left</span></a></div>*/
/*             <div class="arrow right"><a class="specifications-controls" href="#right"><span>Right</span></a></div>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* {# FIN DE NUEVO SLIDER #}*/
/* */
