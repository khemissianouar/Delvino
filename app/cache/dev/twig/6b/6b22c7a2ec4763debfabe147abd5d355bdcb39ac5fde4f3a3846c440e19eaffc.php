<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9a19db6552c426f6bf001fe1c7606862010a18def9a72d25fe147bd109489f8b extends Twig_Template
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
        $__internal_3b6d649a21f5f11e6bec4c3dde7b47b73dd62d1022bbea2bb9f9558f20141cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6d649a21f5f11e6bec4c3dde7b47b73dd62d1022bbea2bb9f9558f20141cb8->enter($__internal_3b6d649a21f5f11e6bec4c3dde7b47b73dd62d1022bbea2bb9f9558f20141cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6d649a21f5f11e6bec4c3dde7b47b73dd62d1022bbea2bb9f9558f20141cb8->leave($__internal_3b6d649a21f5f11e6bec4c3dde7b47b73dd62d1022bbea2bb9f9558f20141cb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e83f8dcddf7b14b99037023f8df93a077de372603000fb72a360c64721738d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e83f8dcddf7b14b99037023f8df93a077de372603000fb72a360c64721738d3->enter($__internal_3e83f8dcddf7b14b99037023f8df93a077de372603000fb72a360c64721738d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3e83f8dcddf7b14b99037023f8df93a077de372603000fb72a360c64721738d3->leave($__internal_3e83f8dcddf7b14b99037023f8df93a077de372603000fb72a360c64721738d3_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
