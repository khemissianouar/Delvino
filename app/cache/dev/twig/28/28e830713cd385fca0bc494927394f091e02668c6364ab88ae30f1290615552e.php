<?php

/* EcommerceBundle:Default:region/modulesUsed/menu.html.twig */
class __TwigTemplate_bae433f3f2f143d678e5ed7d0df0e6b581c885418122f5a7f0592d8c6bed7ffe extends Twig_Template
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
        $__internal_d34e947d8e30db551714470b33999552a3e643215c3551be28417fab02a8fd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34e947d8e30db551714470b33999552a3e643215c3551be28417fab02a8fd16->enter($__internal_d34e947d8e30db551714470b33999552a3e643215c3551be28417fab02a8fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new Twig_Error_Runtime('Variable "regions" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 2
            echo "
    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("regionProduits", array("region" => twig_get_attribute($this->env, $this->getSourceContext(), $context["region"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["region"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d34e947d8e30db551714470b33999552a3e643215c3551be28417fab02a8fd16->leave($__internal_d34e947d8e30db551714470b33999552a3e643215c3551be28417fab02a8fd16_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:region/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for region in regions %}

    <li>
        <a href=\"{{ path('regionProduits',{'region':region.id})}}\">{{ region.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/region/modulesUsed/menu.html.twig");
    }
}
