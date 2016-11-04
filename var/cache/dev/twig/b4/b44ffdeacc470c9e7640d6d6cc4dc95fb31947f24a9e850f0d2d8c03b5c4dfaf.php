<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_86ad15a64de1f70189d6bc9d49b6af836c7ffc78cd26b09528c2d78f67461e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f71cf7551511fa54cc82e64292e44adf3cfeac78b0b96d21860d0b7326e54b3d = $this->env->getExtension("native_profiler");
        $__internal_f71cf7551511fa54cc82e64292e44adf3cfeac78b0b96d21860d0b7326e54b3d->enter($__internal_f71cf7551511fa54cc82e64292e44adf3cfeac78b0b96d21860d0b7326e54b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f71cf7551511fa54cc82e64292e44adf3cfeac78b0b96d21860d0b7326e54b3d->leave($__internal_f71cf7551511fa54cc82e64292e44adf3cfeac78b0b96d21860d0b7326e54b3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a6cc94c1e3a9e027c732418da2c35cb3de9649721a30769d9a8a7048786c11 = $this->env->getExtension("native_profiler");
        $__internal_32a6cc94c1e3a9e027c732418da2c35cb3de9649721a30769d9a8a7048786c11->enter($__internal_32a6cc94c1e3a9e027c732418da2c35cb3de9649721a30769d9a8a7048786c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_32a6cc94c1e3a9e027c732418da2c35cb3de9649721a30769d9a8a7048786c11->leave($__internal_32a6cc94c1e3a9e027c732418da2c35cb3de9649721a30769d9a8a7048786c11_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a151f33914cea3cbe5924424135479a424c07cb0b36dab008723d75e1446bb1 = $this->env->getExtension("native_profiler");
        $__internal_5a151f33914cea3cbe5924424135479a424c07cb0b36dab008723d75e1446bb1->enter($__internal_5a151f33914cea3cbe5924424135479a424c07cb0b36dab008723d75e1446bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_5a151f33914cea3cbe5924424135479a424c07cb0b36dab008723d75e1446bb1->leave($__internal_5a151f33914cea3cbe5924424135479a424c07cb0b36dab008723d75e1446bb1_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_96e2c185bf2640161111e24dc0e70b28bb4cef70408563276214a2bbc761f749 = $this->env->getExtension("native_profiler");
        $__internal_96e2c185bf2640161111e24dc0e70b28bb4cef70408563276214a2bbc761f749->enter($__internal_96e2c185bf2640161111e24dc0e70b28bb4cef70408563276214a2bbc761f749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_96e2c185bf2640161111e24dc0e70b28bb4cef70408563276214a2bbc761f749->leave($__internal_96e2c185bf2640161111e24dc0e70b28bb4cef70408563276214a2bbc761f749_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
