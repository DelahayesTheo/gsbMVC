<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4126a24d0892713786190ab82518e9658ee48dfd964db7451b5e3d91b767f922 extends Twig_Template
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
        $__internal_8825fbe4cc5563061d28035e7e888b125b8a2ae8a249aeaaf66b6bc8de3fc33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8825fbe4cc5563061d28035e7e888b125b8a2ae8a249aeaaf66b6bc8de3fc33d->enter($__internal_8825fbe4cc5563061d28035e7e888b125b8a2ae8a249aeaaf66b6bc8de3fc33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8825fbe4cc5563061d28035e7e888b125b8a2ae8a249aeaaf66b6bc8de3fc33d->leave($__internal_8825fbe4cc5563061d28035e7e888b125b8a2ae8a249aeaaf66b6bc8de3fc33d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
