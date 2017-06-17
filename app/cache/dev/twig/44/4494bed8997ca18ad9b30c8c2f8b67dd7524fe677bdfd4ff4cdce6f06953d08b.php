<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_791824ff2b39a4adf59df3a3414ada609c293b0dc9a3bc0fe2910f906feb8108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_8100cef639222a5d461e176e3ea7181b62f01cfb340f24a22aa2e036d92f1b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8100cef639222a5d461e176e3ea7181b62f01cfb340f24a22aa2e036d92f1b30->enter($__internal_8100cef639222a5d461e176e3ea7181b62f01cfb340f24a22aa2e036d92f1b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 7, $this->getSourceContext()); })()), array(("%" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8100cef639222a5d461e176e3ea7181b62f01cfb340f24a22aa2e036d92f1b30->leave($__internal_8100cef639222a5d461e176e3ea7181b62f01cfb340f24a22aa2e036d92f1b30_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c74309705309da88578503e7c951c0df88df69f18325ee4d55bda603ceb388b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c74309705309da88578503e7c951c0df88df69f18325ee4d55bda603ceb388b->enter($__internal_5c74309705309da88578503e7c951c0df88df69f18325ee4d55bda603ceb388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        echo "
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 15
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 15)->display($context);
        // line 16
        echo "        </div>

        <div class=\"span9\">

            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            <h2>Votre panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <tr>Références</tr>
                        <tr>Quantité</tr>
                        <tr>Prix unitaire</tr>
                        <tr>Total HT</tr>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 37, $this->getSourceContext()); })())) == 0)) {
            // line 38
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 42
        echo "
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                    <tr>
                        <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 50, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array"))) {
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
            // line 52
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 56, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>


                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
        echo " €</dd>

                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 70
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 73, $this->getSourceContext()); })()), "html", null, true);
        echo " €</dd>
            </dl>

            <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>

            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
        
        $__internal_5c74309705309da88578503e7c951c0df88df69f18325ee4d55bda603ceb388b->leave($__internal_5c74309705309da88578503e7c951c0df88df69f18325ee4d55bda603ceb388b_prof);

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
        return array (  214 => 78,  209 => 76,  203 => 73,  200 => 72,  189 => 70,  185 => 69,  180 => 67,  173 => 62,  161 => 56,  157 => 55,  152 => 53,  149 => 52,  134 => 50,  130 => 49,  124 => 46,  120 => 45,  117 => 44,  113 => 43,  110 => 42,  104 => 38,  102 => 37,  88 => 25,  79 => 22,  76 => 21,  72 => 20,  66 => 16,  64 => 15,  51 => 10,  44 => 1,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}
{% for produit in produits %}
    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}
{% endfor %}

{% block body %}{{  dump(refTva) }}
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
        </div>

        <div class=\"span9\">

            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            <h2>Votre panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <tr>Références</tr>
                        <tr>Quantité</tr>
                        <tr>Prix unitaire</tr>
                        <tr>Total HT</tr>
                    </tr>
                </thead>
                <tbody>
                    {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}

                    {% for produit in produits %}
                    <tr>
                        <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                            <td>{{ produit.nom }}</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..10 %}
                                        <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * panier[produit.id] }} €</td>
                        </form>
                    </tr>


                  {% endfor %}

                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
            </dl>

            <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>

            <a href=\"{{ path('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
{% endblock %}
", "EcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
