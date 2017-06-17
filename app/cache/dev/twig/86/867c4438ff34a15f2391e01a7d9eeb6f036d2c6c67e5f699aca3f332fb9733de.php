<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_26b4695189a8dd229d240057ec9f6f72a7c68abe1db39f4be4e327b0e42db587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d56db22231294db73118205162206c2838b382874f74a22359a8e16a509cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d56db22231294db73118205162206c2838b382874f74a22359a8e16a509cc7c->enter($__internal_0d56db22231294db73118205162206c2838b382874f74a22359a8e16a509cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d56db22231294db73118205162206c2838b382874f74a22359a8e16a509cc7c->leave($__internal_0d56db22231294db73118205162206c2838b382874f74a22359a8e16a509cc7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ff458d87737982819c2dacacc4235043959e481443a537a156e5bff7f7e1425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff458d87737982819c2dacacc4235043959e481443a537a156e5bff7f7e1425->enter($__internal_0ff458d87737982819c2dacacc4235043959e481443a537a156e5bff7f7e1425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_0ff458d87737982819c2dacacc4235043959e481443a537a156e5bff7f7e1425->leave($__internal_0ff458d87737982819c2dacacc4235043959e481443a537a156e5bff7f7e1425_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77c0a69aa45bcc785f9a84b301dcfae73b0e2fac4f9f276de7451b9406746fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c0a69aa45bcc785f9a84b301dcfae73b0e2fac4f9f276de7451b9406746fcb->enter($__internal_77c0a69aa45bcc785f9a84b301dcfae73b0e2fac4f9f276de7451b9406746fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_77c0a69aa45bcc785f9a84b301dcfae73b0e2fac4f9f276de7451b9406746fcb->leave($__internal_77c0a69aa45bcc785f9a84b301dcfae73b0e2fac4f9f276de7451b9406746fcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
