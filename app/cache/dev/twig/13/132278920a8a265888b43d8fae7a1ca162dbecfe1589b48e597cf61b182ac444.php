<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d709036cf13974ec4726553351418abbed424d1bf3dccb5476b0198da7641af0 extends Twig_Template
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
        $__internal_c0b17cf7c7389720dd1ef3f2b7303807a549a604f526bb125b91ecba9970b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b17cf7c7389720dd1ef3f2b7303807a549a604f526bb125b91ecba9970b024->enter($__internal_c0b17cf7c7389720dd1ef3f2b7303807a549a604f526bb125b91ecba9970b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b17cf7c7389720dd1ef3f2b7303807a549a604f526bb125b91ecba9970b024->leave($__internal_c0b17cf7c7389720dd1ef3f2b7303807a549a604f526bb125b91ecba9970b024_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72df5a0ab068e4ae8882809901ff9b483abc26f1f19c7103ef8d459e2a8be08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72df5a0ab068e4ae8882809901ff9b483abc26f1f19c7103ef8d459e2a8be08c->enter($__internal_72df5a0ab068e4ae8882809901ff9b483abc26f1f19c7103ef8d459e2a8be08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72df5a0ab068e4ae8882809901ff9b483abc26f1f19c7103ef8d459e2a8be08c->leave($__internal_72df5a0ab068e4ae8882809901ff9b483abc26f1f19c7103ef8d459e2a8be08c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_672c1958211453e14ad24d6226c22807630f1e51295444a8293f19f854d3ce5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672c1958211453e14ad24d6226c22807630f1e51295444a8293f19f854d3ce5a->enter($__internal_672c1958211453e14ad24d6226c22807630f1e51295444a8293f19f854d3ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_672c1958211453e14ad24d6226c22807630f1e51295444a8293f19f854d3ce5a->leave($__internal_672c1958211453e14ad24d6226c22807630f1e51295444a8293f19f854d3ce5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a8bbbc729dbc6172396fdbc9dc62b698aa87b8627c8f5ab8f3b2b92d4a2abf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8bbbc729dbc6172396fdbc9dc62b698aa87b8627c8f5ab8f3b2b92d4a2abf6->enter($__internal_8a8bbbc729dbc6172396fdbc9dc62b698aa87b8627c8f5ab8f3b2b92d4a2abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8a8bbbc729dbc6172396fdbc9dc62b698aa87b8627c8f5ab8f3b2b92d4a2abf6->leave($__internal_8a8bbbc729dbc6172396fdbc9dc62b698aa87b8627c8f5ab8f3b2b92d4a2abf6_prof);

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
