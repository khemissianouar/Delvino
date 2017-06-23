<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_30631ddc72e8903ee76d57573bd12ed1ab697bba5a7f8eff620f5c5a6575aa86 extends Twig_Template
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
        $__internal_84a2a77ee05b8681259f736a7abb4acd24f3234fc55c2c25bc36bcd6c38d42d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a2a77ee05b8681259f736a7abb4acd24f3234fc55c2c25bc36bcd6c38d42d2->enter($__internal_84a2a77ee05b8681259f736a7abb4acd24f3234fc55c2c25bc36bcd6c38d42d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a2a77ee05b8681259f736a7abb4acd24f3234fc55c2c25bc36bcd6c38d42d2->leave($__internal_84a2a77ee05b8681259f736a7abb4acd24f3234fc55c2c25bc36bcd6c38d42d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c1f9a57d99787ce79c51fff547c079fc87a6f8d68ab6d4e98bf021bafdae4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1f9a57d99787ce79c51fff547c079fc87a6f8d68ab6d4e98bf021bafdae4d0->enter($__internal_0c1f9a57d99787ce79c51fff547c079fc87a6f8d68ab6d4e98bf021bafdae4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c1f9a57d99787ce79c51fff547c079fc87a6f8d68ab6d4e98bf021bafdae4d0->leave($__internal_0c1f9a57d99787ce79c51fff547c079fc87a6f8d68ab6d4e98bf021bafdae4d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c460dd6a02dbb2f08e31a08d56cccf43bef07b30b4a1d08c9dec22a319ba10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c460dd6a02dbb2f08e31a08d56cccf43bef07b30b4a1d08c9dec22a319ba10->enter($__internal_80c460dd6a02dbb2f08e31a08d56cccf43bef07b30b4a1d08c9dec22a319ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_80c460dd6a02dbb2f08e31a08d56cccf43bef07b30b4a1d08c9dec22a319ba10->leave($__internal_80c460dd6a02dbb2f08e31a08d56cccf43bef07b30b4a1d08c9dec22a319ba10_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_928101a4bb5262d7d5161e2db4e5f80a7f57e844df1fe275c6da29291bba88ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928101a4bb5262d7d5161e2db4e5f80a7f57e844df1fe275c6da29291bba88ca->enter($__internal_928101a4bb5262d7d5161e2db4e5f80a7f57e844df1fe275c6da29291bba88ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_928101a4bb5262d7d5161e2db4e5f80a7f57e844df1fe275c6da29291bba88ca->leave($__internal_928101a4bb5262d7d5161e2db4e5f80a7f57e844df1fe275c6da29291bba88ca_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Delvino\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
