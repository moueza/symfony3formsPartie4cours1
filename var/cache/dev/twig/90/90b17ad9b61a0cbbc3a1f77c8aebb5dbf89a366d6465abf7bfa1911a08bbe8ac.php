<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_cb0a76ff74be0d8288ad564dabe2272f73ac5d57cc242d1ab94673d15ac60b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d14772fc7466a468a524495048d87554a78f67ed02cee02da1549af9644ed542 = $this->env->getExtension("native_profiler");
        $__internal_d14772fc7466a468a524495048d87554a78f67ed02cee02da1549af9644ed542->enter($__internal_d14772fc7466a468a524495048d87554a78f67ed02cee02da1549af9644ed542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d14772fc7466a468a524495048d87554a78f67ed02cee02da1549af9644ed542->leave($__internal_d14772fc7466a468a524495048d87554a78f67ed02cee02da1549af9644ed542_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3927991dd0c2dac9864e1b43a905338319e662728c0d48073db494b7b6818062 = $this->env->getExtension("native_profiler");
        $__internal_3927991dd0c2dac9864e1b43a905338319e662728c0d48073db494b7b6818062->enter($__internal_3927991dd0c2dac9864e1b43a905338319e662728c0d48073db494b7b6818062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_3927991dd0c2dac9864e1b43a905338319e662728c0d48073db494b7b6818062->leave($__internal_3927991dd0c2dac9864e1b43a905338319e662728c0d48073db494b7b6818062_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
