<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_1d434f46528e8d4ce60f1d40c818263261c58a6e08df139a0ce73aa976599871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 2);
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
        $__internal_8fa92e0664c5379ad60c6c48272fb39bc44cda7b7ae79623b55559598dd0dd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa92e0664c5379ad60c6c48272fb39bc44cda7b7ae79623b55559598dd0dd59->enter($__internal_8fa92e0664c5379ad60c6c48272fb39bc44cda7b7ae79623b55559598dd0dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 4
        $context["totalHT"] = 0;
        // line 5
        $context["totalTTC"] = 0;
        // line 6
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 8, $this->getSourceContext()); })()), array(("%" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa92e0664c5379ad60c6c48272fb39bc44cda7b7ae79623b55559598dd0dd59->leave($__internal_8fa92e0664c5379ad60c6c48272fb39bc44cda7b7ae79623b55559598dd0dd59_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb907c7dacce1921fdc0964731f813d717d1bbb361fbbf7a86d84792e3447cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb907c7dacce1921fdc0964731f813d717d1bbb361fbbf7a86d84792e3447cb->enter($__internal_0eb907c7dacce1921fdc0964731f813d717d1bbb361fbbf7a86d84792e3447cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 11, $this->getSourceContext()); })())), "html", null, true);
        echo "





<div class=\"container\">



<section id=\"cart_items\">
      <div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t  <li><a href=\"#\">Accueil</a></li>
\t\t\t\t  <li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "              <div class=\"alert alert-success\">
                  ";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\"></td>
\t\t\t\t\t\t\t<td class=\"price\">Price</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantity</td>
\t\t\t\t\t\t\t<td class=\"total\">Total</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

                 ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 48, $this->getSourceContext()); })())) == 0)) {
            // line 49
            echo "              <tr>
                  <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
              </tr>
          ";
        }
        // line 53
        echo "
          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 55
            echo "          <tr>
              <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
               <td class=\"cart_product\">

\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" width=\"150px\" heigth=\"150px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t<p>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
              <div class=\"cart_quantity_button\">
              <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                  ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 72, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "              </select>&nbsp;
              </div>


\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">";
            // line 80
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 80, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</td>
              </form>
                </tr>
                ";
            // line 87
            $context["totalHT"] = ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 87, $this->getSourceContext()); })()) + (twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 87, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array")));
            // line 88
            echo "                                  ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 88, $this->getSourceContext()); })()) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva((twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 88, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "multiplicate", array())));
            // line 89
            echo "                                  ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 89, $this->getSourceContext()); })()), array(("%" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "valeur", array())) => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 89, $this->getSourceContext()); })()), ("%" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva((twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 89, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "multiplicate", array())))));
            // line 90
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
            </tbody>
    \t\t\t\t</table>
    \t\t\t</div>
    \t\t</div>
    \t</section>

";
        // line 99
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 99, $this->getSourceContext()); })())) != 0)) {
            // line 100
            echo "      <div class=\"col-sm-6\">
  \t\t\t\t\t<div class=\"total_area\">
  \t\t\t\t\t\t<ul>
  \t\t\t\t\t\t\t<li>Total HT :  <span>";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 103, $this->getSourceContext()); })()), "html", null, true);
            echo " €</span></li>
";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 104, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 105
                echo "                <li>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :<span>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "  \t\t\t\t\t\t\t<li>Total TTC :<span>";
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 107, $this->getSourceContext()); })()), "html", null, true);
            echo " €</span></li>
";
        }
        // line 109
        echo "
  \t\t\t\t\t\t</ul>
              <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-default update\">Valider mon panier</a>
              <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"btn btn-default check_out\">Continuer mes achats</a>
  \t\t\t\t\t\t
  \t\t\t\t\t</div>
  \t\t\t\t</div>



       </div>
</div>
</div>
";
        
        $__internal_0eb907c7dacce1921fdc0964731f813d717d1bbb361fbbf7a86d84792e3447cb->leave($__internal_0eb907c7dacce1921fdc0964731f813d717d1bbb361fbbf7a86d84792e3447cb_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 112,  257 => 111,  253 => 109,  247 => 107,  236 => 105,  232 => 104,  228 => 103,  223 => 100,  221 => 99,  212 => 92,  205 => 90,  202 => 89,  199 => 88,  197 => 87,  190 => 83,  184 => 80,  176 => 74,  161 => 72,  157 => 71,  149 => 66,  143 => 63,  139 => 62,  133 => 59,  127 => 56,  124 => 55,  120 => 54,  117 => 53,  111 => 49,  109 => 48,  93 => 34,  84 => 31,  81 => 30,  77 => 29,  51 => 11,  44 => 2,  38 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::layout/layout.html.twig\" %}

{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}
{% for produit in produits %}
    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}
{% endfor %}

{% block body %}{{  dump(refTva) }}





<div class=\"container\">



<section id=\"cart_items\">
      <div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t  <li><a href=\"#\">Accueil</a></li>
\t\t\t\t  <li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>
      {% for flashMessage in app.session.flashbag.get('success') %}
              <div class=\"alert alert-success\">
                  {{ flashMessage }}
              </div>
          {% endfor %}
\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\"></td>
\t\t\t\t\t\t\t<td class=\"price\">Price</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantity</td>
\t\t\t\t\t\t\t<td class=\"total\">Total</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

                 {% if produits|length == 0 %}
              <tr>
                  <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
              </tr>
          {% endif %}

          {% for produit in produits %}
          <tr>
              <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
               <td class=\"cart_product\">

\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"{{ produit.image.path }}\" width=\"150px\" heigth=\"150px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"\">{{ produit.nom }}</a></h4>
\t\t\t\t\t\t\t\t<p>{{ produit.description }}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>{{ produit.prix }}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
              <div class=\"cart_quantity_button\">
              <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                  {% for i in 1..10 %}
                      <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                  {% endfor %}
              </select>&nbsp;
              </div>


\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">{{ produit.prix * panier[produit.id] }} €</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</td>
              </form>
                </tr>
                {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                                  {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}
                                  {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : refTva['%' ~ produit.tva.valeur] + ( produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate) }) %}

              {% endfor %}

            </tbody>
    \t\t\t\t</table>
    \t\t\t</div>
    \t\t</div>
    \t</section>

{% if produits|length != 0 %}
      <div class=\"col-sm-6\">
  \t\t\t\t\t<div class=\"total_area\">
  \t\t\t\t\t\t<ul>
  \t\t\t\t\t\t\t<li>Total HT :  <span>{{ totalHT }} €</span></li>
{% for key, tva in refTva %}
                <li>TVA {{ key }} :<span>{{ tva }} €</span></li>
                {% endfor %}
  \t\t\t\t\t\t\t<li>Total TTC :<span>{{ totalTTC }} €</span></li>
{% endif %}

  \t\t\t\t\t\t</ul>
              <a href=\"{{ path('livraison') }}\" class=\"btn btn-default update\">Valider mon panier</a>
              <a href=\"{{ path('produits') }}\" class=\"btn btn-default check_out\">Continuer mes achats</a>
  \t\t\t\t\t\t
  \t\t\t\t\t</div>
  \t\t\t\t</div>



       </div>
</div>
</div>
{% endblock %}
", "EcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
