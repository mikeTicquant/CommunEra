<?php

/* admin/default/index.html.twig */
class __TwigTemplate_a89e9360f8f42c8e100295a194b05427725d30c8695435a2552fb319d4965e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/template.html.twig", "admin/default/index.html.twig", 1);
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
        $__internal_969980d19d4bb9d59dcfd48ebec7b7c3111477e34caa8330ec1bedf2befa50fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969980d19d4bb9d59dcfd48ebec7b7c3111477e34caa8330ec1bedf2befa50fb->enter($__internal_969980d19d4bb9d59dcfd48ebec7b7c3111477e34caa8330ec1bedf2befa50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969980d19d4bb9d59dcfd48ebec7b7c3111477e34caa8330ec1bedf2befa50fb->leave($__internal_969980d19d4bb9d59dcfd48ebec7b7c3111477e34caa8330ec1bedf2befa50fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_50dbbd3b57718a1467f5647b3b7cb22c4495262034640b54f3658fe667721316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dbbd3b57718a1467f5647b3b7cb22c4495262034640b54f3658fe667721316->enter($__internal_50dbbd3b57718a1467f5647b3b7cb22c4495262034640b54f3658fe667721316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
        echo "
";
        
        $__internal_50dbbd3b57718a1467f5647b3b7cb22c4495262034640b54f3658fe667721316->leave($__internal_50dbbd3b57718a1467f5647b3b7cb22c4495262034640b54f3658fe667721316_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
    {{ dump(app.user) }}
{% endblock %}", "admin/default/index.html.twig", "C:\\wamp64\\www\\dari-clean\\app\\Resources\\views\\admin\\default\\index.html.twig");
    }
}
