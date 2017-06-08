<?php

/* admin/template.html.twig */
class __TwigTemplate_94c08a092b8889ee251042f7ecb9b824b376911e9c4b5302e82c4171892ce4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03f68d91cac809668b2d876828a67bddea04796ff3697f7af5be404bd992fd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f68d91cac809668b2d876828a67bddea04796ff3697f7af5be404bd992fd6c->enter($__internal_03f68d91cac809668b2d876828a67bddea04796ff3697f7af5be404bd992fd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
</head>
<body class=\"skin-blue\">

    ";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 22
        echo "
  <div class=\"content-wrapper\">

      <div class=\"container\" style=\"padding-top: 4rem; padding-right: 8rem\">
          ";
        // line 26
        echo twig_include($this->env, $context, "_flash.html.twig");
        echo "
          ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "      </div>

</div>
";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</body>
</html>";
        
        $__internal_03f68d91cac809668b2d876828a67bddea04796ff3697f7af5be404bd992fd6c->leave($__internal_03f68d91cac809668b2d876828a67bddea04796ff3697f7af5be404bd992fd6c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85a35758b451a3462d7c3f7fc5df899abf64278b7a0c78efad52c17c915d9ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a35758b451a3462d7c3f7fc5df899abf64278b7a0c78efad52c17c915d9ed6->enter($__internal_85a35758b451a3462d7c3f7fc5df899abf64278b7a0c78efad52c17c915d9ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration!";
        
        $__internal_85a35758b451a3462d7c3f7fc5df899abf64278b7a0c78efad52c17c915d9ed6->leave($__internal_85a35758b451a3462d7c3f7fc5df899abf64278b7a0c78efad52c17c915d9ed6_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bb5349118c2ed02eb653547f83fcfba38259c28c2705313fb75b787a12f546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb5349118c2ed02eb653547f83fcfba38259c28c2705313fb75b787a12f546e->enter($__internal_8bb5349118c2ed02eb653547f83fcfba38259c28c2705313fb75b787a12f546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-3.3.7/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
      <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        
        $__internal_8bb5349118c2ed02eb653547f83fcfba38259c28c2705313fb75b787a12f546e->leave($__internal_8bb5349118c2ed02eb653547f83fcfba38259c28c2705313fb75b787a12f546e_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ce4ef2d2546ff65bcb1c6ada7b2e8d9a500ee246b2650f011352d480129ab8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4ef2d2546ff65bcb1c6ada7b2e8d9a500ee246b2650f011352d480129ab8cc->enter($__internal_ce4ef2d2546ff65bcb1c6ada7b2e8d9a500ee246b2650f011352d480129ab8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "        ";
        echo twig_include($this->env, $context, "admin/_header.html.twig");
        echo "
        ";
        // line 20
        echo twig_include($this->env, $context, "admin/_aside.html.twig");
        echo "
    ";
        
        $__internal_ce4ef2d2546ff65bcb1c6ada7b2e8d9a500ee246b2650f011352d480129ab8cc->leave($__internal_ce4ef2d2546ff65bcb1c6ada7b2e8d9a500ee246b2650f011352d480129ab8cc_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_aacb35cfc099c7fe78273921a6eb9cd915b4969acf4f76dade2122dcec412c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb35cfc099c7fe78273921a6eb9cd915b4969acf4f76dade2122dcec412c42->enter($__internal_aacb35cfc099c7fe78273921a6eb9cd915b4969acf4f76dade2122dcec412c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aacb35cfc099c7fe78273921a6eb9cd915b4969acf4f76dade2122dcec412c42->leave($__internal_aacb35cfc099c7fe78273921a6eb9cd915b4969acf4f76dade2122dcec412c42_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a49046ba9e225dd979746327cd20d2ed3f0b06478daac72c3bcd1c720aaa607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49046ba9e225dd979746327cd20d2ed3f0b06478daac72c3bcd1c720aaa607d->enter($__internal_a49046ba9e225dd979746327cd20d2ed3f0b06478daac72c3bcd1c720aaa607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a49046ba9e225dd979746327cd20d2ed3f0b06478daac72c3bcd1c720aaa607d->leave($__internal_a49046ba9e225dd979746327cd20d2ed3f0b06478daac72c3bcd1c720aaa607d_prof);

    }

    public function getTemplateName()
    {
        return "admin/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 35,  162 => 34,  158 => 33,  153 => 32,  147 => 31,  136 => 27,  127 => 20,  122 => 19,  116 => 18,  107 => 12,  103 => 11,  99 => 10,  94 => 9,  88 => 8,  76 => 5,  68 => 37,  66 => 31,  61 => 28,  59 => 27,  55 => 26,  49 => 22,  47 => 18,  41 => 14,  39 => 8,  33 => 5,  27 => 1,);
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
  <meta charset=\"UTF-8\">
  <title>{% block title %}Administration!{% endblock %}</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap-3.3.7/dist/css/bootstrap.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}\"/>
      <link href=\"{{ asset('dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"{{ asset('dist/css/skins/_all-skins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    {% endblock %}

</head>
<body class=\"skin-blue\">

    {% block nav %}
        {{ include('admin/_header.html.twig') }}
        {{ include('admin/_aside.html.twig') }}
    {% endblock %}

  <div class=\"content-wrapper\">

      <div class=\"container\" style=\"padding-top: 4rem; padding-right: 8rem\">
          {{ include('_flash.html.twig') }}
          {% block body %}{% endblock %}
      </div>

</div>
{% block javascripts %}
  <script src=\"{{ asset('assets/jquery-3.2.1.min.js') }}\"></script>
  <script src=\"{{ asset('plugins/jQuery/jQuery-2.1.3.min.js') }}\"></script>
  <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
  <script src=\"{{ asset('dist/js/app.min.js') }}\" type=\"text/javascript\"></script>
{% endblock %}
</body>
</html>", "admin/template.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\template.html.twig");
    }
}
