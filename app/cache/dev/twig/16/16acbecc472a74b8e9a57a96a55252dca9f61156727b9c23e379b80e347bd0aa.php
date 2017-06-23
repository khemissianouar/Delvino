<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_4a24142116cb09e85f631d70f1b0738af4c08ff1f6b32433dd6f9a53f8304cb8 extends Twig_Template
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
        $__internal_180d82c7a48352d02e28ccf8a871527930c36fb184f20e66d2234805f287a6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180d82c7a48352d02e28ccf8a871527930c36fb184f20e66d2234805f287a6f2->enter($__internal_180d82c7a48352d02e28ccf8a871527930c36fb184f20e66d2234805f287a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "recherche", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
</form>";
        
        $__internal_180d82c7a48352d02e28ccf8a871527930c36fb184f20e66d2234805f287a6f2->leave($__internal_180d82c7a48352d02e28ccf8a871527930c36fb184f20e66d2234805f287a6f2_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('rechercheProduits') }}\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    {{ form_widget(form.recherche) }}
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    {{ form_widget(form) }}
</form>", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Recherche/modulesUsed/recherche.html.twig");
    }
}
