<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_77d04e25a5aa0d5cf90ee03678ad9f5387828a1ef9caf4da991d7d2b48886336 extends Twig_Template
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
        $__internal_4b064895640a0d49f569f8f7d723caa81916b6cf89fedaf347bb33e99ec994cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b064895640a0d49f569f8f7d723caa81916b6cf89fedaf347bb33e99ec994cb->enter($__internal_4b064895640a0d49f569f8f7d723caa81916b6cf89fedaf347bb33e99ec994cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b064895640a0d49f569f8f7d723caa81916b6cf89fedaf347bb33e99ec994cb->leave($__internal_4b064895640a0d49f569f8f7d723caa81916b6cf89fedaf347bb33e99ec994cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_696f315001ceb5797e5bc707750e48b29b8361e28e64c02f18818b1fd4832c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696f315001ceb5797e5bc707750e48b29b8361e28e64c02f18818b1fd4832c4e->enter($__internal_696f315001ceb5797e5bc707750e48b29b8361e28e64c02f18818b1fd4832c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_696f315001ceb5797e5bc707750e48b29b8361e28e64c02f18818b1fd4832c4e->leave($__internal_696f315001ceb5797e5bc707750e48b29b8361e28e64c02f18818b1fd4832c4e_prof);

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
