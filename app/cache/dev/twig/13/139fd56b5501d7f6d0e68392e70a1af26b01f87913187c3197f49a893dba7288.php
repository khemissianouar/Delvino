<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_975ba3a9c4df95ce39d79183da13cb6336627165207339466cee1e907de9bd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_79c6e69ca02316cf1ee3830c32f4861981c5bb6c4c2051f8e445089498439717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c6e69ca02316cf1ee3830c32f4861981c5bb6c4c2051f8e445089498439717->enter($__internal_79c6e69ca02316cf1ee3830c32f4861981c5bb6c4c2051f8e445089498439717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c6e69ca02316cf1ee3830c32f4861981c5bb6c4c2051f8e445089498439717->leave($__internal_79c6e69ca02316cf1ee3830c32f4861981c5bb6c4c2051f8e445089498439717_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f984ade4d7807e65bb7da07b9817e474d8278fd46439cc18263f10557490006e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f984ade4d7807e65bb7da07b9817e474d8278fd46439cc18263f10557490006e->enter($__internal_f984ade4d7807e65bb7da07b9817e474d8278fd46439cc18263f10557490006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 11, $this->getSourceContext()); })()), "adresses", array())) != 0)) {
            // line 12
            echo "                        <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">

                            <h4>Adresse de livraison</h4>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 15, $this->getSourceContext()); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 16
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonAdresseSuppression", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
                            <br /><br />

                            <h4>Adresse de facturation</h4>
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 26, $this->getSourceContext()); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 27
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonAdresseSuppression", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
                            <br />

                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        ";
        }
        // line 39
        echo "                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form action=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" method=\"POST\">
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'widget');
        echo "
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_f984ade4d7807e65bb7da07b9817e474d8278fd46439cc18263f10557490006e->leave($__internal_f984ade4d7807e65bb7da07b9817e474d8278fd46439cc18263f10557490006e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 45,  197 => 44,  190 => 39,  182 => 33,  163 => 30,  151 => 29,  143 => 28,  140 => 27,  123 => 26,  117 => 22,  98 => 19,  86 => 18,  78 => 17,  75 => 16,  58 => 15,  51 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        {% if utilisateur.adresses|length != 0 %}
                        <form action=\"{{ path('validation') }}\" method=\"POST\">

                            <h4>Adresse de livraison</h4>
                            {% for adresse in utilisateur.adresses %}
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href=\"{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}
                            </label>
                            {% endfor %}

                            <br /><br />

                            <h4>Adresse de facturation</h4>
                            {% for adresse in utilisateur.adresses %}
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href=\"{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}
                            </label>
                            {% endfor %}

                            <br />

                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        {% endif %}
                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form action=\"{{ path('livraison') }}\" method=\"POST\">
                            {{ form_widget(form) }}
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "EcommerceBundle:Default:panier/layout/livraison.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/livraison.html.twig");
    }
}
