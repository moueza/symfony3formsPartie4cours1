<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_b128d11ee4f421a369c409271fb23f5239159b5102f9e06708d8962b5713c362 extends Twig_Template
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
        $__internal_9a961b91b5a7555270ee5e467f54fb431e07b6faa7f83f58daa2c051b7683299 = $this->env->getExtension("native_profiler");
        $__internal_9a961b91b5a7555270ee5e467f54fb431e07b6faa7f83f58daa2c051b7683299->enter($__internal_9a961b91b5a7555270ee5e467f54fb431e07b6faa7f83f58daa2c051b7683299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>


<div class=\"well\">

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "


    ";
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


    ";
        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "


    ";
        // line 26
        echo "
    <div class=\"form-group\">

        ";
        // line 30
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "


        ";
        // line 35
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "


        <div class=\"col-sm-10\">

            ";
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 51
        echo "
    <div class=\"form-group\">

        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">

            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "

    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "


    ";
        // line 73
        echo "
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


    ";
        // line 82
        echo "
    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    ";
        // line 87
        echo "
    ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_9a961b91b5a7555270ee5e467f54fb431e07b6faa7f83f58daa2c051b7683299->leave($__internal_9a961b91b5a7555270ee5e467f54fb431e07b6faa7f83f58daa2c051b7683299_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 88,  151 => 87,  145 => 83,  142 => 82,  136 => 74,  133 => 73,  127 => 69,  122 => 67,  112 => 60,  105 => 56,  100 => 54,  95 => 51,  85 => 43,  82 => 42,  74 => 36,  71 => 35,  65 => 31,  62 => 30,  57 => 26,  51 => 22,  48 => 21,  42 => 17,  39 => 16,  33 => 12,  25 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* */
/* <div class="well">*/
/* */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/* */
/*     {# Génération du label + error + widget pour un champ. #}*/
/* */
/*     {{ form_row(form.date) }}*/
/* */
/* */
/*     {# Génération manuelle et éclatée : #}*/
/* */
/*     <div class="form-group">*/
/* */
/*         {# Génération du label. #}*/
/* */
/*         {{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/* */
/*         {{ form_errors(form.title) }}*/
/* */
/* */
/*         <div class="col-sm-10">*/
/* */
/*             {# Génération de l'input. #}*/
/* */
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     {# Idem pour un autre champ. #}*/
/* */
/*     <div class="form-group">*/
/* */
/*         {{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-sm-10">*/
/* */
/*             {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     {{ form_row(form.author) }}*/
/* */
/*     {{ form_row(form.published) }}*/
/* */
/* */
/*     {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* */
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* */
/*     {# Génération automatique des champs pas encore écrits.*/
/*   */
/*        Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*   */
/*        et tous les champs cachés (type « hidden »). #}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* */
