<?php

/* admin/sitter/index.html.twig */
class __TwigTemplate_5db7e189925ca7586d32002b2e64bc8304c7edf795dc72b4b0aa459b7b87495d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/template.html.twig", "admin/sitter/index.html.twig", 1);
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
        $__internal_ea707e4a771608aa5b15071933c3992b73a50e30495e08e6eed135f4b2c8ac82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea707e4a771608aa5b15071933c3992b73a50e30495e08e6eed135f4b2c8ac82->enter($__internal_ea707e4a771608aa5b15071933c3992b73a50e30495e08e6eed135f4b2c8ac82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/sitter/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea707e4a771608aa5b15071933c3992b73a50e30495e08e6eed135f4b2c8ac82->leave($__internal_ea707e4a771608aa5b15071933c3992b73a50e30495e08e6eed135f4b2c8ac82_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_71721db807b21a86fe047141ef168b81dea05b23690005f072a709d3df4191a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71721db807b21a86fe047141ef168b81dea05b23690005f072a709d3df4191a1->enter($__internal_71721db807b21a86fe047141ef168b81dea05b23690005f072a709d3df4191a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-xs btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_create");
        echo "\">
                <span class=\"fa fa-plus\"></span>
                Créer
            </a>
        </li>
    </ul>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-condensed table-hover\">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>Nbr missions</th>
                <th>Disponibilité</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context["_token"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("SITTER_DELETE");
        // line 29
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sitters"] ?? $this->getContext($context, "sitters")));
        foreach ($context['_seq'] as $context["_key"] => $context["sitter"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "cp", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "mission", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "dispo", array()), "html", null, true);
            echo "</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-default\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_update", array("id" => $this->getAttribute($context["sitter"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-default\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_delete", array("id" => $this->getAttribute($context["sitter"], "id", array()), "_token" => ($context["_token"] ?? $this->getContext($context, "_token")))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
    </div>


";
        
        $__internal_71721db807b21a86fe047141ef168b81dea05b23690005f072a709d3df4191a1->leave($__internal_71721db807b21a86fe047141ef168b81dea05b23690005f072a709d3df4191a1_prof);

    }

    public function getTemplateName()
    {
        return "admin/sitter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  122 => 46,  113 => 40,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  77 => 30,  72 => 29,  70 => 28,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/template.html.twig\" %}
{% block body %}

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-xs btn-success\" href=\"{{ path('app_admin_sitter_create') }}\">
                <span class=\"fa fa-plus\"></span>
                Créer
            </a>
        </li>
    </ul>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-condensed table-hover\">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>Nbr missions</th>
                <th>Disponibilité</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            {% set _token = csrf_token('SITTER_DELETE') %}
            {% for sitter in sitters %}
                <tr>
                    <td>{{ sitter.id }}</td>
                    <td>{{ sitter.firstname }}</td>
                    <td>{{ sitter.lastname }}</td>
                    <td>{{ sitter.email }}</td>
                    <td>{{ sitter.ville }}</td>
                    <td>{{ sitter.cp }}</td>
                    <td>{{ sitter.mission }}</td>
                    <td>{{ sitter.dispo }}</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-default\" href=\"{{ path('app_admin_sitter_update',{id:sitter.id}) }}\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-default\" href=\"{{ path('app_admin_sitter_delete',{id:sitter.id,_token:_token}) }}\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


{% endblock %}", "admin/sitter/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\sitter\\index.html.twig");
    }
}
