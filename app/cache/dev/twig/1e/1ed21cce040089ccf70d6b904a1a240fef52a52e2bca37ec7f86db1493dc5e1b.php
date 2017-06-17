<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_2b50861902e755385967cb6e27887d3d7e03cbe4d4f8c961300f5881dfa66d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a1d81205c80a18026761e4ab1bc27fdabfc3f6e74417cc28d0f5c5cf8d7693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a1d81205c80a18026761e4ab1bc27fdabfc3f6e74417cc28d0f5c5cf8d7693->enter($__internal_03a1d81205c80a18026761e4ab1bc27fdabfc3f6e74417cc28d0f5c5cf8d7693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a1d81205c80a18026761e4ab1bc27fdabfc3f6e74417cc28d0f5c5cf8d7693->leave($__internal_03a1d81205c80a18026761e4ab1bc27fdabfc3f6e74417cc28d0f5c5cf8d7693_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_858db7784ee10c69fecbbfac86af009402a997ce1316c8b3a37e04f5fbcd798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858db7784ee10c69fecbbfac86af009402a997ce1316c8b3a37e04f5fbcd798a->enter($__internal_858db7784ee10c69fecbbfac86af009402a997ce1316c8b3a37e04f5fbcd798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 6, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 8
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->getSourceContext()); })()), "contenu", array());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_858db7784ee10c69fecbbfac86af009402a997ce1316c8b3a37e04f5fbcd798a->leave($__internal_858db7784ee10c69fecbbfac86af009402a997ce1316c8b3a37e04f5fbcd798a_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <h1>{{ page.titre }}</h1>
        <div class=\"span12\">
            {{ page.contenu|raw }}
        </div>
    </div>
</div>
{% endblock %}
", "PagesBundle:Default:pages/layout/pages.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Pages\\PagesBundle/Resources/views/Default/pages/layout/pages.html.twig");
    }
}
