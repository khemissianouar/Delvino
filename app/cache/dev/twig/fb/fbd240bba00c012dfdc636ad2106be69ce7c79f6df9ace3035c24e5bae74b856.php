<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f7eb0ec03992a3283665fa6162056b09381e078c5e112ec888948a220518e700 extends Twig_Template
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
        $__internal_64235a6e2fdee0e157e6b476417aa73853006aeb2ed0c49a1537d94d7d33112c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64235a6e2fdee0e157e6b476417aa73853006aeb2ed0c49a1537d94d7d33112c->enter($__internal_64235a6e2fdee0e157e6b476417aa73853006aeb2ed0c49a1537d94d7d33112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64235a6e2fdee0e157e6b476417aa73853006aeb2ed0c49a1537d94d7d33112c->leave($__internal_64235a6e2fdee0e157e6b476417aa73853006aeb2ed0c49a1537d94d7d33112c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db4018cce121335f2857d51124a8a4eee2b46769a83898d09087166257f1b3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4018cce121335f2857d51124a8a4eee2b46769a83898d09087166257f1b3f3->enter($__internal_db4018cce121335f2857d51124a8a4eee2b46769a83898d09087166257f1b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_db4018cce121335f2857d51124a8a4eee2b46769a83898d09087166257f1b3f3->leave($__internal_db4018cce121335f2857d51124a8a4eee2b46769a83898d09087166257f1b3f3_prof);

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
