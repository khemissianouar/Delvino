<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_48c77418ff9cdc8f99f98b945ea71112db474f9a9a2594fb7f508f39ce7d8a80 extends Twig_Template
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
        $__internal_e873c78d0d90d292d967b7c1b5ca3144e2e9a80cc5e049c56cb4338f5d1063c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e873c78d0d90d292d967b7c1b5ca3144e2e9a80cc5e049c56cb4338f5d1063c5->enter($__internal_e873c78d0d90d292d967b7c1b5ca3144e2e9a80cc5e049c56cb4338f5d1063c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div calss=\"clo\">
<div class=\"brands_products\"><!--brands_products-->
            <h2>Compte</h2>
            <div class=\"brands-name\">
              <ul class=\"nav nav-pills nav-stacked\">

                  <li>
                      <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
                  </li>
                  <li>
                      <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
                  </li>
                  <li>
                      <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
                  </li>
                  <li>
                      <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factures");
        echo "\">Mes factures</a>
                  </li>
                  <li>
                      <a href=\"#\">Mes adresses</a>
                  </li>
                  <li>
                      <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
                  </li>
              </ul>
            </div>
          </div><!--/brands_products-->
</div>
";
        
        $__internal_e873c78d0d90d292d967b7c1b5ca3144e2e9a80cc5e049c56cb4338f5d1063c5->leave($__internal_e873c78d0d90d292d967b7c1b5ca3144e2e9a80cc5e049c56cb4338f5d1063c5_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  49 => 17,  43 => 14,  37 => 11,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div calss=\"clo\">
<div class=\"brands_products\"><!--brands_products-->
            <h2>Compte</h2>
            <div class=\"brands-name\">
              <ul class=\"nav nav-pills nav-stacked\">

                  <li>
                      <a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a>
                  </li>
                  <li>
                      <a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a>
                  </li>
                  <li>
                      <a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a>
                  </li>
                  <li>
                      <a href=\"{{ path('factures') }}\">Mes factures</a>
                  </li>
                  <li>
                      <a href=\"#\">Mes adresses</a>
                  </li>
                  <li>
                      <a href=\"{{ path('fos_user_security_logout') }}\">deconnexion</a>
                  </li>
              </ul>
            </div>
          </div><!--/brands_products-->
</div>
", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "C:\\xampp\\htdocs\\Delvino\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateursConnecte.html.twig");
    }
}
