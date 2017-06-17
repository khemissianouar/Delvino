<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_40479d7349c2679195afa2b5da261fa807b7f0fedc63280bc36f9244f2c517b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1118db3d795c9c21cebef8bc5aedf662b2648fbf801bc82fb031cc341aa1f19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1118db3d795c9c21cebef8bc5aedf662b2648fbf801bc82fb031cc341aa1f19e->enter($__internal_1118db3d795c9c21cebef8bc5aedf662b2648fbf801bc82fb031cc341aa1f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1118db3d795c9c21cebef8bc5aedf662b2648fbf801bc82fb031cc341aa1f19e->leave($__internal_1118db3d795c9c21cebef8bc5aedf662b2648fbf801bc82fb031cc341aa1f19e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f0bc485574cd93422e9236b67017ae23910c16f059aacea45e6837c17df2487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0bc485574cd93422e9236b67017ae23910c16f059aacea45e6837c17df2487->enter($__internal_7f0bc485574cd93422e9236b67017ae23910c16f059aacea45e6837c17df2487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f0bc485574cd93422e9236b67017ae23910c16f059aacea45e6837c17df2487->leave($__internal_7f0bc485574cd93422e9236b67017ae23910c16f059aacea45e6837c17df2487_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35250852d3c546309090dc166deed8fb2e83f506ec12c52cfcc31854bcf33dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35250852d3c546309090dc166deed8fb2e83f506ec12c52cfcc31854bcf33dd8->enter($__internal_35250852d3c546309090dc166deed8fb2e83f506ec12c52cfcc31854bcf33dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_35250852d3c546309090dc166deed8fb2e83f506ec12c52cfcc31854bcf33dd8->leave($__internal_35250852d3c546309090dc166deed8fb2e83f506ec12c52cfcc31854bcf33dd8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c3bfc80288c50f529d459f512ce03406c97eef7a9f3664725e15d46a180966e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3bfc80288c50f529d459f512ce03406c97eef7a9f3664725e15d46a180966e->enter($__internal_5c3bfc80288c50f529d459f512ce03406c97eef7a9f3664725e15d46a180966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5c3bfc80288c50f529d459f512ce03406c97eef7a9f3664725e15d46a180966e->leave($__internal_5c3bfc80288c50f529d459f512ce03406c97eef7a9f3664725e15d46a180966e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Delvino5\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
