<?php

/* _nav.html.twig */
class __TwigTemplate_0aa1895de93974176e8eddce3400b972f7594654a6966c75c217772ecd814169 extends Twig_Template
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
        $__internal_d00c48953e71b9eb9ebd34a6ab5245209be7b672ecc5a1de5de6bfaf36003f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00c48953e71b9eb9ebd34a6ab5245209be7b672ecc5a1de5de6bfaf36003f0b->enter($__internal_d00c48953e71b9eb9ebd34a6ab5245209be7b672ecc5a1de5de6bfaf36003f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">

    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_index");
        echo "\">Home Clean</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"\">Accueil<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_index");
        echo "\">Services</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_booking_step1");
        echo "\">Réservation</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_sitter_index");
        echo "\">Devenir sitters</a></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact_index");
        echo "\">Contact</a></li>
            </ul>



            <ul class=\"nav navbar-nav navbar-right\">


                ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "
                    ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "
                        <li><p class=\"navbar-text\">Bonjour ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</p></li>
                        <li><a href=\"";
                // line 35
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_default_index");
                echo "\">Administration</a></li>

                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 38
                echo "
                        <li><p class=\"navbar-text\">Bonjour ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
                echo "</p></li>
                        <li><a href=\"";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_default_index");
                echo "\"> <span class=\"fa fa-fw fa-user\"></span> Mon Compte</a></li>

                    ";
            }
            // line 43
            echo "
                    <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnecter</a></li>

                ";
        } else {
            // line 47
            echo "
                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_signup");
            echo "\"><span class=\"fa fa-fw fa-user-plus\"></span> S'inscrire</a></li>
                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"fa fa-fw fa-user\"></span> Se connecter</a></li>

                ";
        }
        // line 52
        echo "



            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_d00c48953e71b9eb9ebd34a6ab5245209be7b672ecc5a1de5de6bfaf36003f0b->leave($__internal_d00c48953e71b9eb9ebd34a6ab5245209be7b672ecc5a1de5de6bfaf36003f0b_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 52,  117 => 49,  113 => 48,  110 => 47,  104 => 44,  101 => 43,  95 => 40,  91 => 39,  88 => 38,  82 => 35,  78 => 34,  75 => 33,  73 => 32,  70 => 31,  68 => 30,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">

    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('app_default_index') }}\">Home Clean</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"\">Accueil<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"{{ path('services_index') }}\">Services</a></li>
                <li><a href=\"{{ path('app_booking_step1') }}\">Réservation</a></li>
                <li><a href=\"{{ path('app_sitter_index') }}\">Devenir sitters</a></li>
                <li><a href=\"{{ path('app_contact_index') }}\">Contact</a></li>
            </ul>



            <ul class=\"nav navbar-nav navbar-right\">


                {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                    {% if is_granted('ROLE_ADMIN') %}

                        <li><p class=\"navbar-text\">Bonjour {{ app.user.username }}</p></li>
                        <li><a href=\"{{ path('app_admin_default_index') }}\">Administration</a></li>

                    {% elseif is_granted('ROLE_USER') %}

                        <li><p class=\"navbar-text\">Bonjour {{ app.user.firstname }}</p></li>
                        <li><a href=\"{{ path('app_user_default_index') }}\"> <span class=\"fa fa-fw fa-user\"></span> Mon Compte</a></li>

                    {% endif %}

                    <li><a href=\"{{ path('logout') }}\">Déconnecter</a></li>

                {% else %}

                    <li><a href=\"{{ path('app_default_signup') }}\"><span class=\"fa fa-fw fa-user-plus\"></span> S'inscrire</a></li>
                    <li><a href=\"{{ path('login') }}\"><span class=\"fa fa-fw fa-user\"></span> Se connecter</a></li>

                {% endif %}




            </ul>
        </div>
    </div>
</nav>", "_nav.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\_nav.html.twig");
    }
}
