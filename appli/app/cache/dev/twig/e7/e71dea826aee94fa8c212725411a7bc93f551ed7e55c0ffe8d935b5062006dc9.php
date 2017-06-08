<?php

/* ::base.html.twig */
class __TwigTemplate_6019076fc75a8bbe0b5ed00893ab1f3cc3f0eddc22f17d237c87a6d08135b008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_class' => array($this, 'block_body_class'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e51fc6b326c8e9b7ccc7b1d2343bebfaadb4edf2357bf80895424c8887aad237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51fc6b326c8e9b7ccc7b1d2343bebfaadb4edf2357bf80895424c8887aad237->enter($__internal_e51fc6b326c8e9b7ccc7b1d2343bebfaadb4edf2357bf80895424c8887aad237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 18
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 19
        $this->displayBlock('nav', $context, $blocks);
        // line 22
        echo "
    <div class=\"container\">
        ";
        // line 24
        echo twig_include($this->env, $context, "_flash.html.twig");
        echo "
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_e51fc6b326c8e9b7ccc7b1d2343bebfaadb4edf2357bf80895424c8887aad237->leave($__internal_e51fc6b326c8e9b7ccc7b1d2343bebfaadb4edf2357bf80895424c8887aad237_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e1b38c0c1bdb0889be03277bc8879892c4af08a090aef7d2b5bd2d59aa37e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1b38c0c1bdb0889be03277bc8879892c4af08a090aef7d2b5bd2d59aa37e78->enter($__internal_8e1b38c0c1bdb0889be03277bc8879892c4af08a090aef7d2b5bd2d59aa37e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e1b38c0c1bdb0889be03277bc8879892c4af08a090aef7d2b5bd2d59aa37e78->leave($__internal_8e1b38c0c1bdb0889be03277bc8879892c4af08a090aef7d2b5bd2d59aa37e78_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3ba65a44841705579f594edd2e289ced241c784b6c3937d5655d198fae27880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ba65a44841705579f594edd2e289ced241c784b6c3937d5655d198fae27880->enter($__internal_b3ba65a44841705579f594edd2e289ced241c784b6c3937d5655d198fae27880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-3.3.7/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/animate.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_b3ba65a44841705579f594edd2e289ced241c784b6c3937d5655d198fae27880->leave($__internal_b3ba65a44841705579f594edd2e289ced241c784b6c3937d5655d198fae27880_prof);

    }

    // line 18
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3b67b969b01475708778b2527676dda9dbd066c792b914cf4d452d5948af58db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b67b969b01475708778b2527676dda9dbd066c792b914cf4d452d5948af58db->enter($__internal_3b67b969b01475708778b2527676dda9dbd066c792b914cf4d452d5948af58db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "nav-padding";
        
        $__internal_3b67b969b01475708778b2527676dda9dbd066c792b914cf4d452d5948af58db->leave($__internal_3b67b969b01475708778b2527676dda9dbd066c792b914cf4d452d5948af58db_prof);

    }

    // line 19
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d3cf8e5e625b93a40c38ee25fca8d57b1622388b1d002071494e488566cbf9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cf8e5e625b93a40c38ee25fca8d57b1622388b1d002071494e488566cbf9e0->enter($__internal_d3cf8e5e625b93a40c38ee25fca8d57b1622388b1d002071494e488566cbf9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 20
        echo "        ";
        echo twig_include($this->env, $context, "_nav.html.twig");
        echo "
    ";
        
        $__internal_d3cf8e5e625b93a40c38ee25fca8d57b1622388b1d002071494e488566cbf9e0->leave($__internal_d3cf8e5e625b93a40c38ee25fca8d57b1622388b1d002071494e488566cbf9e0_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a753dd68e1570488035e72034cc25c64fbf279011c80ce1389a22187c628fcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a753dd68e1570488035e72034cc25c64fbf279011c80ce1389a22187c628fcb2->enter($__internal_a753dd68e1570488035e72034cc25c64fbf279011c80ce1389a22187c628fcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a753dd68e1570488035e72034cc25c64fbf279011c80ce1389a22187c628fcb2->leave($__internal_a753dd68e1570488035e72034cc25c64fbf279011c80ce1389a22187c628fcb2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09abec1a02c71d118e9b0a796714f7ff0e2ae385ca172a5967d2a0a1d4a83d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09abec1a02c71d118e9b0a796714f7ff0e2ae385ca172a5967d2a0a1d4a83d15->enter($__internal_09abec1a02c71d118e9b0a796714f7ff0e2ae385ca172a5967d2a0a1d4a83d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-3.3.7/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_09abec1a02c71d118e9b0a796714f7ff0e2ae385ca172a5967d2a0a1d4a83d15->leave($__internal_09abec1a02c71d118e9b0a796714f7ff0e2ae385ca172a5967d2a0a1d4a83d15_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 29,  169 => 28,  163 => 27,  152 => 25,  142 => 20,  136 => 19,  124 => 18,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  96 => 9,  90 => 8,  78 => 7,  69 => 31,  67 => 27,  64 => 26,  62 => 25,  58 => 24,  54 => 22,  52 => 19,  48 => 18,  42 => 16,  40 => 8,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap-3.3.7/dist/css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/main.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('assets/animate.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"{% block body_class %}nav-padding{% endblock %}\">
    {% block nav %}
        {{ include('_nav.html.twig') }}
    {% endblock %}

    <div class=\"container\">
        {{ include('_flash.html.twig') }}
        {% block body %}{% endblock %}
    </div>
        {% block javascripts %}
            <script src=\"{{ asset('assets/jquery-3.2.1.min.js') }}\"></script>
            <script src=\"{{ asset('assets/bootstrap-3.3.7/dist/js/bootstrap.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\dari-clean\\app/Resources\\views/base.html.twig");
    }
}
