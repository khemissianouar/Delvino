<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_875afb8281962e3514b3f0c1a9a40c0e4852960d09537cf1828f19ebc7203e26 extends Twig_Template
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
        $__internal_8d0a4d0abb0a64d6e71ae6e1cc6892fa881dde3c056c51d3f56fa4b0f9bb8158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0a4d0abb0a64d6e71ae6e1cc6892fa881dde3c056c51d3f56fa4b0f9bb8158->enter($__internal_8d0a4d0abb0a64d6e71ae6e1cc6892fa881dde3c056c51d3f56fa4b0f9bb8158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0a4d0abb0a64d6e71ae6e1cc6892fa881dde3c056c51d3f56fa4b0f9bb8158->leave($__internal_8d0a4d0abb0a64d6e71ae6e1cc6892fa881dde3c056c51d3f56fa4b0f9bb8158_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e091122fcb27e05a6cd9f5cf2cbbc091652cac5cb67ba9a08aff2e2d14f26190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e091122fcb27e05a6cd9f5cf2cbbc091652cac5cb67ba9a08aff2e2d14f26190->enter($__internal_e091122fcb27e05a6cd9f5cf2cbbc091652cac5cb67ba9a08aff2e2d14f26190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e091122fcb27e05a6cd9f5cf2cbbc091652cac5cb67ba9a08aff2e2d14f26190->leave($__internal_e091122fcb27e05a6cd9f5cf2cbbc091652cac5cb67ba9a08aff2e2d14f26190_prof);

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
", "EcommerceBundle:Default:produits/layout/presentation.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
