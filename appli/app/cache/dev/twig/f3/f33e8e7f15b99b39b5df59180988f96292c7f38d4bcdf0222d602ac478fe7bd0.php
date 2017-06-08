<?php

/* booking/step_2.html.twig */
class __TwigTemplate_99c8f372004042180f7ffd2d6a795e15895a0ca1dc8768cfaaf10be120c3c521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/step_2.html.twig", 1);
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
        $__internal_5c867705bcd97c2e4abac15819ef1641736658bbd527577bcfa696f74d47cb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c867705bcd97c2e4abac15819ef1641736658bbd527577bcfa696f74d47cb98->enter($__internal_5c867705bcd97c2e4abac15819ef1641736658bbd527577bcfa696f74d47cb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/step_2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c867705bcd97c2e4abac15819ef1641736658bbd527577bcfa696f74d47cb98->leave($__internal_5c867705bcd97c2e4abac15819ef1641736658bbd527577bcfa696f74d47cb98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20cd01d8223775e1e3eea9b233cf47914c84315703dec7dfb86cfe79e1a0f375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cd01d8223775e1e3eea9b233cf47914c84315703dec7dfb86cfe79e1a0f375->enter($__internal_20cd01d8223775e1e3eea9b233cf47914c84315703dec7dfb86cfe79e1a0f375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h1></h1>
        <div class=\"col-xs-4 col-xs-offset-4\">

            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Detail de votre réservation:</h3>
                </div>
                <div class=\"panel-body\">
                    <p>Merci pour votre réservation</p>
                </div>

            </div>

        </div>
    </div>
";
        
        $__internal_20cd01d8223775e1e3eea9b233cf47914c84315703dec7dfb86cfe79e1a0f375->leave($__internal_20cd01d8223775e1e3eea9b233cf47914c84315703dec7dfb86cfe79e1a0f375_prof);

    }

    public function getTemplateName()
    {
        return "booking/step_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"row\">
        <h1></h1>
        <div class=\"col-xs-4 col-xs-offset-4\">

            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Detail de votre réservation:</h3>
                </div>
                <div class=\"panel-body\">
                    <p>Merci pour votre réservation</p>
                </div>

            </div>

        </div>
    </div>
{% endblock %}


", "booking/step_2.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\booking\\step_2.html.twig");
    }
}
