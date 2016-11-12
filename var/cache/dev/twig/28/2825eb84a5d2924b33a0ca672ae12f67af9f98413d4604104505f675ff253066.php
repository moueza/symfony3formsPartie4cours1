<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_c64885762b124c421af32cc1974ecaf36d5538762d628a50a812088c43061cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f638b44e0d15ebf84d85c3cab8df3f1580cdee327d9b72876848929d8968e6c8 = $this->env->getExtension("native_profiler");
        $__internal_f638b44e0d15ebf84d85c3cab8df3f1580cdee327d9b72876848929d8968e6c8->enter($__internal_f638b44e0d15ebf84d85c3cab8df3f1580cdee327d9b72876848929d8968e6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f638b44e0d15ebf84d85c3cab8df3f1580cdee327d9b72876848929d8968e6c8->leave($__internal_f638b44e0d15ebf84d85c3cab8df3f1580cdee327d9b72876848929d8968e6c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07892977cdae671f641e2479f89315340110ac32373c1bc9ca84c325182341d0 = $this->env->getExtension("native_profiler");
        $__internal_07892977cdae671f641e2479f89315340110ac32373c1bc9ca84c325182341d0->enter($__internal_07892977cdae671f641e2479f89315340110ac32373c1bc9ca84c325182341d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_07892977cdae671f641e2479f89315340110ac32373c1bc9ca84c325182341d0->leave($__internal_07892977cdae671f641e2479f89315340110ac32373c1bc9ca84c325182341d0_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5ceee752aaae64c212adf091510fed45017ea0e4c524fc5e07c633d613dc602f = $this->env->getExtension("native_profiler");
        $__internal_5ceee752aaae64c212adf091510fed45017ea0e4c524fc5e07c633d613dc602f->enter($__internal_5ceee752aaae64c212adf091510fed45017ea0e4c524fc5e07c633d613dc602f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "
";
        // line 15
        echo "  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_5ceee752aaae64c212adf091510fed45017ea0e4c524fc5e07c633d613dc602f->leave($__internal_5ceee752aaae64c212adf091510fed45017ea0e4c524fc5e07c633d613dc602f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  66 => 15,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* {#    /**platform/edit/{id}*//*  #}*/
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
