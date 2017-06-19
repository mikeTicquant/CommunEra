<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82f02f70136ffc59a4160b8592d01038df1e9cededfe9a0577dfa5e9914e9d28 extends Twig_Template
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
        $__internal_1952300ddf425e6890c35c03f485f0534d01393198a50ac2b939f94f8ff207f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1952300ddf425e6890c35c03f485f0534d01393198a50ac2b939f94f8ff207f1->enter($__internal_1952300ddf425e6890c35c03f485f0534d01393198a50ac2b939f94f8ff207f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1952300ddf425e6890c35c03f485f0534d01393198a50ac2b939f94f8ff207f1->leave($__internal_1952300ddf425e6890c35c03f485f0534d01393198a50ac2b939f94f8ff207f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ffe54197e295279b04a69a94b7c21c6859af5b795c4692ed176098dd0173503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffe54197e295279b04a69a94b7c21c6859af5b795c4692ed176098dd0173503->enter($__internal_0ffe54197e295279b04a69a94b7c21c6859af5b795c4692ed176098dd0173503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ffe54197e295279b04a69a94b7c21c6859af5b795c4692ed176098dd0173503->leave($__internal_0ffe54197e295279b04a69a94b7c21c6859af5b795c4692ed176098dd0173503_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bde63a65a36d4268d1050668d40f28081f72a54a3e11020dc305310cebc54323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde63a65a36d4268d1050668d40f28081f72a54a3e11020dc305310cebc54323->enter($__internal_bde63a65a36d4268d1050668d40f28081f72a54a3e11020dc305310cebc54323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bde63a65a36d4268d1050668d40f28081f72a54a3e11020dc305310cebc54323->leave($__internal_bde63a65a36d4268d1050668d40f28081f72a54a3e11020dc305310cebc54323_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00ad58ba39e0cd66ac3f0b1cdfa1338a541e73d674f38216d06720e65aea6858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ad58ba39e0cd66ac3f0b1cdfa1338a541e73d674f38216d06720e65aea6858->enter($__internal_00ad58ba39e0cd66ac3f0b1cdfa1338a541e73d674f38216d06720e65aea6858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00ad58ba39e0cd66ac3f0b1cdfa1338a541e73d674f38216d06720e65aea6858->leave($__internal_00ad58ba39e0cd66ac3f0b1cdfa1338a541e73d674f38216d06720e65aea6858_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\dari-clean\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
