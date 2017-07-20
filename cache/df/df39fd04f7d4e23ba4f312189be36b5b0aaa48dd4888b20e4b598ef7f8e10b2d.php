<?php

/* bolsa/container.twig */
class __TwigTemplate_544161c26d8742a0acf89948326db31e05df7ee38320afeb242b795664a9dcdc extends Twig_Template
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
    <div class=\"promos-wrapper-contact\">
        <div class=\"promos-container-contact\">
            <div class=\"promotion-contact\">
                <div class=\"promo-content-contact\">
                    <div class=\"description\">
                        <p class=\"description_title\">Bolsa de trabajo</p>
                        ";
        // line 9
        echo "                    </div>
                </div>
                <div class=\"contact_main\">
                    <div id=\"content-section-form-contact\">
                        ";
        // line 13
        $this->loadTemplate("bolsa/container.twig", "bolsa/container.twig", 13, "188215167")->display($context);
        // line 14
        echo "                    </div>
                    <div class=\"contact_sidebar\">
                        <div class=\"contact_social\">
                            <p class=\"contact_social_title\">Domicilio Morelia</p>
                            <p>Periférico Paseo de la República 3169</p>
                            <p>Colonia Las Américas</p>
                            <p>Morelia, Michoacán, </p>
                            <p>Tel. 01-(443)-500-53-00</p>
                            <p>C.P. 58270 </p>
                        <br>
                            <p class=\"contact_social_title\">Redes sociales</p>
                            <p>Comparte tus experiencias con la comunidad Suzuki</p>
                            <div class=\"social fb\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');\" href=\"https://www.facebook.com/pages/Suzuki-Morelia/1458185144458990\" target=\"_blank\">Facebook</a></div>
                            <div class=\"social tw\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Twitter_Morelia');\" href=\"https://twitter.com/SuzukiMorelia\" target=\"_blank\">Twitter</a></div>
                            <div class=\"social in\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram_Guadalajara');\" href=\"https://www.instagram.com/suzukiguadalajara/\" target=\"_blank\">Instagram</a></div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bolsa/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}


/* bolsa/container.twig */
class __TwigTemplate_544161c26d8742a0acf89948326db31e05df7ee38320afeb242b795664a9dcdc_188215167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("bolsa/contact_form.twig", "bolsa/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "bolsa/contact_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "bolsa/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-contact">*/
/*         <div class="promos-container-contact">*/
/*             <div class="promotion-contact">*/
/*                 <div class="promo-content-contact">*/
/*                     <div class="description">*/
/*                         <p class="description_title">Bolsa de trabajo</p>*/
/*                         {#<p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>#}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="contact_main">*/
/*                     <div id="content-section-form-contact">*/
/*                         {% embed "bolsa/contact_form.twig" %}{% endembed %}*/
/*                     </div>*/
/*                     <div class="contact_sidebar">*/
/*                         <div class="contact_social">*/
/*                             <p class="contact_social_title">Domicilio Morelia</p>*/
/*                             <p>Periférico Paseo de la República 3169</p>*/
/*                             <p>Colonia Las Américas</p>*/
/*                             <p>Morelia, Michoacán, </p>*/
/*                             <p>Tel. 01-(443)-500-53-00</p>*/
/*                             <p>C.P. 58270 </p>*/
/*                         <br>*/
/*                             <p class="contact_social_title">Redes sociales</p>*/
/*                             <p>Comparte tus experiencias con la comunidad Suzuki</p>*/
/*                             <div class="social fb"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook');" href="https://www.facebook.com/pages/Suzuki-Morelia/1458185144458990" target="_blank">Facebook</a></div>*/
/*                             <div class="social tw"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Twitter_Morelia');" href="https://twitter.com/SuzukiMorelia" target="_blank">Twitter</a></div>*/
/*                             <div class="social in"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram_Guadalajara');" href="https://www.instagram.com/suzukiguadalajara/" target="_blank">Instagram</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
