<?php

/* base.html.twig */
class __TwigTemplate_203f602148079240f2fbf993390aa1d02a03924f6d649c95f6f177f2de750d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_904bd072785ff6c3fb37f9c9f6d83bb70b58e4addc75ab5323507d59d5022c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904bd072785ff6c3fb37f9c9f6d83bb70b58e4addc75ab5323507d59d5022c47->enter($__internal_904bd072785ff6c3fb37f9c9f6d83bb70b58e4addc75ab5323507d59d5022c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_904bd072785ff6c3fb37f9c9f6d83bb70b58e4addc75ab5323507d59d5022c47->leave($__internal_904bd072785ff6c3fb37f9c9f6d83bb70b58e4addc75ab5323507d59d5022c47_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_be849a46566d5693af6fa4adea9608ff1549ab7b095eeb7510b65785ec77ef83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be849a46566d5693af6fa4adea9608ff1549ab7b095eeb7510b65785ec77ef83->enter($__internal_be849a46566d5693af6fa4adea9608ff1549ab7b095eeb7510b65785ec77ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_be849a46566d5693af6fa4adea9608ff1549ab7b095eeb7510b65785ec77ef83->leave($__internal_be849a46566d5693af6fa4adea9608ff1549ab7b095eeb7510b65785ec77ef83_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac362ee06feed8cf6f2d32186d9d1b33ae72efbd4cb61fc7b369de81b988d82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac362ee06feed8cf6f2d32186d9d1b33ae72efbd4cb61fc7b369de81b988d82f->enter($__internal_ac362ee06feed8cf6f2d32186d9d1b33ae72efbd4cb61fc7b369de81b988d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_ac362ee06feed8cf6f2d32186d9d1b33ae72efbd4cb61fc7b369de81b988d82f->leave($__internal_ac362ee06feed8cf6f2d32186d9d1b33ae72efbd4cb61fc7b369de81b988d82f_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4b91ff90886a29d7dfaf9bb0761cd7c8a7d70fdf1fce3ac51b205db2e41ca5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b91ff90886a29d7dfaf9bb0761cd7c8a7d70fdf1fce3ac51b205db2e41ca5e2->enter($__internal_4b91ff90886a29d7dfaf9bb0761cd7c8a7d70fdf1fce3ac51b205db2e41ca5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_4b91ff90886a29d7dfaf9bb0761cd7c8a7d70fdf1fce3ac51b205db2e41ca5e2->leave($__internal_4b91ff90886a29d7dfaf9bb0761cd7c8a7d70fdf1fce3ac51b205db2e41ca5e2_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_3707712c939fccc304e0831892955de554dff962e070cde4cfceb8f1e7864801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3707712c939fccc304e0831892955de554dff962e070cde4cfceb8f1e7864801->enter($__internal_3707712c939fccc304e0831892955de554dff962e070cde4cfceb8f1e7864801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_3707712c939fccc304e0831892955de554dff962e070cde4cfceb8f1e7864801->leave($__internal_3707712c939fccc304e0831892955de554dff962e070cde4cfceb8f1e7864801_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae9237c495e850fa608c43fc40c1aedacde050debc4931566a1e2f76879e5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae9237c495e850fa608c43fc40c1aedacde050debc4931566a1e2f76879e5b0->enter($__internal_8ae9237c495e850fa608c43fc40c1aedacde050debc4931566a1e2f76879e5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_8ae9237c495e850fa608c43fc40c1aedacde050debc4931566a1e2f76879e5b0->leave($__internal_8ae9237c495e850fa608c43fc40c1aedacde050debc4931566a1e2f76879e5b0_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_a318ba5577c8d2336ed302ce7618f1dbce20ae7c79c99d1ef9502ba0dfe51084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a318ba5577c8d2336ed302ce7618f1dbce20ae7c79c99d1ef9502ba0dfe51084->enter($__internal_a318ba5577c8d2336ed302ce7618f1dbce20ae7c79c99d1ef9502ba0dfe51084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_a318ba5577c8d2336ed302ce7618f1dbce20ae7c79c99d1ef9502ba0dfe51084->leave($__internal_a318ba5577c8d2336ed302ce7618f1dbce20ae7c79c99d1ef9502ba0dfe51084_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f041801341b03397ccf72ed57c9ec1d99de0b9df5127db126d663e295002f19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f041801341b03397ccf72ed57c9ec1d99de0b9df5127db126d663e295002f19a->enter($__internal_f041801341b03397ccf72ed57c9ec1d99de0b9df5127db126d663e295002f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f041801341b03397ccf72ed57c9ec1d99de0b9df5127db126d663e295002f19a->leave($__internal_f041801341b03397ccf72ed57c9ec1d99de0b9df5127db126d663e295002f19a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
