<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8ade882209c0a7c0ba8c95cb8c89f0e0c04d6a53804e925edae072a078412dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_928f0670e063a81a85e2b85b29c42c4053d89385b6126d9a382fd98ca030d31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928f0670e063a81a85e2b85b29c42c4053d89385b6126d9a382fd98ca030d31d->enter($__internal_928f0670e063a81a85e2b85b29c42c4053d89385b6126d9a382fd98ca030d31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928f0670e063a81a85e2b85b29c42c4053d89385b6126d9a382fd98ca030d31d->leave($__internal_928f0670e063a81a85e2b85b29c42c4053d89385b6126d9a382fd98ca030d31d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bccf2f9ab8f6b49016f9c0f85656a2e5c991c7a3718f72c1df1fc053445c8cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccf2f9ab8f6b49016f9c0f85656a2e5c991c7a3718f72c1df1fc053445c8cd6->enter($__internal_bccf2f9ab8f6b49016f9c0f85656a2e5c991c7a3718f72c1df1fc053445c8cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bccf2f9ab8f6b49016f9c0f85656a2e5c991c7a3718f72c1df1fc053445c8cd6->leave($__internal_bccf2f9ab8f6b49016f9c0f85656a2e5c991c7a3718f72c1df1fc053445c8cd6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
