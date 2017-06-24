<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7698183f80b322487463022ce6491f4e80e3fdadd87e9c930cb81470aab3f511 extends Twig_Template
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
        $__internal_d764c11a160a7aa7fc4948bb1177365c9d9bcb0267683e6517773467258a0ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d764c11a160a7aa7fc4948bb1177365c9d9bcb0267683e6517773467258a0ef4->enter($__internal_d764c11a160a7aa7fc4948bb1177365c9d9bcb0267683e6517773467258a0ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d764c11a160a7aa7fc4948bb1177365c9d9bcb0267683e6517773467258a0ef4->leave($__internal_d764c11a160a7aa7fc4948bb1177365c9d9bcb0267683e6517773467258a0ef4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26c31c6f15449e1918a17a0ba643d5c050ee3b770aeadf2b652b6f47f5a05c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c31c6f15449e1918a17a0ba643d5c050ee3b770aeadf2b652b6f47f5a05c48->enter($__internal_26c31c6f15449e1918a17a0ba643d5c050ee3b770aeadf2b652b6f47f5a05c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26c31c6f15449e1918a17a0ba643d5c050ee3b770aeadf2b652b6f47f5a05c48->leave($__internal_26c31c6f15449e1918a17a0ba643d5c050ee3b770aeadf2b652b6f47f5a05c48_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b39a5abed354f4e4ee974981d85cd1c3e1b7cd3aa0785125d6830e7d197e278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b39a5abed354f4e4ee974981d85cd1c3e1b7cd3aa0785125d6830e7d197e278->enter($__internal_3b39a5abed354f4e4ee974981d85cd1c3e1b7cd3aa0785125d6830e7d197e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3b39a5abed354f4e4ee974981d85cd1c3e1b7cd3aa0785125d6830e7d197e278->leave($__internal_3b39a5abed354f4e4ee974981d85cd1c3e1b7cd3aa0785125d6830e7d197e278_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cb9527cae8f5ea236da37ecbb7b0098acb73f92a6e50c81765bded3554d2f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb9527cae8f5ea236da37ecbb7b0098acb73f92a6e50c81765bded3554d2f31->enter($__internal_5cb9527cae8f5ea236da37ecbb7b0098acb73f92a6e50c81765bded3554d2f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5cb9527cae8f5ea236da37ecbb7b0098acb73f92a6e50c81765bded3554d2f31->leave($__internal_5cb9527cae8f5ea236da37ecbb7b0098acb73f92a6e50c81765bded3554d2f31_prof);

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
