<?php

/* EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig */
class __TwigTemplate_624ee9d8fe3deb81e1549203eea30563a885704e831efd4243be3b9e47054e4b extends Twig_Template
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
        $__internal_2be67598902d38edc6949de3626297997a52516a110abf0c4867f1501323aaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be67598902d38edc6949de3626297997a52516a110abf0c4867f1501323aaf7->enter($__internal_2be67598902d38edc6949de3626297997a52516a110abf0c4867f1501323aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig"));

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
        
        $__internal_2be67598902d38edc6949de3626297997a52516a110abf0c4867f1501323aaf7->leave($__internal_2be67598902d38edc6949de3626297997a52516a110abf0c4867f1501323aaf7_prof);

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
", "EcommerceBundle:Default:couleur/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/couleur/modulesUsed/menu.html.twig");
    }
}
