<?php

/* admin/user/index.html.twig */
class __TwigTemplate_acad361ad75bd98643afa8222ce14992d7291f805c1f2050f265102547765f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/template.html.twig", "admin/user/index.html.twig", 1);
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
        $__internal_89014878da6fd3b0b9be340f2c4fac006b2190588e5f42d7b5a4cbfa648bad45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89014878da6fd3b0b9be340f2c4fac006b2190588e5f42d7b5a4cbfa648bad45->enter($__internal_89014878da6fd3b0b9be340f2c4fac006b2190588e5f42d7b5a4cbfa648bad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89014878da6fd3b0b9be340f2c4fac006b2190588e5f42d7b5a4cbfa648bad45->leave($__internal_89014878da6fd3b0b9be340f2c4fac006b2190588e5f42d7b5a4cbfa648bad45_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a463e77371f51269ed374f7d709a0368de5dc7191ed103db0b8e90ca002914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a463e77371f51269ed374f7d709a0368de5dc7191ed103db0b8e90ca002914->enter($__internal_90a463e77371f51269ed374f7d709a0368de5dc7191ed103db0b8e90ca002914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-xs btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_create");
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
                <th>Ville</th>
                <th>E-mail</th>
                <th>Code postal</th>
                <th>Role</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 27
        $context["_token"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("USER_DELETE");
        // line 28
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cp", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-warning\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_update", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-danger\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()), "_token" => ($context["_token"] ?? $this->getContext($context, "_token")))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>
    </div>


";
        
        $__internal_90a463e77371f51269ed374f7d709a0368de5dc7191ed103db0b8e90ca002914->leave($__internal_90a463e77371f51269ed374f7d709a0368de5dc7191ed103db0b8e90ca002914_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  117 => 44,  108 => 38,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  76 => 29,  71 => 28,  69 => 27,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
            <a class=\"btn btn-xs btn-success\" href=\"{{ path('app_admin_user_create') }}\">
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
                <th>Ville</th>
                <th>E-mail</th>
                <th>Code postal</th>
                <th>Role</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            {% set _token = csrf_token('USER_DELETE') %}
            {% for user in users %}
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.ville }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.cp }}</td>
                    <td>{{ user.role }}</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-warning\" href=\"{{ path('app_admin_user_update',{id:user.id}) }}\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-danger\" href=\"{{ path('app_admin_user_delete',{id:user.id,_token:_token}) }}\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


{% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\user\\index.html.twig");
    }
}
