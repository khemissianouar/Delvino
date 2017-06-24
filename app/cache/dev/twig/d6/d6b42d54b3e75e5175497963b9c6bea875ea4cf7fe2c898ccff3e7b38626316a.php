<?php

/* EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig */
class __TwigTemplate_4ceb7f215d01647b5931dfa6be9791c262e27834de0c0a1847ba1522e65f303b extends Twig_Template
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
        $__internal_543f97322dcd63af6ad7615011a627a32438931c0d18afb9403e93a5a1470159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543f97322dcd63af6ad7615011a627a32438931c0d18afb9403e93a5a1470159->enter($__internal_543f97322dcd63af6ad7615011a627a32438931c0d18afb9403e93a5a1470159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new Twig_Error_Runtime('Variable "couleurs" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
            // line 2
            echo "
    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("couleurProduits", array("couleur" => twig_get_attribute($this->env, $this->getSourceContext(), $context["couleur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["couleur"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_543f97322dcd63af6ad7615011a627a32438931c0d18afb9403e93a5a1470159->leave($__internal_543f97322dcd63af6ad7615011a627a32438931c0d18afb9403e93a5a1470159_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig";
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
        return new Twig_Source("{% for couleur in couleurs %}

    <li>
        <a href=\"{{ path('couleurProduits',{'couleur':couleur.id})}}\">{{ couleur.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/couleur/modulesUsed/menu.html.twig");
    }
}
