<?php

/* _flash.html.twig */
class __TwigTemplate_9eef966a3bed745bdbf98252720a3cb34c94c4f80123733017d012ebc686aebc extends Twig_Template
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
        $__internal_f2e4c5ff67b42d87bf576343400841c83c7e7760a383cbbd24c2242c7355ae84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e4c5ff67b42d87bf576343400841c83c7e7760a383cbbd24c2242c7355ae84->enter($__internal_f2e4c5ff67b42d87bf576343400841c83c7e7760a383cbbd24c2242c7355ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_flash.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 2
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
                // line 5
                echo (( !$this->getAttribute($context["loop"], "last", array())) ? ("<br>") : (""));
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f2e4c5ff67b42d87bf576343400841c83c7e7760a383cbbd24c2242c7355ae84->leave($__internal_f2e4c5ff67b42d87bf576343400841c83c7e7760a383cbbd24c2242c7355ae84_prof);

    }

    public function getTemplateName()
    {
        return "_flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  53 => 5,  48 => 4,  31 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for type,messages in app.session.flashBag.all() %}
    <div class=\"alert alert-{{ type }}\">
        {% for message in messages %}
            {{ message }}
            {{ not loop.last ? '<br>' }}
        {% endfor %}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endfor %}", "_flash.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\_flash.html.twig");
    }
}
