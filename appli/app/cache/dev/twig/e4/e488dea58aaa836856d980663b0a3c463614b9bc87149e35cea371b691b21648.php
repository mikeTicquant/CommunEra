<?php

/* security/login.html.twig */
class __TwigTemplate_3afab276bf040b38d966a524fdbff0c523129a0dbb385c3d3604c567fc1758fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_1829ed138f57a9e59d14eb5588b0f6452618dc8aa86f7f53c07437db13135e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1829ed138f57a9e59d14eb5588b0f6452618dc8aa86f7f53c07437db13135e22->enter($__internal_1829ed138f57a9e59d14eb5588b0f6452618dc8aa86f7f53c07437db13135e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1829ed138f57a9e59d14eb5588b0f6452618dc8aa86f7f53c07437db13135e22->leave($__internal_1829ed138f57a9e59d14eb5588b0f6452618dc8aa86f7f53c07437db13135e22_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab318dcd99623fbdf339ddff4ba334de0fab87ae09013f54a334ea659298ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab318dcd99623fbdf339ddff4ba334de0fab87ae09013f54a334ea659298ea2->enter($__internal_bab318dcd99623fbdf339ddff4ba334de0fab87ae09013f54a334ea659298ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "        <div class=\"alert alert-danger animated bounceInDown\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 13
        echo "<div class=\"row\">
<div class=\"col-xs-4 col-xs-offset-4\"  style=\"padding-top: 5%\">
    <form class=\"form-horizontal\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <div class=\"input-group margin-bottom-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-envelope-o fa-fw\" aria-hidden=\"true\"></i></span>
            <input class=\"form-control\" type=\"text\" placeholder=\"Email address\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? $this->getContext($context, "lastUsername")), "html", null, true);
        echo "\">
        </div>
        <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-key fa-fw\" aria-hidden=\"true\"></i></span>
            <input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\">
        </div>

        <div class=\"form-group\">
              <div class=\"col-md-6\">
                ";
        // line 28
        echo "                <button type=\"submit\" class=\"btn btn-primary btn-block\" >Login</button>
             </div>
            <div  class=\"col-md-6\">
                ";
        // line 32
        echo "                ";
        echo "<button type=\"reset\" class=\"btn btn-danger btn-block\" >Annuler</button>
            </div>

        </div>


    </form>
</div>

";
        
        $__internal_bab318dcd99623fbdf339ddff4ba334de0fab87ae09013f54a334ea659298ea2->leave($__internal_bab318dcd99623fbdf339ddff4ba334de0fab87ae09013f54a334ea659298ea2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  77 => 28,  65 => 18,  59 => 15,  55 => 13,  46 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
    {% if error %}
        <div class=\"alert alert-danger animated bounceInDown\">
            {{ error.messageKey|trans(error.messageData,'security') }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endif %}
<div class=\"row\">
<div class=\"col-xs-4 col-xs-offset-4\"  style=\"padding-top: 5%\">
    <form class=\"form-horizontal\" action=\"{{ path('login') }}\" method=\"post\">
        <div class=\"input-group margin-bottom-sm\">
            <span class=\"input-group-addon\"><i class=\"fa fa-envelope-o fa-fw\" aria-hidden=\"true\"></i></span>
            <input class=\"form-control\" type=\"text\" placeholder=\"Email address\" id=\"username\" name=\"_username\" value=\"{{ lastUsername }}\">
        </div>
        <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-key fa-fw\" aria-hidden=\"true\"></i></span>
            <input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\">
        </div>

        <div class=\"form-group\">
              <div class=\"col-md-6\">
                {#<input type=\"hidden\" name=\"_target_path\" value=\"/administration/user\" >#}
                <button type=\"submit\" class=\"btn btn-primary btn-block\" >Login</button>
             </div>
            <div  class=\"col-md-6\">
                {# <input type=\"hidden\" name=\"_target_path\" value=\"/apres-login\" /> #}
                {##}<button type=\"reset\" class=\"btn btn-danger btn-block\" >Annuler</button>
            </div>

        </div>


    </form>
</div>

{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\security\\login.html.twig");
    }
}
