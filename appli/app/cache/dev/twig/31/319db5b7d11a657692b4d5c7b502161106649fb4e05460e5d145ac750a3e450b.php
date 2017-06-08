<?php

/* base.html.twig */
class __TwigTemplate_bec2d601d5562e4b8de984cfe74cf767852addc7113c4699a554c22d191f32a2 extends Twig_Template
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
        $__internal_eb70f1836eb96da5cc9e383d1b20552948ae4dedea3f8f21bee3825ad8612a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb70f1836eb96da5cc9e383d1b20552948ae4dedea3f8f21bee3825ad8612a08->enter($__internal_eb70f1836eb96da5cc9e383d1b20552948ae4dedea3f8f21bee3825ad8612a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_eb70f1836eb96da5cc9e383d1b20552948ae4dedea3f8f21bee3825ad8612a08->leave($__internal_eb70f1836eb96da5cc9e383d1b20552948ae4dedea3f8f21bee3825ad8612a08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d407988865f651faa45885e74b53873219fd6d8dfd9975acf1bfa9a28d15736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d407988865f651faa45885e74b53873219fd6d8dfd9975acf1bfa9a28d15736->enter($__internal_7d407988865f651faa45885e74b53873219fd6d8dfd9975acf1bfa9a28d15736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d407988865f651faa45885e74b53873219fd6d8dfd9975acf1bfa9a28d15736->leave($__internal_7d407988865f651faa45885e74b53873219fd6d8dfd9975acf1bfa9a28d15736_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee04253208bf58703744ada5d0d7f9d2121fdef78f3909fa5d5d29f11d8b666e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee04253208bf58703744ada5d0d7f9d2121fdef78f3909fa5d5d29f11d8b666e->enter($__internal_ee04253208bf58703744ada5d0d7f9d2121fdef78f3909fa5d5d29f11d8b666e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ee04253208bf58703744ada5d0d7f9d2121fdef78f3909fa5d5d29f11d8b666e->leave($__internal_ee04253208bf58703744ada5d0d7f9d2121fdef78f3909fa5d5d29f11d8b666e_prof);

    }

    // line 18
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7754c3fa57620e5c1ce8c00083db15cbef718ac5ca2d082b1816e8be0b0885be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754c3fa57620e5c1ce8c00083db15cbef718ac5ca2d082b1816e8be0b0885be->enter($__internal_7754c3fa57620e5c1ce8c00083db15cbef718ac5ca2d082b1816e8be0b0885be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "nav-padding";
        
        $__internal_7754c3fa57620e5c1ce8c00083db15cbef718ac5ca2d082b1816e8be0b0885be->leave($__internal_7754c3fa57620e5c1ce8c00083db15cbef718ac5ca2d082b1816e8be0b0885be_prof);

    }

    // line 19
    public function block_nav($context, array $blocks = array())
    {
        $__internal_de0eaddad8ffa0adc7ecf9f5c720927f9f3094704ba9a050a7b339d6ac8d341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0eaddad8ffa0adc7ecf9f5c720927f9f3094704ba9a050a7b339d6ac8d341c->enter($__internal_de0eaddad8ffa0adc7ecf9f5c720927f9f3094704ba9a050a7b339d6ac8d341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 20
        echo "        ";
        echo twig_include($this->env, $context, "_nav.html.twig");
        echo "
    ";
        
        $__internal_de0eaddad8ffa0adc7ecf9f5c720927f9f3094704ba9a050a7b339d6ac8d341c->leave($__internal_de0eaddad8ffa0adc7ecf9f5c720927f9f3094704ba9a050a7b339d6ac8d341c_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7b718765ed82d22927cbb07d0218f3aaed1bbc7b568039c9e5dad6aa704e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7b718765ed82d22927cbb07d0218f3aaed1bbc7b568039c9e5dad6aa704e75->enter($__internal_ba7b718765ed82d22927cbb07d0218f3aaed1bbc7b568039c9e5dad6aa704e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba7b718765ed82d22927cbb07d0218f3aaed1bbc7b568039c9e5dad6aa704e75->leave($__internal_ba7b718765ed82d22927cbb07d0218f3aaed1bbc7b568039c9e5dad6aa704e75_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e0075864d396299277ee92b9c972a56de8d39c41fb27208a360052ffd85fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0075864d396299277ee92b9c972a56de8d39c41fb27208a360052ffd85fc7e->enter($__internal_6e0075864d396299277ee92b9c972a56de8d39c41fb27208a360052ffd85fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-3.3.7/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6e0075864d396299277ee92b9c972a56de8d39c41fb27208a360052ffd85fc7e->leave($__internal_6e0075864d396299277ee92b9c972a56de8d39c41fb27208a360052ffd85fc7e_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\base.html.twig");
    }
}
