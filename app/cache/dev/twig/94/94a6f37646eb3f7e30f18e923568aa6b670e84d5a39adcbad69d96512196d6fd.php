<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2eb2cd7c2dddbe626be455bf11223b6b4e4726a6d90a297f43d7dd9915290d02 extends Twig_Template
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
        $__internal_f62f0cedc2f8ba276daaae50364a989ad8be28c6f1a22930633708ec0c81501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62f0cedc2f8ba276daaae50364a989ad8be28c6f1a22930633708ec0c81501e->enter($__internal_f62f0cedc2f8ba276daaae50364a989ad8be28c6f1a22930633708ec0c81501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f62f0cedc2f8ba276daaae50364a989ad8be28c6f1a22930633708ec0c81501e->leave($__internal_f62f0cedc2f8ba276daaae50364a989ad8be28c6f1a22930633708ec0c81501e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
