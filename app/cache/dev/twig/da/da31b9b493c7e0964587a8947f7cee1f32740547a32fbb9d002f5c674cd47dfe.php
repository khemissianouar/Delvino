<?php

/* EcommerceBundle:Default:Type/modulesUsed/menu.html.twig */
class __TwigTemplate_a80ab137edb68c8b3cf411aa4ba203e6ac4cf3e1fc33ac5f1cab121c44760197 extends Twig_Template
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
        $__internal_2b6b3743c20076a9b0ceb52eb8e62bb6889fc9135330cef134d648d33482954a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6b3743c20076a9b0ceb52eb8e62bb6889fc9135330cef134d648d33482954a->enter($__internal_2b6b3743c20076a9b0ceb52eb8e62bb6889fc9135330cef134d648d33482954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig"));

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
        
        $__internal_2b6b3743c20076a9b0ceb52eb8e62bb6889fc9135330cef134d648d33482954a->leave($__internal_2b6b3743c20076a9b0ceb52eb8e62bb6889fc9135330cef134d648d33482954a_prof);

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
