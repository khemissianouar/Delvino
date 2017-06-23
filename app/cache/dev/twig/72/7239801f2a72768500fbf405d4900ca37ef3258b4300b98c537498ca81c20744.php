<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_61b2dfc76795ad88c982b1071c2a7332a1af3094a3fefb293445733470942033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32f62fd82ef39ffacd8afa6f8fe3e7f81969fe9cb09baf2f21211b6200f9246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32f62fd82ef39ffacd8afa6f8fe3e7f81969fe9cb09baf2f21211b6200f9246->enter($__internal_b32f62fd82ef39ffacd8afa6f8fe3e7f81969fe9cb09baf2f21211b6200f9246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32f62fd82ef39ffacd8afa6f8fe3e7f81969fe9cb09baf2f21211b6200f9246->leave($__internal_b32f62fd82ef39ffacd8afa6f8fe3e7f81969fe9cb09baf2f21211b6200f9246_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_454c59437bef04685287197dc2867b4363aec04034cf994f7b6d1b5c02ba7991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454c59437bef04685287197dc2867b4363aec04034cf994f7b6d1b5c02ba7991->enter($__internal_454c59437bef04685287197dc2867b4363aec04034cf994f7b6d1b5c02ba7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "get", array(0 => (("_security." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 9, $this->getSourceContext()); })()))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
        
        $__internal_454c59437bef04685287197dc2867b4363aec04034cf994f7b6d1b5c02ba7991->leave($__internal_454c59437bef04685287197dc2867b4363aec04034cf994f7b6d1b5c02ba7991_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  50 => 9,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
