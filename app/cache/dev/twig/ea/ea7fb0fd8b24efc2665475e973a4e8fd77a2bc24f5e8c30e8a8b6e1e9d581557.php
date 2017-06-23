<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1c18da412cfa88ac7fad62f657afe9f02118105716b68801b71ebdfc7ff0f10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_8480b8579cde467b31addda73342bc15df61cb8fef18b26884eb5c28bd79cd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8480b8579cde467b31addda73342bc15df61cb8fef18b26884eb5c28bd79cd86->enter($__internal_8480b8579cde467b31addda73342bc15df61cb8fef18b26884eb5c28bd79cd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8480b8579cde467b31addda73342bc15df61cb8fef18b26884eb5c28bd79cd86->leave($__internal_8480b8579cde467b31addda73342bc15df61cb8fef18b26884eb5c28bd79cd86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d9f31a2306def622af08419a6e9c16ba4198e40a26e0bd1e8bc952f1404fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d9f31a2306def622af08419a6e9c16ba4198e40a26e0bd1e8bc952f1404fa9->enter($__internal_29d9f31a2306def622af08419a6e9c16ba4198e40a26e0bd1e8bc952f1404fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29d9f31a2306def622af08419a6e9c16ba4198e40a26e0bd1e8bc952f1404fa9->leave($__internal_29d9f31a2306def622af08419a6e9c16ba4198e40a26e0bd1e8bc952f1404fa9_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8795048e56cfe43be5f630e53a35c0992cfc2cd4fd1491d6c179ec3fd4c1fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8795048e56cfe43be5f630e53a35c0992cfc2cd4fd1491d6c179ec3fd4c1fba->enter($__internal_c8795048e56cfe43be5f630e53a35c0992cfc2cd4fd1491d6c179ec3fd4c1fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_c8795048e56cfe43be5f630e53a35c0992cfc2cd4fd1491d6c179ec3fd4c1fba->leave($__internal_c8795048e56cfe43be5f630e53a35c0992cfc2cd4fd1491d6c179ec3fd4c1fba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\Delvino\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
