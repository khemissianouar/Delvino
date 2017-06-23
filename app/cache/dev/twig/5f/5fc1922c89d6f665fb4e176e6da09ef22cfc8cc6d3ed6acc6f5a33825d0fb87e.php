<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_5f76a045dec1eba2e1df8e0a9ee3e7722a5dc138b8034168943eba5269f50007 extends Twig_Template
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
        $__internal_695872aff8bbd31901989697b8da46d7ed54bf9af1b94b61a85345d5f3bccf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695872aff8bbd31901989697b8da46d7ed54bf9af1b94b61a85345d5f3bccf4a->enter($__internal_695872aff8bbd31901989697b8da46d7ed54bf9af1b94b61a85345d5f3bccf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>
";
        
        $__internal_695872aff8bbd31901989697b8da46d7ed54bf9af1b94b61a85345d5f3bccf4a->leave($__internal_695872aff8bbd31901989697b8da46d7ed54bf9af1b94b61a85345d5f3bccf4a_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
        </li>
    </ul>
</div>
", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateurs.html.twig");
    }
}
