<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_ecf9f3fe121945994ef739716d1226144e612dfaaf578d965fbfb66fca921710 extends Twig_Template
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
        $__internal_6d74f7607fe445693bf0ff36775ed13007954a10d8358c3f4be4608ef1b0423f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d74f7607fe445693bf0ff36775ed13007954a10d8358c3f4be4608ef1b0423f->enter($__internal_6d74f7607fe445693bf0ff36775ed13007954a10d8358c3f4be4608ef1b0423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "

\t\t\t\t\t\t<div class=\"brands_products\"><!--brands_products-->
\t\t\t\t\t\t\t<h2>Panier</h2>
\t\t\t\t\t\t\t<div class=\"brands-name\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
            
                  <li>
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                            ";
        // line 10
        if (((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 10, $this->getSourceContext()); })()) == 0)) {
            // line 11
            echo "                                Aucun article dans votre panier
                            ";
        } elseif ((        // line 12
(isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 12, $this->getSourceContext()); })()) == 1)) {
            // line 13
            echo "                                1 article dans votre panier
                            ";
        } else {
            // line 15
            echo "                                ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo " articles dans votre panier
                            ";
        }
        // line 17
        echo "                        </a>
                    </li>
                </ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/brands_products-->
";
        
        $__internal_6d74f7607fe445693bf0ff36775ed13007954a10d8358c3f4be4608ef1b0423f->leave($__internal_6d74f7607fe445693bf0ff36775ed13007954a10d8358c3f4be4608ef1b0423f_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  47 => 15,  43 => 13,  41 => 12,  38 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

\t\t\t\t\t\t<div class=\"brands_products\"><!--brands_products-->
\t\t\t\t\t\t\t<h2>Panier</h2>
\t\t\t\t\t\t\t<div class=\"brands-name\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
            
                  <li>
                        <a href=\"{{ path('panier') }}\">
                            {% if articles == 0 %}
                                Aucun article dans votre panier
                            {% elseif articles == 1 %}
                                1 article dans votre panier
                            {% else %}
                                {{ articles }} articles dans votre panier
                            {% endif %}
                        </a>
                    </li>
                </ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/brands_products-->
", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/modulesUsed/panier.html.twig");
    }
}
