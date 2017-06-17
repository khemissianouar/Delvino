<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_35bf052f6345b6015a7d04908394eb49ca350da8115143c6b1377310ac1a9211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcce3ec8506db8367518ec999816ceb738a8f3a9cb2dca4ef909c7941a08863a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcce3ec8506db8367518ec999816ceb738a8f3a9cb2dca4ef909c7941a08863a->enter($__internal_dcce3ec8506db8367518ec999816ceb738a8f3a9cb2dca4ef909c7941a08863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcce3ec8506db8367518ec999816ceb738a8f3a9cb2dca4ef909c7941a08863a->leave($__internal_dcce3ec8506db8367518ec999816ceb738a8f3a9cb2dca4ef909c7941a08863a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2808f519939e5456b151a901c8ea3c701e862f1b8b851c82f04825066688fc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2808f519939e5456b151a901c8ea3c701e862f1b8b851c82f04825066688fc91->enter($__internal_2808f519939e5456b151a901c8ea3c701e862f1b8b851c82f04825066688fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\">


<section id=\"form\"><!--form-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-1\">
\t\t\t\t\t<div class=\"login-form\"><!--login form-->
\t\t\t\t\t\t<h2>Connexion</h2>
\t\t\t\t\t\t<form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

      <label for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Non\" />
  <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" />
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox\">
\t\t\t\t\t\t\t\tKeep me signed in
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</form>
            <div class=\"span10\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
            </div>
\t\t\t\t\t</div><!--/login form-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t<h2 class=\"or\">OU</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"signup-form\"><!--sign up form-->
\t\t\t\t\t\t<h2>Pas encore inscrit </h2>

          
\t\t\t\t\t</div><!--/sign up form-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/form-->
";
        
        $__internal_2808f519939e5456b151a901c8ea3c701e862f1b8b851c82f04825066688fc91->leave($__internal_2808f519939e5456b151a901c8ea3c701e862f1b8b851c82f04825066688fc91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  82 => 29,  73 => 23,  68 => 21,  63 => 19,  59 => 18,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error|trans }}</div>
{% endif %}
<div class=\"row\">


<section id=\"form\"><!--form-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-1\">
\t\t\t\t\t<div class=\"login-form\"><!--login form-->
\t\t\t\t\t\t<h2>Connexion</h2>
\t\t\t\t\t\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

      <label for=\"username\">{{ 'security.login.username'|trans }}</label>
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Non\" />
  <label for=\"username\">{{ 'security.login.password'|trans }}</label>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" />
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox\">
\t\t\t\t\t\t\t\tKeep me signed in
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">{{ 'security.login.submit'|trans }}</button>
\t\t\t\t\t\t</form>
            <div class=\"span10\">
                <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
            </div>
\t\t\t\t\t</div><!--/login form-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t<h2 class=\"or\">OU</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"signup-form\"><!--sign up form-->
\t\t\t\t\t\t<h2>Pas encore inscrit </h2>

          
\t\t\t\t\t</div><!--/sign up form-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/form-->
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
