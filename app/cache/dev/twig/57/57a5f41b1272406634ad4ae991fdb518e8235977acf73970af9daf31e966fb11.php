<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b84dcaf5123fc2314934c2c1b8cc48001faefadf087a2cf4cc0a15d74424751c extends Twig_Template
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
        $__internal_50154b0c286292727f5044fb85265b253c9fc5713cbdd6be9c9c694406affc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50154b0c286292727f5044fb85265b253c9fc5713cbdd6be9c9c694406affc2f->enter($__internal_50154b0c286292727f5044fb85265b253c9fc5713cbdd6be9c9c694406affc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50154b0c286292727f5044fb85265b253c9fc5713cbdd6be9c9c694406affc2f->leave($__internal_50154b0c286292727f5044fb85265b253c9fc5713cbdd6be9c9c694406affc2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4bcd39b52b98ab839d1c96633b7dab218ec84b022765677a7c42d193c2b7038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bcd39b52b98ab839d1c96633b7dab218ec84b022765677a7c42d193c2b7038->enter($__internal_e4bcd39b52b98ab839d1c96633b7dab218ec84b022765677a7c42d193c2b7038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4bcd39b52b98ab839d1c96633b7dab218ec84b022765677a7c42d193c2b7038->leave($__internal_e4bcd39b52b98ab839d1c96633b7dab218ec84b022765677a7c42d193c2b7038_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e311e4887788ab65d1d078d4e53a3bcef87c35bb41465e7997a2324d1da05308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e311e4887788ab65d1d078d4e53a3bcef87c35bb41465e7997a2324d1da05308->enter($__internal_e311e4887788ab65d1d078d4e53a3bcef87c35bb41465e7997a2324d1da05308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e311e4887788ab65d1d078d4e53a3bcef87c35bb41465e7997a2324d1da05308->leave($__internal_e311e4887788ab65d1d078d4e53a3bcef87c35bb41465e7997a2324d1da05308_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c1eaf0d9d4123b89a0b3d8c84aaab797e2e78ef99585189287c48af0a00c615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1eaf0d9d4123b89a0b3d8c84aaab797e2e78ef99585189287c48af0a00c615->enter($__internal_3c1eaf0d9d4123b89a0b3d8c84aaab797e2e78ef99585189287c48af0a00c615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3c1eaf0d9d4123b89a0b3d8c84aaab797e2e78ef99585189287c48af0a00c615->leave($__internal_3c1eaf0d9d4123b89a0b3d8c84aaab797e2e78ef99585189287c48af0a00c615_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Delvino5\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
