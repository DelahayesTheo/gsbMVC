<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_47235e1055b8c89f445336b7cc344ee197a46348f25aa41c3f9f41b0dbc959b6 extends Twig_Template
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
        $__internal_d23c7b9d4c42c52a92b84d7250ab210e0d6e6c18c5047db08d8f0a6bd76e1fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23c7b9d4c42c52a92b84d7250ab210e0d6e6c18c5047db08d8f0a6bd76e1fa1->enter($__internal_d23c7b9d4c42c52a92b84d7250ab210e0d6e6c18c5047db08d8f0a6bd76e1fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d23c7b9d4c42c52a92b84d7250ab210e0d6e6c18c5047db08d8f0a6bd76e1fa1->leave($__internal_d23c7b9d4c42c52a92b84d7250ab210e0d6e6c18c5047db08d8f0a6bd76e1fa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
