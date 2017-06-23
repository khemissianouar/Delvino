<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_7a273280ee79ca4d0ac7b243ca80fc78dce2c4bcce1be507e8affe61dee2e739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_429c8dd8ad41969cc6db72e0ec3a0fd946ba98eccca203ce43a339f148ef0f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429c8dd8ad41969cc6db72e0ec3a0fd946ba98eccca203ce43a339f148ef0f7c->enter($__internal_429c8dd8ad41969cc6db72e0ec3a0fd946ba98eccca203ce43a339f148ef0f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429c8dd8ad41969cc6db72e0ec3a0fd946ba98eccca203ce43a339f148ef0f7c->leave($__internal_429c8dd8ad41969cc6db72e0ec3a0fd946ba98eccca203ce43a339f148ef0f7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c30c5f3931ff9af0e998d642770fefeae538e9c7f25735aaf883f5c0573ae273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30c5f3931ff9af0e998d642770fefeae538e9c7f25735aaf883f5c0573ae273->enter($__internal_c30c5f3931ff9af0e998d642770fefeae538e9c7f25735aaf883f5c0573ae273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c30c5f3931ff9af0e998d642770fefeae538e9c7f25735aaf883f5c0573ae273->leave($__internal_c30c5f3931ff9af0e998d642770fefeae538e9c7f25735aaf883f5c0573ae273_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\Delvino\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
