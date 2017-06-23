<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_1ce4512312920a61c6fc52e0edacad1856b96c086ab7c907dfe1ebdcc20192c1 extends Twig_Template
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
        $__internal_01e1b17252b705f9091e01151484b40bbabfaee40fc871e40ef59bcd23af7260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e1b17252b705f9091e01151484b40bbabfaee40fc871e40ef59bcd23af7260->enter($__internal_01e1b17252b705f9091e01151484b40bbabfaee40fc871e40ef59bcd23af7260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e1b17252b705f9091e01151484b40bbabfaee40fc871e40ef59bcd23af7260->leave($__internal_01e1b17252b705f9091e01151484b40bbabfaee40fc871e40ef59bcd23af7260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc54c4eb83022c3ab6bec3142139d113e535e9f6a9b9f4dcd0f98263ef94fbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc54c4eb83022c3ab6bec3142139d113e535e9f6a9b9f4dcd0f98263ef94fbba->enter($__internal_fc54c4eb83022c3ab6bec3142139d113e535e9f6a9b9f4dcd0f98263ef94fbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_fc54c4eb83022c3ab6bec3142139d113e535e9f6a9b9f4dcd0f98263ef94fbba->leave($__internal_fc54c4eb83022c3ab6bec3142139d113e535e9f6a9b9f4dcd0f98263ef94fbba_prof);

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
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
