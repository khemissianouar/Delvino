<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a4510bcaced4ac0c527937a01b1e35d436f491b38593c5f5fae327120b12432d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_7a507eae197931cf13e0dd19f7a26565f635dccae8d7fbdf3248425af52585ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a507eae197931cf13e0dd19f7a26565f635dccae8d7fbdf3248425af52585ed->enter($__internal_7a507eae197931cf13e0dd19f7a26565f635dccae8d7fbdf3248425af52585ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a507eae197931cf13e0dd19f7a26565f635dccae8d7fbdf3248425af52585ed->leave($__internal_7a507eae197931cf13e0dd19f7a26565f635dccae8d7fbdf3248425af52585ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90cb82397493f8f3c158048b760c816e8a90f6590f3024a2ea31673ee2fca430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cb82397493f8f3c158048b760c816e8a90f6590f3024a2ea31673ee2fca430->enter($__internal_90cb82397493f8f3c158048b760c816e8a90f6590f3024a2ea31673ee2fca430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_90cb82397493f8f3c158048b760c816e8a90f6590f3024a2ea31673ee2fca430->leave($__internal_90cb82397493f8f3c158048b760c816e8a90f6590f3024a2ea31673ee2fca430_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
