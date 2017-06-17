<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_df9f149fc3958634a1e2e9720fa0d9d925cd537b74d5aba171383db06c39cdb0 extends Twig_Template
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
        $__internal_05d2ff88a470bbd79fd0fcea0eec06694012ad54f1073b932f89bd044b8083ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d2ff88a470bbd79fd0fcea0eec06694012ad54f1073b932f89bd044b8083ef->enter($__internal_05d2ff88a470bbd79fd0fcea0eec06694012ad54f1073b932f89bd044b8083ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

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
        
        $__internal_05d2ff88a470bbd79fd0fcea0eec06694012ad54f1073b932f89bd044b8083ef->leave($__internal_05d2ff88a470bbd79fd0fcea0eec06694012ad54f1073b932f89bd044b8083ef_prof);

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
", "PagesBundle:Default:pages/modulesUsed/menu.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Pages\\PagesBundle/Resources/views/Default/pages/modulesUsed/menu.html.twig");
    }
}
