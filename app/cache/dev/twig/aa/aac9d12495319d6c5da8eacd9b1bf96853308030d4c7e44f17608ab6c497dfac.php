<?php

/* EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig */
class __TwigTemplate_cb5f12576dd324a19abb8b6011863fd908d6410aac5e7969a52fe39505a1fb68 extends Twig_Template
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
        $__internal_078b45d5b04cfa44ab70c2d8cdb84361c0d3d4a29d0a51be9b19eaa479fc3715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078b45d5b04cfa44ab70c2d8cdb84361c0d3d4a29d0a51be9b19eaa479fc3715->enter($__internal_078b45d5b04cfa44ab70c2d8cdb84361c0d3d4a29d0a51be9b19eaa479fc3715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig"));

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
        
        $__internal_078b45d5b04cfa44ab70c2d8cdb84361c0d3d4a29d0a51be9b19eaa479fc3715->leave($__internal_078b45d5b04cfa44ab70c2d8cdb84361c0d3d4a29d0a51be9b19eaa479fc3715_prof);

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
