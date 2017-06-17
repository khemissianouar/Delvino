<?php

/* EcommerceBundle:Default:Type/modulesUsed/menu.html.twig */
class __TwigTemplate_63e3592476dcab68b91c0ff8457bf59dd78530d925f9e02104aae0a103b96559 extends Twig_Template
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
        $__internal_790b5ec99307350404d1c4899e7dad476a9e584c79efcd56dd25197a9d6208a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790b5ec99307350404d1c4899e7dad476a9e584c79efcd56dd25197a9d6208a2->enter($__internal_790b5ec99307350404d1c4899e7dad476a9e584c79efcd56dd25197a9d6208a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig"));

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
        
        $__internal_790b5ec99307350404d1c4899e7dad476a9e584c79efcd56dd25197a9d6208a2->leave($__internal_790b5ec99307350404d1c4899e7dad476a9e584c79efcd56dd25197a9d6208a2_prof);

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
", "EcommerceBundle:Default:Type/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Type/modulesUsed/menu.html.twig");
    }
}
