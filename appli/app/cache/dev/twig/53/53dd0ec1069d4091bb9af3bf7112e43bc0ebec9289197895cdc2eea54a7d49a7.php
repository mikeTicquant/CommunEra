<?php

/* admin/_aside.html.twig */
class __TwigTemplate_eeb212b5db076253e71e3129fb0cecf536985f72dd837a5b16a3dc3dd64be63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b41408a9c43ba2b6b6a36c3b26e658d939fb88613b8079a822599c72c06a466e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41408a9c43ba2b6b6a36c3b26e658d939fb88613b8079a822599c72c06a466e->enter($__internal_b41408a9c43ba2b6b6a36c3b26e658d939fb88613b8079a822599c72c06a466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/_aside.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/avatar5.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
                <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</p>

                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Connecté</a>
            </div>
        </div>

        <ul class=\"sidebar-menu\">
            <li class=\"header\">MENU</li>

            <li class=\"treeview\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_index");
        echo "\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Gestion utilisateurs</span>
                    <span class=\"label label-primary pull-right\">CRUD</span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_index");
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste des users</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_create");
        echo "\"><i class=\"fa fa-circle-o\"></i>Ajout User</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_user_index");
        echo "\"><i class=\"fa fa-circle-o\"></i>Modifier / Supprimer</a></li>
                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_index");
        echo "\">
                    <i class=\"fa fa-edit\"></i> <span>Gestion des Sitters</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_index");
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste des sitters</a></li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_create");
        echo "\"><i class=\"fa fa-circle-o\"></i>Ajout Sitter</a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_sitter_index");
        echo "\"><i class=\"fa fa-circle-o\"></i>Modifer / Supprimer</a></li>

                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_booking_index");
        echo "\">
                    <i class=\"fa fa-table\"></i> <span>Gestion des réservations</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_booking_index");
        echo "\"><i class=\"fa fa-circle-o\"></i>Les réservations</a></li>
                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i>Modifer/Supprimer</a></li>
                </ul>
            </li>
            <li>
                <a href=\"\">
                    <i class=\"fa fa-calendar\"></i> <span>Gestion Calendrier</span>
                    <small class=\"label pull-right bg-red\">3</small>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                    <small class=\"label pull-right bg-yellow\">12</small>
                </a>
            </li>

        </ul>
    </section>

</aside>";
        
        $__internal_b41408a9c43ba2b6b6a36c3b26e658d939fb88613b8079a822599c72c06a466e->leave($__internal_b41408a9c43ba2b6b6a36c3b26e658d939fb88613b8079a822599c72c06a466e_prof);

    }

    public function getTemplateName()
    {
        return "admin/_aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  99 => 44,  91 => 39,  87 => 38,  83 => 37,  75 => 32,  67 => 27,  63 => 26,  59 => 25,  50 => 19,  35 => 9,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"{{ asset('dist/img/avatar5.png') }}\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
                <p>{{ app.user.firstname }} {{ app.user.lastname }}</p>

                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Connecté</a>
            </div>
        </div>

        <ul class=\"sidebar-menu\">
            <li class=\"header\">MENU</li>

            <li class=\"treeview\">
                <a href=\"{{ path('app_admin_user_index') }}\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Gestion utilisateurs</span>
                    <span class=\"label label-primary pull-right\">CRUD</span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{  path('app_admin_user_index') }}\"><i class=\"fa fa-circle-o\"></i>Liste des users</a></li>
                    <li><a href=\"{{  path('app_admin_user_create') }}\"><i class=\"fa fa-circle-o\"></i>Ajout User</a></li>
                    <li><a href=\"{{  path('app_admin_user_index') }}\"><i class=\"fa fa-circle-o\"></i>Modifier / Supprimer</a></li>
                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"{{ path('app_admin_sitter_index') }}\">
                    <i class=\"fa fa-edit\"></i> <span>Gestion des Sitters</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('app_admin_sitter_index') }}\"><i class=\"fa fa-circle-o\"></i>Liste des sitters</a></li>
                    <li><a href=\"{{ path('app_admin_sitter_create') }}\"><i class=\"fa fa-circle-o\"></i>Ajout Sitter</a></li>
                    <li><a href=\"{{ path('app_admin_sitter_index') }}\"><i class=\"fa fa-circle-o\"></i>Modifer / Supprimer</a></li>

                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"{{ path('app_admin_booking_index') }}\">
                    <i class=\"fa fa-table\"></i> <span>Gestion des réservations</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"{{ path('app_admin_booking_index') }}\"><i class=\"fa fa-circle-o\"></i>Les réservations</a></li>
                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i>Modifer/Supprimer</a></li>
                </ul>
            </li>
            <li>
                <a href=\"\">
                    <i class=\"fa fa-calendar\"></i> <span>Gestion Calendrier</span>
                    <small class=\"label pull-right bg-red\">3</small>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <i class=\"fa fa-envelope\"></i> <span>Messages</span>
                    <small class=\"label pull-right bg-yellow\">12</small>
                </a>
            </li>

        </ul>
    </section>

</aside>", "admin/_aside.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\_aside.html.twig");
    }
}
