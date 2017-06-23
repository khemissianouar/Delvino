<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_301d670036d1f1cb9f6a1964dd4c5797bd0cb7cf21a98842e5610319305d1ac3 extends Twig_Template
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
        $__internal_ecfdb5a53be3a68d1b56bf6bec575293501ee7dc6053d605072a434e3f4b2558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfdb5a53be3a68d1b56bf6bec575293501ee7dc6053d605072a434e3f4b2558->enter($__internal_ecfdb5a53be3a68d1b56bf6bec575293501ee7dc6053d605072a434e3f4b2558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-sm-3\">
        ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>

    <div class=\"col-sm-9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"fos_user_user_show\">

</div>
";
        
        $__internal_ecfdb5a53be3a68d1b56bf6bec575293501ee7dc6053d605072a434e3f4b2558->leave($__internal_ecfdb5a53be3a68d1b56bf6bec575293501ee7dc6053d605072a434e3f4b2558_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  38 => 13,  29 => 6,  27 => 5,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"col-sm-3\">
        {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
    </div>

    <div class=\"col-sm-9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
                    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"fos_user_user_show\">

</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\Delvino\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
