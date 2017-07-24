<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_094d8fa9c7bd4dfb10df0fe664b3e49f41f5a890bdbc0c8dcf7a189aaba57fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80507fe26e5218d0e2176f720e33abc51cc57d3f3b370cb077035d33432f839e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80507fe26e5218d0e2176f720e33abc51cc57d3f3b370cb077035d33432f839e->enter($__internal_80507fe26e5218d0e2176f720e33abc51cc57d3f3b370cb077035d33432f839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80507fe26e5218d0e2176f720e33abc51cc57d3f3b370cb077035d33432f839e->leave($__internal_80507fe26e5218d0e2176f720e33abc51cc57d3f3b370cb077035d33432f839e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_302a141b52d4d67c839fd035674404e4ac210b81e6c0caa31ced66586c35c807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302a141b52d4d67c839fd035674404e4ac210b81e6c0caa31ced66586c35c807->enter($__internal_302a141b52d4d67c839fd035674404e4ac210b81e6c0caa31ced66586c35c807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_302a141b52d4d67c839fd035674404e4ac210b81e6c0caa31ced66586c35c807->leave($__internal_302a141b52d4d67c839fd035674404e4ac210b81e6c0caa31ced66586c35c807_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c34ddb7aadd21bd4de70c3c2c819d2aa0883ff7e9ef5b6fd3d1a9613e227217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34ddb7aadd21bd4de70c3c2c819d2aa0883ff7e9ef5b6fd3d1a9613e227217b->enter($__internal_c34ddb7aadd21bd4de70c3c2c819d2aa0883ff7e9ef5b6fd3d1a9613e227217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c34ddb7aadd21bd4de70c3c2c819d2aa0883ff7e9ef5b6fd3d1a9613e227217b->leave($__internal_c34ddb7aadd21bd4de70c3c2c819d2aa0883ff7e9ef5b6fd3d1a9613e227217b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82e18b69726d42d3cda2bbc6d7e4d288463747528e3848522a8db100f0f6e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e18b69726d42d3cda2bbc6d7e4d288463747528e3848522a8db100f0f6e24a->enter($__internal_82e18b69726d42d3cda2bbc6d7e4d288463747528e3848522a8db100f0f6e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82e18b69726d42d3cda2bbc6d7e4d288463747528e3848522a8db100f0f6e24a->leave($__internal_82e18b69726d42d3cda2bbc6d7e4d288463747528e3848522a8db100f0f6e24a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
