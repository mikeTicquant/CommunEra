<?php

/* sitter/index.html.twig */
class __TwigTemplate_508394e70394241dc31b81583d3edecfe6fb4d32c3919e09cc9bd4932d8ea90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sitter/index.html.twig", 1);
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
        $__internal_6ed72bf4742b2c6555a8b80cdbcc90a1e590b38594337567bc6240e92b7ff9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed72bf4742b2c6555a8b80cdbcc90a1e590b38594337567bc6240e92b7ff9aa->enter($__internal_6ed72bf4742b2c6555a8b80cdbcc90a1e590b38594337567bc6240e92b7ff9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitter/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed72bf4742b2c6555a8b80cdbcc90a1e590b38594337567bc6240e92b7ff9aa->leave($__internal_6ed72bf4742b2c6555a8b80cdbcc90a1e590b38594337567bc6240e92b7ff9aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_507325e9d65b445b21f2c154db400624fe3d847da04f98f98a753470b3ef2b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507325e9d65b445b21f2c154db400624fe3d847da04f98f98a753470b3ef2b62->enter($__internal_507325e9d65b445b21f2c154db400624fe3d847da04f98f98a753470b3ef2b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"row\">

        <div class=\"col-sm-4 col-sm-offset-4\">
            <h1>Devenir sitter</h1>
            <p>L'inscription prend juste deux minutes, et une fois que vous l'avez complétée nous allons programmer un appel téléphonique avec vous .</p>
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "firstname", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "lastname", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "cp", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "ville", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "mission", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "tel", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "description", array()), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "email", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "dispo", array()), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), "password", array()), 'row');
        echo "

            <input type=\"submit\" class=\"btn btn-success btn-block\">
            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["sitterForm"] ?? $this->getContext($context, "sitterForm")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_507325e9d65b445b21f2c154db400624fe3d847da04f98f98a753470b3ef2b62->leave($__internal_507325e9d65b445b21f2c154db400624fe3d847da04f98f98a753470b3ef2b62_prof);

    }

    public function getTemplateName()
    {
        return "sitter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

        <div class=\"col-sm-4 col-sm-offset-4\">
            <h1>Devenir sitter</h1>
            <p>L'inscription prend juste deux minutes, et une fois que vous l'avez complétée nous allons programmer un appel téléphonique avec vous .</p>
            {{ form_start(sitterForm,{attr:{novalidate:'novalidate'}}) }}
            {{ form_row(sitterForm.firstname) }}
            {{ form_row(sitterForm.lastname) }}
            {{ form_row(sitterForm.cp) }}
            {{ form_row(sitterForm.ville) }}
            {{ form_row(sitterForm.mission) }}
            {{ form_row(sitterForm.tel) }}
            {{ form_row(sitterForm.description) }}
            {{ form_row(sitterForm.email) }}
            {{ form_row(sitterForm.dispo) }}
            {{ form_row(sitterForm.password) }}

            <input type=\"submit\" class=\"btn btn-success btn-block\">
            {{ form_end(sitterForm) }}
        </div>
    </div>

{% endblock %}", "sitter/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\sitter\\index.html.twig");
    }
}
