<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f99fd65512619edb6aed0d53e15286922244586ef2ef05c0217e99f30dbf89b7 extends Twig_Template
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
        $__internal_ce9990de1cb0ccb1c634b41dc36b197c7685f8af60a3788ec8e4aea7cb197782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9990de1cb0ccb1c634b41dc36b197c7685f8af60a3788ec8e4aea7cb197782->enter($__internal_ce9990de1cb0ccb1c634b41dc36b197c7685f8af60a3788ec8e4aea7cb197782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-sm-3\">
        ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"col-sm-9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"col-sm-4\">
                    <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ce9990de1cb0ccb1c634b41dc36b197c7685f8af60a3788ec8e4aea7cb197782->leave($__internal_ce9990de1cb0ccb1c634b41dc36b197c7685f8af60a3788ec8e4aea7cb197782_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  43 => 13,  37 => 12,  29 => 6,  27 => 5,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"col-sm-3\">
        {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
    </div>
    <div class=\"col-sm-9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"col-sm-4\">
                    <form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\">
                        {{ form_widget(form) }}
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\xampp\\htdocs\\Delvino\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
