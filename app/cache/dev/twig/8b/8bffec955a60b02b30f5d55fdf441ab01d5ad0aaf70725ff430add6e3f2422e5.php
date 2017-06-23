<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_e9d0264d0b11844a2598da08f864dc3af31892cfa2a064617e8ffca9a98b26e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_da1508b20a91c4f88977261a36f501a932268eed6b7f8679472f10b0b5436932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1508b20a91c4f88977261a36f501a932268eed6b7f8679472f10b0b5436932->enter($__internal_da1508b20a91c4f88977261a36f501a932268eed6b7f8679472f10b0b5436932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1508b20a91c4f88977261a36f501a932268eed6b7f8679472f10b0b5436932->leave($__internal_da1508b20a91c4f88977261a36f501a932268eed6b7f8679472f10b0b5436932_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7079b1303100532a57e17f46f5390f7c56778b197d0d29210f52c21ebb782be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7079b1303100532a57e17f46f5390f7c56778b197d0d29210f52c21ebb782be0->enter($__internal_7079b1303100532a57e17f46f5390f7c56778b197d0d29210f52c21ebb782be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 8)->display($context);
        // line 9
        echo "        </div>

        <div class=\"col-sm-9\">



            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 27, $this->getSourceContext()); })()), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prixHT", array()) * twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 41, $this->getSourceContext()); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 43, $this->getSourceContext()); })()), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 44
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
        // line 46
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->getSourceContext()); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
            </dl>

            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 53, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 53, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 54, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->getSourceContext()); })()), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>

            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 62, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 62, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 64, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 64, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 64, $this->getSourceContext()); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>

            <div class=\"clearfix\"></div>

            <form action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationCommande", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 70, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 71, $this->getSourceContext()); })()), "commande", array()), "token", array()), "html", null, true);
        echo "\" />
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 72, $this->getSourceContext()); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 73, $this->getSourceContext()); })()), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
            </form>

            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
        
        $__internal_7079b1303100532a57e17f46f5390f7c56778b197d0d29210f52c21ebb782be0->leave($__internal_7079b1303100532a57e17f46f5390f7c56778b197d0d29210f52c21ebb782be0_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 77,  195 => 73,  191 => 72,  187 => 71,  183 => 70,  170 => 64,  166 => 63,  160 => 62,  146 => 55,  142 => 54,  136 => 53,  127 => 47,  124 => 46,  113 => 44,  109 => 43,  104 => 41,  98 => 37,  89 => 34,  85 => 33,  80 => 31,  75 => 29,  72 => 28,  68 => 27,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-3\">
            {% include '::modulesUsed/navigation.html.twig' %}
        </div>

        <div class=\"col-sm-9\">



            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>

                    {% for produit in commande.commande.produit %}
                    <tr>
                        <td>{{ produit.reference }}</td>
                        <td>
                            {{ produit.quantite }}
                        </td>
                        <td>{{ produit.prixHT }} €</td>
                        <td>{{ produit.prixHT * produit.quantite }} €</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} €</dd>

                {% for key, tva in commande.commande.tva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ commande.commande.prixTTC }} €</dd>
            </dl>

            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
                    <dt>{{ commande.commande.livraison.adresse }}</dt>
                    <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
                </dl>
            </div>

            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
                    <dt>{{ commande.commande.facturation.adresse }}</dt>
                    <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
                </dl>
            </div>

            <div class=\"clearfix\"></div>

            <form action=\"{{ path('validationCommande', { 'id' : commande.id }) }}\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"{{ commande.commande.token }}\" />
                <input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixTTC }}\" />
                <input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmyhms') }}\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
            </form>

            <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
{% endblock %}
", "EcommerceBundle:Default:panier/layout/validation.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/validation.html.twig");
    }
}
