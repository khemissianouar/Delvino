<?php

/* EcommerceBundle:Default:region/modulesUsed/menu.html.twig */
class __TwigTemplate_b14b18e167b9bf80e23dd9c95d74fb2f0b2cfd637df4d69b79c08644ad6a9b20 extends Twig_Template
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
        $__internal_ac41600fb4c76b910e8b31e64d069a7dd33d36a2dcb59b45228960037e561df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac41600fb4c76b910e8b31e64d069a7dd33d36a2dcb59b45228960037e561df8->enter($__internal_ac41600fb4c76b910e8b31e64d069a7dd33d36a2dcb59b45228960037e561df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig"));

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
        
        $__internal_ac41600fb4c76b910e8b31e64d069a7dd33d36a2dcb59b45228960037e561df8->leave($__internal_ac41600fb4c76b910e8b31e64d069a7dd33d36a2dcb59b45228960037e561df8_prof);

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
", "EcommerceBundle:Default:region/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/region/modulesUsed/menu.html.twig");
    }
}
