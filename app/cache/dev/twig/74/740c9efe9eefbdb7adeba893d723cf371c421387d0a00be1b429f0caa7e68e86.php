<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9c44e3e2c2e0900fd794bc8da7a239b25b2b9c8acd9ffa49c2401d87f1f5da30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08069b7031ee9ebc3c8ab366baa1473333b04f949009c9944e8eb5709c8bb3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08069b7031ee9ebc3c8ab366baa1473333b04f949009c9944e8eb5709c8bb3e2->enter($__internal_08069b7031ee9ebc3c8ab366baa1473333b04f949009c9944e8eb5709c8bb3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08069b7031ee9ebc3c8ab366baa1473333b04f949009c9944e8eb5709c8bb3e2->leave($__internal_08069b7031ee9ebc3c8ab366baa1473333b04f949009c9944e8eb5709c8bb3e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fec7f368cfcb0bf905e2e2f41b7abe225865c7c119b71a4f17f233cfd458e7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec7f368cfcb0bf905e2e2f41b7abe225865c7c119b71a4f17f233cfd458e7a6->enter($__internal_fec7f368cfcb0bf905e2e2f41b7abe225865c7c119b71a4f17f233cfd458e7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fec7f368cfcb0bf905e2e2f41b7abe225865c7c119b71a4f17f233cfd458e7a6->leave($__internal_fec7f368cfcb0bf905e2e2f41b7abe225865c7c119b71a4f17f233cfd458e7a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40050c453a64726c2e0a9d06b3f2057306197d2eb68f81edaa2b03815e977ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40050c453a64726c2e0a9d06b3f2057306197d2eb68f81edaa2b03815e977ae9->enter($__internal_40050c453a64726c2e0a9d06b3f2057306197d2eb68f81edaa2b03815e977ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40050c453a64726c2e0a9d06b3f2057306197d2eb68f81edaa2b03815e977ae9->leave($__internal_40050c453a64726c2e0a9d06b3f2057306197d2eb68f81edaa2b03815e977ae9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7342090c9e4b9c9ed1711a3f693e4006cc6f74be96cc36abf06eaaeab925a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7342090c9e4b9c9ed1711a3f693e4006cc6f74be96cc36abf06eaaeab925a8d->enter($__internal_d7342090c9e4b9c9ed1711a3f693e4006cc6f74be96cc36abf06eaaeab925a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d7342090c9e4b9c9ed1711a3f693e4006cc6f74be96cc36abf06eaaeab925a8d->leave($__internal_d7342090c9e4b9c9ed1711a3f693e4006cc6f74be96cc36abf06eaaeab925a8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Delvino\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
