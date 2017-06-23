<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6b4dadd7992223373fe1eb6664f396a5e9e6f6ab7ffb1faf83c1bbeb7d1387f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_3f0f8e2b548805e31e45e071608858ae990e522bda6399381955d8ea6e7596c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0f8e2b548805e31e45e071608858ae990e522bda6399381955d8ea6e7596c8->enter($__internal_3f0f8e2b548805e31e45e071608858ae990e522bda6399381955d8ea6e7596c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f0f8e2b548805e31e45e071608858ae990e522bda6399381955d8ea6e7596c8->leave($__internal_3f0f8e2b548805e31e45e071608858ae990e522bda6399381955d8ea6e7596c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41354f732d886813f54fb494d95183ff3aa8a3d40eef77aafdc04ddd83989885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41354f732d886813f54fb494d95183ff3aa8a3d40eef77aafdc04ddd83989885->enter($__internal_41354f732d886813f54fb494d95183ff3aa8a3d40eef77aafdc04ddd83989885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_41354f732d886813f54fb494d95183ff3aa8a3d40eef77aafdc04ddd83989885->leave($__internal_41354f732d886813f54fb494d95183ff3aa8a3d40eef77aafdc04ddd83989885_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
