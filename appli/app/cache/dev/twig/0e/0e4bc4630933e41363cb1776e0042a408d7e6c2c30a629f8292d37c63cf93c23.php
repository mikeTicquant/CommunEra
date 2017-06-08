<?php

/* services/index.html.twig */
class __TwigTemplate_6f187fe1b9fde2d1067b9fc8c55a3752be94602356916ad121ddaebd398b8a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "services/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c122995d9a181ca244a401209bb9cbb56a58200616ee22a55f5323955883224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c122995d9a181ca244a401209bb9cbb56a58200616ee22a55f5323955883224->enter($__internal_4c122995d9a181ca244a401209bb9cbb56a58200616ee22a55f5323955883224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c122995d9a181ca244a401209bb9cbb56a58200616ee22a55f5323955883224->leave($__internal_4c122995d9a181ca244a401209bb9cbb56a58200616ee22a55f5323955883224_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9cf34c574633b1af6a4c4a49e2f7ead65415b9f1903666595fdbd487e62030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9cf34c574633b1af6a4c4a49e2f7ead65415b9f1903666595fdbd487e62030->enter($__internal_5e9cf34c574633b1af6a4c4a49e2f7ead65415b9f1903666595fdbd487e62030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"container\">

        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "            <div class=\"col-lg-4\">
                <div class=\"card\" style=\"width: 20rem; margin-bottom: 2rem\">
                    <img class=\"card-img-top\" src=\"...\" alt=\"Card image\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"btn btn-primary\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "tarif", array()), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>


";
        
        $__internal_5e9cf34c574633b1af6a4c4a49e2f7ead65415b9f1903666595fdbd487e62030->leave($__internal_5e9cf34c574633b1af6a4c4a49e2f7ead65415b9f1903666595fdbd487e62030_prof);

    }

    public function getTemplateName()
    {
        return "services/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  65 => 16,  61 => 15,  57 => 14,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


    <div class=\"container\">

        <div class=\"row\">
            {% for service in services %}
            <div class=\"col-lg-4\">
                <div class=\"card\" style=\"width: 20rem; margin-bottom: 2rem\">
                    <img class=\"card-img-top\" src=\"...\" alt=\"Card image\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">{{ service.title }}</h4>
                        <p class=\"card-text\">{{ service.description}}</p>
                        <a href=\"#\" class=\"btn btn-primary\">{{ service.tarif}}</a>
                    </div>
                </div>
            </div>

    {% endfor %}
        </div>
    </div>


{% endblock %}

", "services/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\services\\index.html.twig");
    }
}
