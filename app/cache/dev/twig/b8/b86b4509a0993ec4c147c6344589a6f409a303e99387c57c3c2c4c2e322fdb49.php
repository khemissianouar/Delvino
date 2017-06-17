<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_4ad89704c5ec2b1d6cbe05c575bfcee714210cc0f6d17a22e95c0bff81d62ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
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
        $__internal_474523f3d1ed43559d8000a47d05b2da8b8928fc100082796daaa6b4c9efddec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474523f3d1ed43559d8000a47d05b2da8b8928fc100082796daaa6b4c9efddec->enter($__internal_474523f3d1ed43559d8000a47d05b2da8b8928fc100082796daaa6b4c9efddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474523f3d1ed43559d8000a47d05b2da8b8928fc100082796daaa6b4c9efddec->leave($__internal_474523f3d1ed43559d8000a47d05b2da8b8928fc100082796daaa6b4c9efddec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1780e86157e875faff0b689581098a9a466db81d08ad30b4341a0a42c7e1e3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1780e86157e875faff0b689581098a9a466db81d08ad30b4341a0a42c7e1e3d6->enter($__internal_1780e86157e875faff0b689581098a9a466db81d08ad30b4341a0a42c7e1e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">


                        <div class=\"span9\">
                           <div class=\"row\">
                                <div class=\"span5\">
                                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 12, $this->getSourceContext()); })()), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"\" width=\"470\" height=\"310\">
                                </div>

                                <div class=\"span4\">
                                    <h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 16, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</h4>
                                    <h4> type</h4>
                                    <h5>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 18, $this->getSourceContext()); })()), "type", array()), "nom", array()), "html", null, true);
        echo "</h5>
                                    <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 19, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>
                                    <h4>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 20, $this->getSourceContext()); })()), "prix", array()), "html", null, true);
        echo "€</h4>
                                    ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["panier"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), array(), "array", true, true)) {
            // line 22
            echo "                      <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 22, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                          <select name=\"qte\" class=\"span1\">
                              ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                                  <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                          </select>

                                        <div>
                                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                                        </div>
                                    </form>
                                    ";
        } else {
            // line 34
            echo "                                    <div>
                                        <a heref=\"\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\"\" class=\"btn btn-primary\">le produit est déja dans votre panier</a>
                                    </div>
                                        ";
        }
        // line 38
        echo "                                    </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
";
        
        $__internal_1780e86157e875faff0b689581098a9a466db81d08ad30b4341a0a42c7e1e3d6->leave($__internal_1780e86157e875faff0b689581098a9a466db81d08ad30b4341a0a42c7e1e3d6_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  109 => 35,  106 => 34,  97 => 27,  86 => 25,  82 => 24,  76 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">


                        <div class=\"span9\">
                           <div class=\"row\">
                                <div class=\"span5\">
                                    <img src=\"{{ produit.image.path }}\" alt=\"\" width=\"470\" height=\"310\">
                                </div>

                                <div class=\"span4\">
                                    <h4>{{ produit.nom }}</h4>
                                    <h4> type</h4>
                                    <h5>{{ produit.type.nom }}</h5>
                                    <p>{{ produit.description }}</p>
                                    <h4>{{ produit.prix }}€</h4>
                                    {% if panier[produit.id] is not defined %}
                      <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                          <select name=\"qte\" class=\"span1\">
                              {% for i in 1..10 %}
                                  <option value=\"{{ i }}\">{{ i }}</option>
                              {% endfor %}
                          </select>

                                        <div>
                                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                                        </div>
                                    </form>
                                    {% else %}
                                    <div>
                                        <a heref=\"\"{{ path('panier') }}\"\" class=\"btn btn-primary\">le produit est déja dans votre panier</a>
                                    </div>
                                        {% endif %}
                                    </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
{% endblock %}
", "EcommerceBundle:Default:produits/layout/presentation.html.twig", "C:\\xampp\\htdocs\\Delvino5\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
