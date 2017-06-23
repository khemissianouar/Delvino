<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_66e6a3d1cff4d94ccc08253c67c318d18b60622469f34aeffe97fee718740e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c76c14efa93c32fc2f01627afe2c551eef0f3437e90aeb2813fcac3f1fa33ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76c14efa93c32fc2f01627afe2c551eef0f3437e90aeb2813fcac3f1fa33ffa->enter($__internal_c76c14efa93c32fc2f01627afe2c551eef0f3437e90aeb2813fcac3f1fa33ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c76c14efa93c32fc2f01627afe2c551eef0f3437e90aeb2813fcac3f1fa33ffa->leave($__internal_c76c14efa93c32fc2f01627afe2c551eef0f3437e90aeb2813fcac3f1fa33ffa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_97a8772e64c1556dca8930f20bbfe826ee6b068891943ed6b1702f615d3ac910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a8772e64c1556dca8930f20bbfe826ee6b068891943ed6b1702f615d3ac910->enter($__internal_97a8772e64c1556dca8930f20bbfe826ee6b068891943ed6b1702f615d3ac910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_97a8772e64c1556dca8930f20bbfe826ee6b068891943ed6b1702f615d3ac910->leave($__internal_97a8772e64c1556dca8930f20bbfe826ee6b068891943ed6b1702f615d3ac910_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e210b7b84d96820780c7a0159afcdf277e887e0945778c943ff85f0c4c99287a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e210b7b84d96820780c7a0159afcdf277e887e0945778c943ff85f0c4c99287a->enter($__internal_e210b7b84d96820780c7a0159afcdf277e887e0945778c943ff85f0c4c99287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 9, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e210b7b84d96820780c7a0159afcdf277e887e0945778c943ff85f0c4c99287a->leave($__internal_e210b7b84d96820780c7a0159afcdf277e887e0945778c943ff85f0c4c99287a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8dcfae4d66dccf283399276387d399102aad074fcbf9f2e5ee216a65601117e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcfae4d66dccf283399276387d399102aad074fcbf9f2e5ee216a65601117e5->enter($__internal_8dcfae4d66dccf283399276387d399102aad074fcbf9f2e5ee216a65601117e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8dcfae4d66dccf283399276387d399102aad074fcbf9f2e5ee216a65601117e5->leave($__internal_8dcfae4d66dccf283399276387d399102aad074fcbf9f2e5ee216a65601117e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
