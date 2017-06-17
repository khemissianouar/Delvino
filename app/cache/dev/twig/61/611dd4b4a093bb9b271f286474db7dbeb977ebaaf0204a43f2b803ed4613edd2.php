<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_18e57d5ecf9f0e8c0fdc6a3c6d80bad22aa0cef57574c9dc82856d3efc306dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0987498496e8aedc221d4940f21f54861e593f80b065cbda8c095e1c2607bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0987498496e8aedc221d4940f21f54861e593f80b065cbda8c095e1c2607bf7->enter($__internal_b0987498496e8aedc221d4940f21f54861e593f80b065cbda8c095e1c2607bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0987498496e8aedc221d4940f21f54861e593f80b065cbda8c095e1c2607bf7->leave($__internal_b0987498496e8aedc221d4940f21f54861e593f80b065cbda8c095e1c2607bf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56138f911f553c251f3594752ca4f1866aef53033a24bcea2e0ed718f363e4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56138f911f553c251f3594752ca4f1866aef53033a24bcea2e0ed718f363e4c7->enter($__internal_56138f911f553c251f3594752ca4f1866aef53033a24bcea2e0ed718f363e4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56138f911f553c251f3594752ca4f1866aef53033a24bcea2e0ed718f363e4c7->leave($__internal_56138f911f553c251f3594752ca4f1866aef53033a24bcea2e0ed718f363e4c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b396131326ab27460620ebce77128618d9787f31253689643245368aee39d4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396131326ab27460620ebce77128618d9787f31253689643245368aee39d4cb->enter($__internal_b396131326ab27460620ebce77128618d9787f31253689643245368aee39d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b396131326ab27460620ebce77128618d9787f31253689643245368aee39d4cb->leave($__internal_b396131326ab27460620ebce77128618d9787f31253689643245368aee39d4cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_600bdcb015bfe407d533340350fa2e0fcf4760455e5b5a894de0bd4894f0ab16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600bdcb015bfe407d533340350fa2e0fcf4760455e5b5a894de0bd4894f0ab16->enter($__internal_600bdcb015bfe407d533340350fa2e0fcf4760455e5b5a894de0bd4894f0ab16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_600bdcb015bfe407d533340350fa2e0fcf4760455e5b5a894de0bd4894f0ab16->leave($__internal_600bdcb015bfe407d533340350fa2e0fcf4760455e5b5a894de0bd4894f0ab16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Delvino5\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
