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
        $__internal_06bdfb92988ee7206df681d646a3bd739d39a8ae1953dab00e90d0f6241d95dc = $this->env->getExtension("native_profiler");
        $__internal_06bdfb92988ee7206df681d646a3bd739d39a8ae1953dab00e90d0f6241d95dc->enter($__internal_06bdfb92988ee7206df681d646a3bd739d39a8ae1953dab00e90d0f6241d95dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>


<div class=\"well\">

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "


    ";
        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


    ";
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "


    ";
        // line 30
        echo "
    <div class=\"form-group\">

        ";
        // line 34
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "


        ";
        // line 39
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "


        <div class=\"col-sm-10\">

            ";
        // line 46
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 55
        echo "
    <div class=\"form-group\">

        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "

        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">

            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "

    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "


    ";
        // line 77
        echo "
    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


    ";
        // line 86
        echo "
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    ";
        // line 91
        echo "
    ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>




";
        // line 102
        echo "
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>


";
        // line 107
        echo "
<script type=\"text/javascript\">

    \$(document).ready(function () {

        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.

        var \$container = \$('div#advert_categories');


        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement

        var index = \$container.find(':input').length;


        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.

        \$('#add_category').click(function (e) {

            addCategory(\$container);


            e.preventDefault(); // évite qu'un # apparaisse dans l'URL

            return false;

        });


        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).

        if (index == 0) {

            addCategory(\$container);

        } else {

            // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles

            \$container.children('div').each(function () {

                addDeleteLink(\$(this));

            });

        }


        // La fonction qui ajoute un formulaire CategoryType

        function addCategory(\$container) {

            // Dans le contenu de l'attribut « data-prototype », on remplace :

            // - le texte \"__name__label__\" qu'il contient par le label du champ

            // - le texte \"__name__\" qu'il contient par le numéro du champ

            var template = \$container.attr('data-prototype')

                    .replace(/__name__label__/g, 'Catégorie n°' + (index + 1))

                    .replace(/__name__/g, index)

                    ;


            // On crée un objet jquery qui contient ce template

            var \$prototype = \$(template);


            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie

            addDeleteLink(\$prototype);


            // On ajoute le prototype modifié à la fin de la balise <div>

            \$container.append(\$prototype);


            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro

            index++;

        }


        // La fonction qui ajoute un lien de suppression d'une catégorie

        function addDeleteLink(\$prototype) {

            // Création du lien

            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


            // Ajout du lien

            \$prototype.append(\$deleteLink);


            // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie

            \$deleteLink.click(function (e) {

                \$prototype.remove();


                e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                return false;

            });

        }

    });

</script>";
        
        $__internal_06bdfb92988ee7206df681d646a3bd739d39a8ae1953dab00e90d0f6241d95dc->leave($__internal_06bdfb92988ee7206df681d646a3bd739d39a8ae1953dab00e90d0f6241d95dc_prof);

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
        return array (  177 => 107,  171 => 102,  161 => 92,  158 => 91,  152 => 87,  149 => 86,  143 => 78,  140 => 77,  134 => 73,  129 => 71,  119 => 64,  112 => 60,  107 => 58,  102 => 55,  92 => 47,  89 => 46,  81 => 40,  78 => 39,  72 => 35,  69 => 34,  64 => 30,  58 => 26,  55 => 25,  49 => 21,  46 => 20,  40 => 16,  33 => 12,  25 => 6,  22 => 2,);
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
/*     {{ form_row(form.categories) }}*/
/*     <a href="#" id="add_category" class="btn btn-default">Ajouter une catégorie</a>*/
/* */
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
/* */
/* */
/* */
/* {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google*/
/* */
/*    mais si vous l'avez en local, changez simplement l'adresse. #}*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* */
/* {# Voici le script en question : #}*/
/* */
/* <script type="text/javascript">*/
/* */
/*     $(document).ready(function () {*/
/* */
/*         // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/* */
/*         var $container = $('div#advert_categories');*/
/* */
/* */
/*         // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/* */
/*         var index = $container.find(':input').length;*/
/* */
/* */
/*         // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/* */
/*         $('#add_category').click(function (e) {*/
/* */
/*             addCategory($container);*/
/* */
/* */
/*             e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*             return false;*/
/* */
/*         });*/
/* */
/* */
/*         // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).*/
/* */
/*         if (index == 0) {*/
/* */
/*             addCategory($container);*/
/* */
/*         } else {*/
/* */
/*             // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles*/
/* */
/*             $container.children('div').each(function () {*/
/* */
/*                 addDeleteLink($(this));*/
/* */
/*             });*/
/* */
/*         }*/
/* */
/* */
/*         // La fonction qui ajoute un formulaire CategoryType*/
/* */
/*         function addCategory($container) {*/
/* */
/*             // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/* */
/*             // - le texte "__name__label__" qu'il contient par le label du champ*/
/* */
/*             // - le texte "__name__" qu'il contient par le numéro du champ*/
/* */
/*             var template = $container.attr('data-prototype')*/
/* */
/*                     .replace(/__name__label__/g, 'Catégorie n°' + (index + 1))*/
/* */
/*                     .replace(/__name__/g, index)*/
/* */
/*                     ;*/
/* */
/* */
/*             // On crée un objet jquery qui contient ce template*/
/* */
/*             var $prototype = $(template);*/
/* */
/* */
/*             // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/* */
/*             addDeleteLink($prototype);*/
/* */
/* */
/*             // On ajoute le prototype modifié à la fin de la balise <div>*/
/* */
/*             $container.append($prototype);*/
/* */
/* */
/*             // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/* */
/*             index++;*/
/* */
/*         }*/
/* */
/* */
/*         // La fonction qui ajoute un lien de suppression d'une catégorie*/
/* */
/*         function addDeleteLink($prototype) {*/
/* */
/*             // Création du lien*/
/* */
/*             var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/* */
/*             // Ajout du lien*/
/* */
/*             $prototype.append($deleteLink);*/
/* */
/* */
/*             // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie*/
/* */
/*             $deleteLink.click(function (e) {*/
/* */
/*                 $prototype.remove();*/
/* */
/* */
/*                 e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*                 return false;*/
/* */
/*             });*/
/* */
/*         }*/
/* */
/*     });*/
/* */
/* </script>*/
