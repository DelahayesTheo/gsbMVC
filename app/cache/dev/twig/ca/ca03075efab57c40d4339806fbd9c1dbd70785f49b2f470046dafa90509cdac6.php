<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b4fd3bad5b657b4c8aa1b5a166408fde42ae1cc3341fcc6ef5e25dc41bfcb1ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bd4bd341857e96ff45a432a0f66c1341b54791d3096201b2b41caecb56a3654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4bd341857e96ff45a432a0f66c1341b54791d3096201b2b41caecb56a3654b->enter($__internal_bd4bd341857e96ff45a432a0f66c1341b54791d3096201b2b41caecb56a3654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4bd341857e96ff45a432a0f66c1341b54791d3096201b2b41caecb56a3654b->leave($__internal_bd4bd341857e96ff45a432a0f66c1341b54791d3096201b2b41caecb56a3654b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97e6a94a1adee3a1af440fb9d6919d90b5671e13c53d05361de848732aa53dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e6a94a1adee3a1af440fb9d6919d90b5671e13c53d05361de848732aa53dfc->enter($__internal_97e6a94a1adee3a1af440fb9d6919d90b5671e13c53d05361de848732aa53dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_97e6a94a1adee3a1af440fb9d6919d90b5671e13c53d05361de848732aa53dfc->leave($__internal_97e6a94a1adee3a1af440fb9d6919d90b5671e13c53d05361de848732aa53dfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
