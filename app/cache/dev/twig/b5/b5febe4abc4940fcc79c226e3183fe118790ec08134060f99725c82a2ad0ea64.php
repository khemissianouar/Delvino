<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b1740615f349627a228e96bdf85aea02fd2cc3d4824c86869447a0474a4fb809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_a4b4dbf9c4d02db317563767192e1f2085b72d578acca64b2d63f8abe97e6d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4dbf9c4d02db317563767192e1f2085b72d578acca64b2d63f8abe97e6d0a->enter($__internal_a4b4dbf9c4d02db317563767192e1f2085b72d578acca64b2d63f8abe97e6d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b4dbf9c4d02db317563767192e1f2085b72d578acca64b2d63f8abe97e6d0a->leave($__internal_a4b4dbf9c4d02db317563767192e1f2085b72d578acca64b2d63f8abe97e6d0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf1dfe2c2ec9aa994b27e4d62313bf16ad951f4f2f22e5d6f6e8ad7170cd9ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1dfe2c2ec9aa994b27e4d62313bf16ad951f4f2f22e5d6f6e8ad7170cd9ece->enter($__internal_cf1dfe2c2ec9aa994b27e4d62313bf16ad951f4f2f22e5d6f6e8ad7170cd9ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cf1dfe2c2ec9aa994b27e4d62313bf16ad951f4f2f22e5d6f6e8ad7170cd9ece->leave($__internal_cf1dfe2c2ec9aa994b27e4d62313bf16ad951f4f2f22e5d6f6e8ad7170cd9ece_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
