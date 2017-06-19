<?php

/* users/inscription.html.twig */
class __TwigTemplate_c6eeca75d4a68078c99f55850cd78da555dab0f6d5f791d3670376594ace9158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "users/inscription.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f10ab24cbe818a854fc0128bed45fb6ae2ea5b05288870d551f170987ccdd829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10ab24cbe818a854fc0128bed45fb6ae2ea5b05288870d551f170987ccdd829->enter($__internal_f10ab24cbe818a854fc0128bed45fb6ae2ea5b05288870d551f170987ccdd829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10ab24cbe818a854fc0128bed45fb6ae2ea5b05288870d551f170987ccdd829->leave($__internal_f10ab24cbe818a854fc0128bed45fb6ae2ea5b05288870d551f170987ccdd829_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9f3e7de0343dac3556e0fd284cd2e7130660c2f0cb51bb3a3f0dc942da9bbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f3e7de0343dac3556e0fd284cd2e7130660c2f0cb51bb3a3f0dc942da9bbba->enter($__internal_f9f3e7de0343dac3556e0fd284cd2e7130660c2f0cb51bb3a3f0dc942da9bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <button class=\"btn btn-success btn-block\" type=\"submit\">
                Valider
            </button>
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"col-md-4\"></div>
";
        
        $__internal_f9f3e7de0343dac3556e0fd284cd2e7130660c2f0cb51bb3a3f0dc942da9bbba->leave($__internal_f9f3e7de0343dac3556e0fd284cd2e7130660c2f0cb51bb3a3f0dc942da9bbba_prof);

    }

    public function getTemplateName()
    {
        return "users/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
            {{ form_widget(form) }}
            <button class=\"btn btn-success btn-block\" type=\"submit\">
                Valider
            </button>
            {{ form_end(form) }}
        </div>
    </div>
    <div class=\"col-md-4\"></div>
{% endblock %}

", "users/inscription.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\users\\inscription.html.twig");
    }
}
