<?php

/* financiamiento/container.twig */
class __TwigTemplate_f86aa4b0a75640e8f6b405cd4784188154705dbe3259ae7186033a066c3bc1bb extends Twig_Template
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
        echo "<div id=\"content-content\">
    <div class=\"promos-wrapper-financing-general\">
        <div class=\"promos-container-financing-general\">
            <div id=\"promocion-financing-general_by_model\" class=\"promotion-financing-general\">
                <div class=\"promo-content-financing-general\">
                    <div class=\"description\">
                        <p class=\"description_title\">FINANCIAMIENTO</p>
                        <p>Selecciona tu Suzuki favorito.</p>
                    </div>
                </div>
                <div class=\"financing_main\">
                    <div id=\"content-section-form-financing-general-selection\">
                        ";
        // line 13
        $context["modelo"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 14
        echo "                        ";
        $this->loadTemplate("financiamiento/container.twig", "financiamiento/container.twig", 14, "1248884844")->display($context);
        // line 15
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "financiamiento/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }
}


/* financiamiento/container.twig */
class __TwigTemplate_f86aa4b0a75640e8f6b405cd4784188154705dbe3259ae7186033a066c3bc1bb_1248884844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("financiamiento/gama_models.twig", "financiamiento/container.twig", 14);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "financiamiento/gama_models.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "financiamiento/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-financing-general">*/
/*         <div class="promos-container-financing-general">*/
/*             <div id="promocion-financing-general_by_model" class="promotion-financing-general">*/
/*                 <div class="promo-content-financing-general">*/
/*                     <div class="description">*/
/*                         <p class="description_title">FINANCIAMIENTO</p>*/
/*                         <p>Selecciona tu Suzuki favorito.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="financing_main">*/
/*                     <div id="content-section-form-financing-general-selection">*/
/*                         {% set modelo = mdopa %}*/
/*                         {% embed "financiamiento/gama_models.twig" %}{% endembed %}*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
