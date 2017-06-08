<?php

/* admin/user/create.html.twig */
class __TwigTemplate_f247e9275065e43fbdd1e2ac7c453f0a7426644456bc80f22f953a119c46113f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/template.html.twig", "admin/user/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171ab9c5b5d7bcc0f955b298d9a2643c8fbf8c284f3939ad8e165642502c0f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171ab9c5b5d7bcc0f955b298d9a2643c8fbf8c284f3939ad8e165642502c0f52->enter($__internal_171ab9c5b5d7bcc0f955b298d9a2643c8fbf8c284f3939ad8e165642502c0f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171ab9c5b5d7bcc0f955b298d9a2643c8fbf8c284f3939ad8e165642502c0f52->leave($__internal_171ab9c5b5d7bcc0f955b298d9a2643c8fbf8c284f3939ad8e165642502c0f52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d28d6d1cac384213837020c009ffe0960f670c15de986717c133a8762a513fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d28d6d1cac384213837020c009ffe0960f670c15de986717c133a8762a513fd->enter($__internal_0d28d6d1cac384213837020c009ffe0960f670c15de986717c133a8762a513fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-4 col-xs-offset-4\">
            ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <button class=\"btn btn-success btn-block\" type=\"submit\">
                Valider
            </button>
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_0d28d6d1cac384213837020c009ffe0960f670c15de986717c133a8762a513fd->leave($__internal_0d28d6d1cac384213837020c009ffe0960f670c15de986717c133a8762a513fd_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/template.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-4 col-xs-offset-4\">
            {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
            {{ form_widget(form) }}
            <button class=\"btn btn-success btn-block\" type=\"submit\">
                Valider
            </button>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "admin/user/create.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\user\\create.html.twig");
    }
}
