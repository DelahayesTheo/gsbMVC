<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3d8d77910df3aa9e7e7230cc37c0e689a02450f77d7f060996c60c529e718174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6544a2f8a39389dd90bffdeccf5ef667bc8d6ea7c440c058cd2b911b505626ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6544a2f8a39389dd90bffdeccf5ef667bc8d6ea7c440c058cd2b911b505626ca->enter($__internal_6544a2f8a39389dd90bffdeccf5ef667bc8d6ea7c440c058cd2b911b505626ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6544a2f8a39389dd90bffdeccf5ef667bc8d6ea7c440c058cd2b911b505626ca->leave($__internal_6544a2f8a39389dd90bffdeccf5ef667bc8d6ea7c440c058cd2b911b505626ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7fcee207ea32db5d8f42bd5c86e5afdc2d261b705be66c56500c4d8cfc53042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fcee207ea32db5d8f42bd5c86e5afdc2d261b705be66c56500c4d8cfc53042->enter($__internal_a7fcee207ea32db5d8f42bd5c86e5afdc2d261b705be66c56500c4d8cfc53042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a7fcee207ea32db5d8f42bd5c86e5afdc2d261b705be66c56500c4d8cfc53042->leave($__internal_a7fcee207ea32db5d8f42bd5c86e5afdc2d261b705be66c56500c4d8cfc53042_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
