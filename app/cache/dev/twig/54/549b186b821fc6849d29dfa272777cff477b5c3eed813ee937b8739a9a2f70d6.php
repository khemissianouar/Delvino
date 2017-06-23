<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_e6fd20307f9f2882a8dfc6c52a977cc51c406289ab6d3c49f707771870b3905b extends Twig_Template
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
        $__internal_2c1342bbe9a8e97c58fe10cb24b5c175f9d8305323924d708c1d5fed2bff5a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1342bbe9a8e97c58fe10cb24b5c175f9d8305323924d708c1d5fed2bff5a20->enter($__internal_2c1342bbe9a8e97c58fe10cb24b5c175f9d8305323924d708c1d5fed2bff5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1342bbe9a8e97c58fe10cb24b5c175f9d8305323924d708c1d5fed2bff5a20->leave($__internal_2c1342bbe9a8e97c58fe10cb24b5c175f9d8305323924d708c1d5fed2bff5a20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ba06dddf48b460f969317030657a0a78754cfc72d92382428c1cc85161d5dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba06dddf48b460f969317030657a0a78754cfc72d92382428c1cc85161d5dfd->enter($__internal_1ba06dddf48b460f969317030657a0a78754cfc72d92382428c1cc85161d5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <div class=\"left-sidebar\">
        ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "            ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 10)->display($context);
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 12)->display($context);
            // line 13
            echo "        ";
        }
        // line 14
        echo "        ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 15
        echo "    </div>
    </div>

<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()), "path", array()), "html", null, true);
            echo " alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo " €</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo " €</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-plus-square\"></i>Plus d'infos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
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
        // line 48
        echo "\t\t\t</div>

\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"\">1</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">2</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">3</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">&raquo;</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t</div>
        </div>
        </div>
";
        
        $__internal_1ba06dddf48b460f969317030657a0a78754cfc72d92382428c1cc85161d5dfd->leave($__internal_1ba06dddf48b460f969317030657a0a78754cfc72d92382428c1cc85161d5dfd_prof);

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
        return array (  127 => 48,  115 => 42,  111 => 41,  102 => 35,  97 => 33,  88 => 27,  84 => 26,  78 => 22,  74 => 21,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <div class=\"left-sidebar\">
        {% include '::modulesUsed/navigation.html.twig' %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
        {% else %}
            {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}
        {% endif %}
        {% render(controller('EcommerceBundle:Panier:menu')) %}
    </div>
    </div>

<div class=\"col-sm-9\">
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
        </div>
        </div>
{% endblock %}
", "EcommerceBundle:Default:produits/layout/produits.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}
