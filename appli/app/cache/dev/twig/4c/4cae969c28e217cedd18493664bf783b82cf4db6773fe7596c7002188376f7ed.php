<?php

/* sitter/view.html.twig */
class __TwigTemplate_11d8b07d05b0b62fdcc65f285cc1ac5633161636384431e699779ef9f28c7b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sitter/view.html.twig", 1);
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
        $__internal_3822b85a512b136b9fa60b9fbf2abb1a8f2bc1ff45f9485c37d1f3e9eb924369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3822b85a512b136b9fa60b9fbf2abb1a8f2bc1ff45f9485c37d1f3e9eb924369->enter($__internal_3822b85a512b136b9fa60b9fbf2abb1a8f2bc1ff45f9485c37d1f3e9eb924369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitter/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3822b85a512b136b9fa60b9fbf2abb1a8f2bc1ff45f9485c37d1f3e9eb924369->leave($__internal_3822b85a512b136b9fa60b9fbf2abb1a8f2bc1ff45f9485c37d1f3e9eb924369_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f426c1a29a3fa57703088d24bd6b93928f4d4d5071d66449c317f9bbd10d99dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f426c1a29a3fa57703088d24bd6b93928f4d4d5071d66449c317f9bbd10d99dc->enter($__internal_f426c1a29a3fa57703088d24bd6b93928f4d4d5071d66449c317f9bbd10d99dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"main-section team\" id=\"team\"><!--main-section team-start-->

        <div class=\"container\">
            <h4 class=\"text-align-center\">Voici les aide-ménagères qui recevront votre demande. Vous recevrez une confirmation dès que l'une d'elle aura accepté.</h4>
            <div class=\"team-leader-block clearfix\">

                     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sitters"] ?? $this->getContext($context, "sitters")));
        foreach ($context['_seq'] as $context["_key"] => $context["sitter"]) {
            // line 10
            echo "                                <div class=\"team-leader-box\">
                                    <div class=\"team-leader wow fadeInDown delay-03s\">
                                        <div class=\"team-leader-shadow\"><a href=\"#\"></a></div>
                                        ";
            // line 13
            if (($this->getAttribute($context["sitter"], "photo", array()) == null)) {
                // line 14
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/team-default.jpg"), "html", null, true);
                echo "\" alt=\"\">
                                         ";
            } else {
                // line 16
                echo "                                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["sitter"], "photo", array())), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            // line 18
            echo "                                    </div>
                                    <a href=\"\"  data-toggle=\"modal\" data-target=\"";
            // line 19
            echo twig_escape_filter($this->env, ("#" . $this->getAttribute($context["sitter"], "id", array())), "html", null, true);
            echo "\">
                                    <h3 class=\"wow fadeInDown delay-03s\">";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sitter"], "firstname", array()) . " ") . $this->getAttribute($context["sitter"], "lastname", array())), "html", null, true);
            echo "</h3>
                                    </a>
                                    <span class=\"wow fadeInDown delay-03s\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "mission", array()), "html", null, true);
            echo " missions</span>



                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sitter"], "lastname", array()) . " ") . $this->getAttribute($context["sitter"], "firstname", array())), "html", null, true);
            echo "</h4>
                                                </div>
                                              <form action=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_booking_step1");
            echo "\" method=\"get\">

                                                <div class=\"modal-body\">

                                                    <h4>Descirption</h4>
                                                    <P>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "description", array()), "html", null, true);
            echo "</P>

                                                    <h4>Missions</h4>
                                                    <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "mission", array()), "html", null, true);
            echo "</p>

                                                    <h4>Code postal</h4>
                                                    <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "cp", array()), "html", null, true);
            echo "</p>

                                                    <h4>Ville</h4>
                                                    <p id=\"ville\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "ville", array()), "html", null, true);
            echo "</p>


                                                </div>
                                                <div class=\"modal-footer\">
                                                    <input type=\"hidden\" id=\"ids\" name=\"ids\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "id", array()), "html", null, true);
            echo "\">
                                                    <input type=\"hidden\" id=\"cp\" name=\"cp\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitter"], "cp", array()), "html", null, true);
            echo "\">
                                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Selectionner\"/>
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
        </div>
        </div>
    </section>
";
        
        $__internal_f426c1a29a3fa57703088d24bd6b93928f4d4d5071d66449c317f9bbd10d99dc->leave($__internal_f426c1a29a3fa57703088d24bd6b93928f4d4d5071d66449c317f9bbd10d99dc_prof);

    }

    public function getTemplateName()
    {
        return "sitter/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  142 => 54,  138 => 53,  130 => 48,  124 => 45,  118 => 42,  112 => 39,  104 => 34,  99 => 32,  91 => 27,  83 => 22,  78 => 20,  74 => 19,  71 => 18,  65 => 16,  59 => 14,  57 => 13,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <section class=\"main-section team\" id=\"team\"><!--main-section team-start-->

        <div class=\"container\">
            <h4 class=\"text-align-center\">Voici les aide-ménagères qui recevront votre demande. Vous recevrez une confirmation dès que l'une d'elle aura accepté.</h4>
            <div class=\"team-leader-block clearfix\">

                     {% for sitter in sitters %}
                                <div class=\"team-leader-box\">
                                    <div class=\"team-leader wow fadeInDown delay-03s\">
                                        <div class=\"team-leader-shadow\"><a href=\"#\"></a></div>
                                        {% if sitter.photo == null %}
                                            <img src=\"{{ asset('dist/img/team-default.jpg') }}\" alt=\"\">
                                         {% else %}
                                             <img src=\"{{ asset(sitter.photo) }}\" alt=\"\">
                                        {% endif %}
                                    </div>
                                    <a href=\"\"  data-toggle=\"modal\" data-target=\"{{  '#' ~ sitter.id  }}\">
                                    <h3 class=\"wow fadeInDown delay-03s\">{{ sitter.firstname  ~ \" \" ~ sitter.lastname}}</h3>
                                    </a>
                                    <span class=\"wow fadeInDown delay-03s\">{{ sitter.mission }} missions</span>



                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"{{ sitter.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">{{ sitter.lastname ~ \" \" ~ sitter.firstname }}</h4>
                                                </div>
                                              <form action=\"{{ path('app_booking_step1') }}\" method=\"get\">

                                                <div class=\"modal-body\">

                                                    <h4>Descirption</h4>
                                                    <P>{{ sitter.description }}</P>

                                                    <h4>Missions</h4>
                                                    <p>{{ sitter.mission }}</p>

                                                    <h4>Code postal</h4>
                                                    <p>{{ sitter.cp }}</p>

                                                    <h4>Ville</h4>
                                                    <p id=\"ville\">{{ sitter.ville }}</p>


                                                </div>
                                                <div class=\"modal-footer\">
                                                    <input type=\"hidden\" id=\"ids\" name=\"ids\" value=\"{{ sitter.id }}\">
                                                    <input type=\"hidden\" id=\"cp\" name=\"cp\" value=\"{{ sitter.cp }}\">
                                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Selectionner\"/>
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                        {% endfor %}

        </div>
        </div>
    </section>
{% endblock %}", "sitter/view.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\sitter\\view.html.twig");
    }
}
