<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_e945cab6092fe47d2789144e10c52803b6fbd14078188d7cf7f32b722c114999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dccb31546944057f7e7fcda2541d095b6c4c2537c2d1e911bab4e2d4a9086e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccb31546944057f7e7fcda2541d095b6c4c2537c2d1e911bab4e2d4a9086e54->enter($__internal_dccb31546944057f7e7fcda2541d095b6c4c2537c2d1e911bab4e2d4a9086e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dccb31546944057f7e7fcda2541d095b6c4c2537c2d1e911bab4e2d4a9086e54->leave($__internal_dccb31546944057f7e7fcda2541d095b6c4c2537c2d1e911bab4e2d4a9086e54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12ebd2370e00caf318fd918b175819d305f5c190b4766a850c17ed0412606de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12ebd2370e00caf318fd918b175819d305f5c190b4766a850c17ed0412606de->enter($__internal_e12ebd2370e00caf318fd918b175819d305f5c190b4766a850c17ed0412606de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

        <div class=\"span3\">
            ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 7)->display($context);
        // line 8
        echo "        </div>

<div class=\"container\">

<div class=\"span9\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
            echo "\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()), "path", array()), "html", null, true);
            echo " alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo " €</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo " €</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-plus-square\"></i>Plus d'infos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\"><i class=\"fa fa-plus-square\"></i>Ajouter au panier</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>

\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"\">1</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">2</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">3</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">&raquo;</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t</div>
";
        
        $__internal_e12ebd2370e00caf318fd918b175819d305f5c190b4766a850c17ed0412606de->leave($__internal_e12ebd2370e00caf318fd918b175819d305f5c190b4766a850c17ed0412606de_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  97 => 36,  93 => 35,  84 => 29,  79 => 27,  70 => 21,  66 => 20,  60 => 16,  56 => 15,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}


        <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
        </div>

<div class=\"container\">

<div class=\"span9\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
            {% for produit in produits %}
\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src={{ produit.image.path}} alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>{{ produit.prix}} €</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>{{ produit.prix}} €</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ajouter', { 'id' : produit.id }) }}\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('presentation', { 'id' : produit.id }) }}\"><i class=\"fa fa-plus-square\"></i>Plus d'infos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('panier') }}\"><i class=\"fa fa-plus-square\"></i>Ajouter au panier</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            {% endfor %}
\t\t\t</div>

\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"\">1</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">2</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">3</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">&raquo;</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t</div>
{% endblock %}
", "EcommerceBundle:Default:produits/layout/produits.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}
