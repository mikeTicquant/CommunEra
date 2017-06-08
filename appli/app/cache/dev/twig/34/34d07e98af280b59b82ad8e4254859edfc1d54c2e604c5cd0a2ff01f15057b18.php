<?php

/* user/default/view.html.twig */
class __TwigTemplate_6183043f2823f4ec4e115644d32e47fe275af3977396ffae39fdd060e4764125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/default/view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ad877cd2707d14408896010f834c0da4dc4efbe1c4bdc3c8063f043c3e52b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ad877cd2707d14408896010f834c0da4dc4efbe1c4bdc3c8063f043c3e52b0->enter($__internal_39ad877cd2707d14408896010f834c0da4dc4efbe1c4bdc3c8063f043c3e52b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/default/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ad877cd2707d14408896010f834c0da4dc4efbe1c4bdc3c8063f043c3e52b0->leave($__internal_39ad877cd2707d14408896010f834c0da4dc4efbe1c4bdc3c8063f043c3e52b0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6ffe42d57f434ed4cb74be46941f9378844ddbb94a3ccec3a2e0d18f932704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6ffe42d57f434ed4cb74be46941f9378844ddbb94a3ccec3a2e0d18f932704->enter($__internal_6b6ffe42d57f434ed4cb74be46941f9378844ddbb94a3ccec3a2e0d18f932704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section>
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastname", array())), "html", null, true);
        echo "</h1>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                ";
        // line 7
        $context["filename"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "photo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "photo", array()), "default.png")) : ("default.png"));
        // line 8
        echo "                ";
        $context["url"] = ((($context["globalUserPhotoUri"] ?? $this->getContext($context, "globalUserPhotoUri")) . "/") . ($context["filename"] ?? $this->getContext($context, "filename")));
        // line 9
        echo "                <img class=\"img-thumbnail\" id=\"photo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["url"] ?? $this->getContext($context, "url"))), "html", null, true);
        echo "\"/>
                <div class=\"hide\">
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPhoto"] ?? $this->getContext($context, "formPhoto")), 'form');
        echo "
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2>Détails du profil</h2>
                ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formDetails"] ?? $this->getContext($context, "formDetails")), 'form');
        echo "
            </div>
        </div>
                <h2>Mot de passe</h2>
                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPassword"] ?? $this->getContext($context, "formPassword")), 'form');
        echo "
    </section>
";
        
        $__internal_6b6ffe42d57f434ed4cb74be46941f9378844ddbb94a3ccec3a2e0d18f932704->leave($__internal_6b6ffe42d57f434ed4cb74be46941f9378844ddbb94a3ccec3a2e0d18f932704_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8598a2a23a09aaca8ad3623211290c9ab520f550a589719f147cd1abb31b1e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8598a2a23a09aaca8ad3623211290c9ab520f550a589719f147cd1abb31b1e6c->enter($__internal_8598a2a23a09aaca8ad3623211290c9ab520f550a589719f147cd1abb31b1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$('#photo').wrap('<a href=\"#\"></a>').on('click', function () {
                \$('#form_user_photo_photoFile').click();
            });
            \$('#form_user_photo_photoFile').on('change', function () {
                \$('form[name=\"form_user_photo\"]').submit();
            });
        });
    </script>
";
        
        $__internal_8598a2a23a09aaca8ad3623211290c9ab520f550a589719f147cd1abb31b1e6c->leave($__internal_8598a2a23a09aaca8ad3623211290c9ab520f550a589719f147cd1abb31b1e6c_prof);

    }

    public function getTemplateName()
    {
        return "user/default/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  88 => 24,  78 => 20,  71 => 16,  63 => 11,  57 => 9,  54 => 8,  52 => 7,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <section>
        <h1>{{ app.user.firstname }} {{ app.user.lastname|upper }}</h1>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                {% set filename = app.user.photo|default('default.png') %}
                {% set url = globalUserPhotoUri ~ '/' ~ filename %}
                <img class=\"img-thumbnail\" id=\"photo\" src=\"{{ asset(url) }}\"/>
                <div class=\"hide\">
                    {{ form(formPhoto) }}
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2>Détails du profil</h2>
                {{ form(formDetails) }}
            </div>
        </div>
                <h2>Mot de passe</h2>
                {{ form(formPassword) }}
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            \$('#photo').wrap('<a href=\"#\"></a>').on('click', function () {
                \$('#form_user_photo_photoFile').click();
            });
            \$('#form_user_photo_photoFile').on('change', function () {
                \$('form[name=\"form_user_photo\"]').submit();
            });
        });
    </script>
{% endblock %}
", "user/default/view.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\user\\default\\view.html.twig");
    }
}
