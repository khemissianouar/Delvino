<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_4469e17ade6eab99584940ce94807b0fdd925cab9bf51795e438e7127ec97e63 extends Twig_Template
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
        $__internal_20a8d27341dee403cf3e6063e627d6eee2b8a8253cb92981b8c03de2ccbb7af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a8d27341dee403cf3e6063e627d6eee2b8a8253cb92981b8c03de2ccbb7af8->enter($__internal_20a8d27341dee403cf3e6063e627d6eee2b8a8253cb92981b8c03de2ccbb7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "titre", array()), "html", null, true);
            echo "</a></li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_20a8d27341dee403cf3e6063e627d6eee2b8a8253cb92981b8c03de2ccbb7af8->leave($__internal_20a8d27341dee403cf3e6063e627d6eee2b8a8253cb92981b8c03de2ccbb7af8_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for page in pages %}
<li><a href=\"{{path('page',{'id':page.id})}}\">{{ page.titre}}</a></li>

{% endfor %}
", "PagesBundle:Default:pages/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Pages\\PagesBundle/Resources/views/Default/pages/modulesUsed/menu.html.twig");
    }
}
