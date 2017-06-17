<?php

/* EcommerceBundle:Default:gout/modulesUsed/menu.html.twig */
class __TwigTemplate_662c8ba4cfaf6086b70c0c33464fe033b43e7359a307c3db4f74448c83dd312e extends Twig_Template
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
        $__internal_433db11465ebdaaba6c8669abcee25b77bf913d181913349e6b92f1d602e59eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433db11465ebdaaba6c8669abcee25b77bf913d181913349e6b92f1d602e59eb->enter($__internal_433db11465ebdaaba6c8669abcee25b77bf913d181913349e6b92f1d602e59eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:gout/modulesUsed/menu.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gouts"]) || array_key_exists("gouts", $context) ? $context["gouts"] : (function () { throw new Twig_Error_Runtime('Variable "gouts" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gout"]) {
            // line 3
            echo "    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("goutProduits", array("gout" => twig_get_attribute($this->env, $this->getSourceContext(), $context["gout"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gout"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_433db11465ebdaaba6c8669abcee25b77bf913d181913349e6b92f1d602e59eb->leave($__internal_433db11465ebdaaba6c8669abcee25b77bf913d181913349e6b92f1d602e59eb_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:gout/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for gout in gouts %}
    <li>
        <a href=\"{{ path('goutProduits',{'gout':gout.id})}}\">{{ gout.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:gout/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/gout/modulesUsed/menu.html.twig");
    }
}
