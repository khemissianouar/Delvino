<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_0737471067289e6045388496b29bc5c695c92a64f0528d4db4bd99fd69b9959a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bd33846af5699b4f3f6076bb9163a0c25b7e17bb78ab7335ee50bfe5ed94566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd33846af5699b4f3f6076bb9163a0c25b7e17bb78ab7335ee50bfe5ed94566->enter($__internal_0bd33846af5699b4f3f6076bb9163a0c25b7e17bb78ab7335ee50bfe5ed94566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd33846af5699b4f3f6076bb9163a0c25b7e17bb78ab7335ee50bfe5ed94566->leave($__internal_0bd33846af5699b4f3f6076bb9163a0c25b7e17bb78ab7335ee50bfe5ed94566_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd0ca93d9a06b5504a037acf85c4315a3af25ae85718fed7e9ccaab36d5452d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0ca93d9a06b5504a037acf85c4315a3af25ae85718fed7e9ccaab36d5452d3->enter($__internal_dd0ca93d9a06b5504a037acf85c4315a3af25ae85718fed7e9ccaab36d5452d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_dd0ca93d9a06b5504a037acf85c4315a3af25ae85718fed7e9ccaab36d5452d3->leave($__internal_dd0ca93d9a06b5504a037acf85c4315a3af25ae85718fed7e9ccaab36d5452d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\Delvino\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
