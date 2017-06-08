<?php

/* booking/step_1.html.twig */
class __TwigTemplate_588d0d1324de743329da347bd4e9b0e5c6c6a999cec8bf6b8e55494dbc3586ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/step_1.html.twig", 1);
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
        $__internal_9d91c8aa003eb637b9386f15ec000fb5f091921d62b27cc768a847e9bbf73f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d91c8aa003eb637b9386f15ec000fb5f091921d62b27cc768a847e9bbf73f41->enter($__internal_9d91c8aa003eb637b9386f15ec000fb5f091921d62b27cc768a847e9bbf73f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/step_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d91c8aa003eb637b9386f15ec000fb5f091921d62b27cc768a847e9bbf73f41->leave($__internal_9d91c8aa003eb637b9386f15ec000fb5f091921d62b27cc768a847e9bbf73f41_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7360234c2e3df1ab4bad07341f40eba270d0489a1a0ca3cf452331b3e1da3e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7360234c2e3df1ab4bad07341f40eba270d0489a1a0ca3cf452331b3e1da3e73->enter($__internal_7360234c2e3df1ab4bad07341f40eba270d0489a1a0ca3cf452331b3e1da3e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
            <div class=\"row\">
               <div class=\"col-md-6 col-md-offset-2\">
                  ";
        // line 9
        echo "
                   <div class=\"panel panel-primary\">
                       <div class=\"panel-heading\">
                           <h3 class=\"panel-title\">Votre réservation :</h3>
                       </div>
                       <div class=\"panel-body\">
                           ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                           ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                           <button type=\"submit\" class=\"btn btn-success\">Réserver</button>
                           ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                       </div>
                   </div>
               </div>
            </div>

";
        
        $__internal_7360234c2e3df1ab4bad07341f40eba270d0489a1a0ca3cf452331b3e1da3e73->leave($__internal_7360234c2e3df1ab4bad07341f40eba270d0489a1a0ca3cf452331b3e1da3e73_prof);

    }

    public function getTemplateName()
    {
        return "booking/step_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  57 => 16,  53 => 15,  45 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}

            <div class=\"row\">
               <div class=\"col-md-6 col-md-offset-2\">
                  {# {{ dump(app.session.get('mission')) }}
                   {{ dump(app.session.get('id')) }}
                   {{ dump(app.request.query.get(\"info\")) }}#}

                   <div class=\"panel panel-primary\">
                       <div class=\"panel-heading\">
                           <h3 class=\"panel-title\">Votre réservation :</h3>
                       </div>
                       <div class=\"panel-body\">
                           {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                           {{ form_widget(form) }}
                           <button type=\"submit\" class=\"btn btn-success\">Réserver</button>
                           {{ form_end(form) }}
                       </div>
                   </div>
               </div>
            </div>

{% endblock %}", "booking/step_1.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\booking\\step_1.html.twig");
    }
}
