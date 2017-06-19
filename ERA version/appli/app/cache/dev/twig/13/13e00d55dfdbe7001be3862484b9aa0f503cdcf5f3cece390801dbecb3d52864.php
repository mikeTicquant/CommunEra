<?php

/* admin/booking/index.html.twig */
class __TwigTemplate_a4362d0f7452fa4b6528bd88aecb1c2fdc62950e686927e720bc08cf74652da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/template.html.twig", "admin/booking/index.html.twig", 1);
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
        $__internal_741cf50d376f980ecb21034cfc689fe5586161c8002f829149f961062a6483a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741cf50d376f980ecb21034cfc689fe5586161c8002f829149f961062a6483a1->enter($__internal_741cf50d376f980ecb21034cfc689fe5586161c8002f829149f961062a6483a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/booking/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741cf50d376f980ecb21034cfc689fe5586161c8002f829149f961062a6483a1->leave($__internal_741cf50d376f980ecb21034cfc689fe5586161c8002f829149f961062a6483a1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ecbb3ffb67b6f49c2e1372ddcfe0c0f5e7cf9c44ecbc6415fbd65a671401732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecbb3ffb67b6f49c2e1372ddcfe0c0f5e7cf9c44ecbc6415fbd65a671401732->enter($__internal_3ecbb3ffb67b6f49c2e1372ddcfe0c0f5e7cf9c44ecbc6415fbd65a671401732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-xs btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_booking_create");
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
                <th>N° de réserv</th>
                <th>Date réserv</th>
                <th>Duree</th>
                <th>Date arrivé</th>
                <th>Sitter</th>
                <th>Réservé par</th>
                <th>E-mail</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context["_token"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("BOOKING_DELETE");
        // line 31
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bookings"] ?? $this->getContext($context, "bookings")));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "dateBooking", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "duree", array()), "html", null, true);
            echo "  Heures</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "dateArrived", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "sitter", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "userNom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "adresse", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "cp", array()), "html", null, true);
            echo "</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-warning\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_booking_update", array("id" => $this->getAttribute($context["booking"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-danger\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_booking_delete", array("id" => $this->getAttribute($context["booking"], "id", array()), "_token" => ($context["_token"] ?? $this->getContext($context, "_token")))), "html", null, true);
            echo "\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>
    </div>


";
        
        $__internal_3ecbb3ffb67b6f49c2e1372ddcfe0c0f5e7cf9c44ecbc6415fbd65a671401732->leave($__internal_3ecbb3ffb67b6f49c2e1372ddcfe0c0f5e7cf9c44ecbc6415fbd65a671401732_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  132 => 50,  123 => 44,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  79 => 32,  74 => 31,  72 => 30,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
            <a class=\"btn btn-xs btn-success\" href=\"{{ path('app_admin_booking_create') }}\">
                <span class=\"fa fa-plus\"></span>
                Créer
            </a>
        </li>
    </ul>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-condensed table-hover\">
            <thead>
            <tr>
                <th>N° de réserv</th>
                <th>Date réserv</th>
                <th>Duree</th>
                <th>Date arrivé</th>
                <th>Sitter</th>
                <th>Réservé par</th>
                <th>E-mail</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th colspan=\"2\" class=\"sm\"></th>
            </tr>
            </thead>
            <tbody>
            {% set _token = csrf_token('BOOKING_DELETE') %}
            {% for booking in bookings %}
                <tr>
                    <td>{{ booking.id }}</td>
                    <td>{{ booking.dateBooking|date('Y-m-d H:i:s') }}</td>
                    <td>{{ booking.duree }}  Heures</td>
                    <td>{{ booking.dateArrived|date('Y-m-d H:i:s') }}</td>
                    <td>{{ booking.sitter }}</td>
                    <td>{{ booking.userNom }}</td>
                    <td>{{ booking.email }}</td>
                    <td>{{ booking.adresse }}</td>
                    <td>{{ booking.ville }}</td>
                    <td>{{ booking.cp }}</td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-warning\" href=\"{{ path('app_admin_booking_update',{id:booking.id}) }}\">
                            <span class=\"fa fa-pencil\"></span>
                            Modifier
                        </a>
                    </td>
                    <td class=\"sm\">
                        <a class=\"btn btn-xs btn-danger\" href=\"{{ path('app_admin_booking_delete',{id:booking.id,_token:_token}) }}\">
                            <span class=\"fa fa-trash-o\"></span>
                            Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


{% endblock %}", "admin/booking/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\booking\\index.html.twig");
    }
}
