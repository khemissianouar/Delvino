<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a87e21d449cd1e5b4a5a6572689c17963ed344e08288943ac1abcea7ac460cd extends Twig_Template
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
        $__internal_e3f2937f0a06c9e4201a89cb5a9c293e24ad34eec2eff2c5ee28113acc10583a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f2937f0a06c9e4201a89cb5a9c293e24ad34eec2eff2c5ee28113acc10583a->enter($__internal_e3f2937f0a06c9e4201a89cb5a9c293e24ad34eec2eff2c5ee28113acc10583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f2937f0a06c9e4201a89cb5a9c293e24ad34eec2eff2c5ee28113acc10583a->leave($__internal_e3f2937f0a06c9e4201a89cb5a9c293e24ad34eec2eff2c5ee28113acc10583a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0ee230d1f048a917e6c6ee1c87f7b692d17d1875acfa29e92db530e6cd55cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ee230d1f048a917e6c6ee1c87f7b692d17d1875acfa29e92db530e6cd55cbd->enter($__internal_d0ee230d1f048a917e6c6ee1c87f7b692d17d1875acfa29e92db530e6cd55cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0ee230d1f048a917e6c6ee1c87f7b692d17d1875acfa29e92db530e6cd55cbd->leave($__internal_d0ee230d1f048a917e6c6ee1c87f7b692d17d1875acfa29e92db530e6cd55cbd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac090b58acb6650188ad7aee21e810e87a8711b714dfa5bd6e99dba55a8d75e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac090b58acb6650188ad7aee21e810e87a8711b714dfa5bd6e99dba55a8d75e3->enter($__internal_ac090b58acb6650188ad7aee21e810e87a8711b714dfa5bd6e99dba55a8d75e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac090b58acb6650188ad7aee21e810e87a8711b714dfa5bd6e99dba55a8d75e3->leave($__internal_ac090b58acb6650188ad7aee21e810e87a8711b714dfa5bd6e99dba55a8d75e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4a541e6e5b17ee91b1d9a29d68266bb99bcb0427225ed00562aaa16bf62085b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a541e6e5b17ee91b1d9a29d68266bb99bcb0427225ed00562aaa16bf62085b->enter($__internal_e4a541e6e5b17ee91b1d9a29d68266bb99bcb0427225ed00562aaa16bf62085b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e4a541e6e5b17ee91b1d9a29d68266bb99bcb0427225ed00562aaa16bf62085b->leave($__internal_e4a541e6e5b17ee91b1d9a29d68266bb99bcb0427225ed00562aaa16bf62085b_prof);

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
