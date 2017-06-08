<?php

/* booking/index.html.twig */
class __TwigTemplate_54a906c879eac8178a807083e61f75e2c2cf46f493232639ec36fe43028ac757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/index.html.twig", 1);
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
        $__internal_3c8a8925cc1e5e0893a352b6ba771a5cfbf89603f227fd3b31c85554d4d01335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8a8925cc1e5e0893a352b6ba771a5cfbf89603f227fd3b31c85554d4d01335->enter($__internal_3c8a8925cc1e5e0893a352b6ba771a5cfbf89603f227fd3b31c85554d4d01335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8a8925cc1e5e0893a352b6ba771a5cfbf89603f227fd3b31c85554d4d01335->leave($__internal_3c8a8925cc1e5e0893a352b6ba771a5cfbf89603f227fd3b31c85554d4d01335_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f8451c3090fc5ca48b51a2687671fcaf22c58279f7fd57af0dd75a4487780f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8451c3090fc5ca48b51a2687671fcaf22c58279f7fd57af0dd75a4487780f1->enter($__internal_5f8451c3090fc5ca48b51a2687671fcaf22c58279f7fd57af0dd75a4487780f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
    <section id=\"main-teaser\" class=\"teaser\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                 <div style=\"margin-top: 8rem\">
                    <h1>Réservez votre Ménage <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp dès 19,90€/h</h1>
                       <br>
                        <form class=\"\" id=\"new_bid\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_sitter_view");
        echo "\"  method=\"get\">

                                <input type =\"text\" class=\"text-blue\"  maxlength=\"5\" required=\"required\" placeholder=\"Votre code postal\" autocomplete=\"off\"   name=\"postcode\" id=\"postcode\" size=\"40\"  />
                                <input type=\"submit\" name=\"commit\"  value=\"Chercher\" class=\"btn-primary signup__button\"  />

                        </form>
                    </div>

            </div>
        </div>

    </section>
    </div>
";
        
        $__internal_5f8451c3090fc5ca48b51a2687671fcaf22c58279f7fd57af0dd75a4487780f1->leave($__internal_5f8451c3090fc5ca48b51a2687671fcaf22c58279f7fd57af0dd75a4487780f1_prof);

    }

    public function getTemplateName()
    {
        return "booking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
    <section id=\"main-teaser\" class=\"teaser\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                 <div style=\"margin-top: 8rem\">
                    <h1>Réservez votre Ménage <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp dès 19,90€/h</h1>
                       <br>
                        <form class=\"\" id=\"new_bid\" action=\"{{ path('app_sitter_view') }}\"  method=\"get\">

                                <input type =\"text\" class=\"text-blue\"  maxlength=\"5\" required=\"required\" placeholder=\"Votre code postal\" autocomplete=\"off\"   name=\"postcode\" id=\"postcode\" size=\"40\"  />
                                <input type=\"submit\" name=\"commit\"  value=\"Chercher\" class=\"btn-primary signup__button\"  />

                        </form>
                    </div>

            </div>
        </div>

    </section>
    </div>
{% endblock %}", "booking/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\booking\\index.html.twig");
    }
}
