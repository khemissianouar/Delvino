<?php

/* EcommerceBundle:Default:Type/modulesUsed/menu.html.twig */
class __TwigTemplate_2c9e5f34522e26d304082b5c524efc74b34641d2f25e622cf39422d3bc4809ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_142ffd11b1603b799222fd3205329647302eff695f050871eba1f52862bed7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142ffd11b1603b799222fd3205329647302eff695f050871eba1f52862bed7e5->enter($__internal_142ffd11b1603b799222fd3205329647302eff695f050871eba1f52862bed7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeProduits", array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_142ffd11b1603b799222fd3205329647302eff695f050871eba1f52862bed7e5->leave($__internal_142ffd11b1603b799222fd3205329647302eff695f050871eba1f52862bed7e5_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for type in types %}
    <li>
        <a href=\"{{ path('typeProduits', { 'type' : type.id }) }}\">{{ type.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Type/modulesUsed/menu.html.twig");
    }
}
