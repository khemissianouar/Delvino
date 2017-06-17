<?php

/* EcommerceBundle:Default:gout/modulesUsed/menu.html.twig */
class __TwigTemplate_416220e63bf1e7078ca5317d1bffba5224639434a3115b7aab31c5721bc93dd9 extends Twig_Template
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
        $__internal_c3c3ddef37e8871f1e8da9338a90fc8bc8cebf68af029e552304cc833ac9efa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c3ddef37e8871f1e8da9338a90fc8bc8cebf68af029e552304cc833ac9efa4->enter($__internal_c3c3ddef37e8871f1e8da9338a90fc8bc8cebf68af029e552304cc833ac9efa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:gout/modulesUsed/menu.html.twig"));

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
        
        $__internal_c3c3ddef37e8871f1e8da9338a90fc8bc8cebf68af029e552304cc833ac9efa4->leave($__internal_c3c3ddef37e8871f1e8da9338a90fc8bc8cebf68af029e552304cc833ac9efa4_prof);

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
