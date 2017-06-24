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
        $__internal_668bb4cc80aa62e187c3adbac3e71bf2648f0265fb720750cbc5a37270a51b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668bb4cc80aa62e187c3adbac3e71bf2648f0265fb720750cbc5a37270a51b0d->enter($__internal_668bb4cc80aa62e187c3adbac3e71bf2648f0265fb720750cbc5a37270a51b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668bb4cc80aa62e187c3adbac3e71bf2648f0265fb720750cbc5a37270a51b0d->leave($__internal_668bb4cc80aa62e187c3adbac3e71bf2648f0265fb720750cbc5a37270a51b0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfcbffb4e30f1d2e75d84ae82e25aa102f0ae33712dd027dba2c4a4475ba829a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcbffb4e30f1d2e75d84ae82e25aa102f0ae33712dd027dba2c4a4475ba829a->enter($__internal_bfcbffb4e30f1d2e75d84ae82e25aa102f0ae33712dd027dba2c4a4475ba829a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfcbffb4e30f1d2e75d84ae82e25aa102f0ae33712dd027dba2c4a4475ba829a->leave($__internal_bfcbffb4e30f1d2e75d84ae82e25aa102f0ae33712dd027dba2c4a4475ba829a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86416b0d5e6a879b4e51e399b3fe96fa826d60e5513484b81df51b7fbf76ba5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86416b0d5e6a879b4e51e399b3fe96fa826d60e5513484b81df51b7fbf76ba5c->enter($__internal_86416b0d5e6a879b4e51e399b3fe96fa826d60e5513484b81df51b7fbf76ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_86416b0d5e6a879b4e51e399b3fe96fa826d60e5513484b81df51b7fbf76ba5c->leave($__internal_86416b0d5e6a879b4e51e399b3fe96fa826d60e5513484b81df51b7fbf76ba5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ed83a6c3060684c9ff940c621c125af2c4bd9a1faee73b675bc7f721fd747f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed83a6c3060684c9ff940c621c125af2c4bd9a1faee73b675bc7f721fd747f9->enter($__internal_3ed83a6c3060684c9ff940c621c125af2c4bd9a1faee73b675bc7f721fd747f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ed83a6c3060684c9ff940c621c125af2c4bd9a1faee73b675bc7f721fd747f9->leave($__internal_3ed83a6c3060684c9ff940c621c125af2c4bd9a1faee73b675bc7f721fd747f9_prof);

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
