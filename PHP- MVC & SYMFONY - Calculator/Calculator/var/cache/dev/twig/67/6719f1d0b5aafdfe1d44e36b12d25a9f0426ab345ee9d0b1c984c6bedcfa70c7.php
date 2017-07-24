<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e483c8344e968d235981bdd41ae75f9676d75508c62c04a9dad22e57bfb19ad extends Twig_Template
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
        $__internal_5bdca4669240dbc7711539832159822cce301072190152e256416053620deddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdca4669240dbc7711539832159822cce301072190152e256416053620deddf->enter($__internal_5bdca4669240dbc7711539832159822cce301072190152e256416053620deddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bdca4669240dbc7711539832159822cce301072190152e256416053620deddf->leave($__internal_5bdca4669240dbc7711539832159822cce301072190152e256416053620deddf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c75d3ce3b37fd6eb4d2d3e0a8c64f58cf9eaca942585558d5f71e61a76476e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c75d3ce3b37fd6eb4d2d3e0a8c64f58cf9eaca942585558d5f71e61a76476e9->enter($__internal_8c75d3ce3b37fd6eb4d2d3e0a8c64f58cf9eaca942585558d5f71e61a76476e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c75d3ce3b37fd6eb4d2d3e0a8c64f58cf9eaca942585558d5f71e61a76476e9->leave($__internal_8c75d3ce3b37fd6eb4d2d3e0a8c64f58cf9eaca942585558d5f71e61a76476e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b020230f0b6da6f23186bc7c2f1d601c80a013cb9c7cb5a462524c9bd0e9b590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b020230f0b6da6f23186bc7c2f1d601c80a013cb9c7cb5a462524c9bd0e9b590->enter($__internal_b020230f0b6da6f23186bc7c2f1d601c80a013cb9c7cb5a462524c9bd0e9b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b020230f0b6da6f23186bc7c2f1d601c80a013cb9c7cb5a462524c9bd0e9b590->leave($__internal_b020230f0b6da6f23186bc7c2f1d601c80a013cb9c7cb5a462524c9bd0e9b590_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc963e955177a58f3d8ea3a7afd8a3a8cf3d8b7ac8cc3cfce7acb26a83ccec44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc963e955177a58f3d8ea3a7afd8a3a8cf3d8b7ac8cc3cfce7acb26a83ccec44->enter($__internal_dc963e955177a58f3d8ea3a7afd8a3a8cf3d8b7ac8cc3cfce7acb26a83ccec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc963e955177a58f3d8ea3a7afd8a3a8cf3d8b7ac8cc3cfce7acb26a83ccec44->leave($__internal_dc963e955177a58f3d8ea3a7afd8a3a8cf3d8b7ac8cc3cfce7acb26a83ccec44_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
