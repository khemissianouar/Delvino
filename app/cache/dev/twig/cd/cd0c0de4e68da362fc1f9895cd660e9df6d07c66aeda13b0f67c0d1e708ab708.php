<?php

/* EcommerceBundle:Default:alcool/modulesUsed/menu.html.twig */
class __TwigTemplate_8f6bdb7a977ddfc5c034df4e90ad710484c893b304541d5f67bd6c302f519722 extends Twig_Template
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
        $__internal_d95262f78548024c38f4562c5f95d8fb9fc12f7cfccba160e5862b4fdd129085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95262f78548024c38f4562c5f95d8fb9fc12f7cfccba160e5862b4fdd129085->enter($__internal_d95262f78548024c38f4562c5f95d8fb9fc12f7cfccba160e5862b4fdd129085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:alcool/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alcool"]) {
            // line 2
            echo "
    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcoolProduits", array("alcool" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alcool"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alcool"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alcool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d95262f78548024c38f4562c5f95d8fb9fc12f7cfccba160e5862b4fdd129085->leave($__internal_d95262f78548024c38f4562c5f95d8fb9fc12f7cfccba160e5862b4fdd129085_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:alcool/modulesUsed/menu.html.twig";
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
        return new Twig_Source("{% for alcool in alcools %}

    <li>
        <a href=\"{{ path('alcoolProduits',{'alcool':alcool.id})}}\">{{ alcool.nom }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:alcool/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/alcool/modulesUsed/menu.html.twig");
    }
}
