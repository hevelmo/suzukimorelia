<?php

/* contacto/container.twig */
class __TwigTemplate_fd5cfe49bc1f3563ad690eefe44023d872fec82eb7e2fc42a4a44bab6f029222 extends Twig_Template
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
                        <p class=\"description_title\">CONTÁCTANOS</p>
                        <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>
                    </div>
                </div>
                <div class=\"contact_main\">
                    <div id=\"content-section-form-contact\">
                        ";
        // line 13
        $this->loadTemplate("contacto/container.twig", "contacto/container.twig", 13, "1413339583")->display($context);
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
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  33 => 13,  19 => 1,);
    }
}


/* contacto/container.twig */
class __TwigTemplate_fd5cfe49bc1f3563ad690eefe44023d872fec82eb7e2fc42a4a44bab6f029222_1413339583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("contacto/contact_form.twig", "contacto/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "contacto/contact_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  35 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-contact">*/
/*         <div class="promos-container-contact">*/
/*             <div class="promotion-contact">*/
/*                 <div class="promo-content-contact">*/
/*                     <div class="description">*/
/*                         <p class="description_title">CONTÁCTANOS</p>*/
/*                         <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="contact_main">*/
/*                     <div id="content-section-form-contact">*/
/*                         {% embed "contacto/contact_form.twig" %}{% endembed %}*/
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
