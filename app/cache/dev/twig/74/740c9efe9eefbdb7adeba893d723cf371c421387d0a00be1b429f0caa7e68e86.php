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
        $__internal_69e51eb29038ddbed057e3a38c36aebc896b21b1aee42f5e2d0066e17f3694c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e51eb29038ddbed057e3a38c36aebc896b21b1aee42f5e2d0066e17f3694c8->enter($__internal_69e51eb29038ddbed057e3a38c36aebc896b21b1aee42f5e2d0066e17f3694c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e51eb29038ddbed057e3a38c36aebc896b21b1aee42f5e2d0066e17f3694c8->leave($__internal_69e51eb29038ddbed057e3a38c36aebc896b21b1aee42f5e2d0066e17f3694c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc213280259ddac634299c2d41e975991abb8cdf9b55a11ba09bc0602779ccec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc213280259ddac634299c2d41e975991abb8cdf9b55a11ba09bc0602779ccec->enter($__internal_dc213280259ddac634299c2d41e975991abb8cdf9b55a11ba09bc0602779ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc213280259ddac634299c2d41e975991abb8cdf9b55a11ba09bc0602779ccec->leave($__internal_dc213280259ddac634299c2d41e975991abb8cdf9b55a11ba09bc0602779ccec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6dc58799e683e5d3d1f00dace7e4afff307ecba54741a995ad888c3164511b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6dc58799e683e5d3d1f00dace7e4afff307ecba54741a995ad888c3164511b5->enter($__internal_c6dc58799e683e5d3d1f00dace7e4afff307ecba54741a995ad888c3164511b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6dc58799e683e5d3d1f00dace7e4afff307ecba54741a995ad888c3164511b5->leave($__internal_c6dc58799e683e5d3d1f00dace7e4afff307ecba54741a995ad888c3164511b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a35df421ce355e5ee3b3f6f2e383aaa49f3c6a8eee0b91e4d89fdb8999cd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a35df421ce355e5ee3b3f6f2e383aaa49f3c6a8eee0b91e4d89fdb8999cd010->enter($__internal_2a35df421ce355e5ee3b3f6f2e383aaa49f3c6a8eee0b91e4d89fdb8999cd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2a35df421ce355e5ee3b3f6f2e383aaa49f3c6a8eee0b91e4d89fdb8999cd010->leave($__internal_2a35df421ce355e5ee3b3f6f2e383aaa49f3c6a8eee0b91e4d89fdb8999cd010_prof);

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
