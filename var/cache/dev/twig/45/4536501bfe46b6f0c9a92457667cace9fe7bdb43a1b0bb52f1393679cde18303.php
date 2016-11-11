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
        $__internal_460faf45fc17b4e145f3830c354dca3f55829f5e961b4a0b98436d329130d36a = $this->env->getExtension("native_profiler");
        $__internal_460faf45fc17b4e145f3830c354dca3f55829f5e961b4a0b98436d329130d36a->enter($__internal_460faf45fc17b4e145f3830c354dca3f55829f5e961b4a0b98436d329130d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "<h3>Formulaire d'annonce</h3>


<div class=\"well\">


    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "



    ";
        // line 23
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 24
            echo "        ";
            // line 25
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
            echo "
    ";
        }
        // line 27
        echo "
    ";
        // line 29
        echo "
    <div class=\"form-group\">

        ";
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "


        ";
        // line 38
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "


        <div class=\"col-sm-10\">

            ";
        // line 45
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 54
        echo "
    <div class=\"form-group\">

        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "

        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">

            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>


    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "

    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "


    ";
        // line 76
        echo "
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


    ";
        // line 83
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 86
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>


";
        // line 93
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 96
        echo "<script type=\"text/javascript\">
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
        
        $__internal_460faf45fc17b4e145f3830c354dca3f55829f5e961b4a0b98436d329130d36a->leave($__internal_460faf45fc17b4e145f3830c354dca3f55829f5e961b4a0b98436d329130d36a_prof);

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
        return array (  170 => 96,  166 => 93,  157 => 86,  151 => 83,  145 => 77,  142 => 76,  136 => 72,  131 => 70,  121 => 63,  114 => 59,  109 => 57,  104 => 54,  94 => 46,  91 => 45,  83 => 39,  80 => 38,  74 => 34,  71 => 33,  66 => 29,  63 => 27,  57 => 25,  55 => 24,  53 => 23,  45 => 19,  38 => 14,  33 => 12,  25 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* */
/* <div class="well">*/
/* */
/* */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {{ form_row(form.categories) }}*/
/*     <a href="#" id="add_category" class="btn btn-default">Ajouter une catégorie</a>*/
/* */
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/* */
/* */
/*     {% if form.date is defined %}*/
/*         {# Génération du label + error + widget pour un champ. #}*/
/*         {{ form_row(form.date) }}*/
/*     {% endif %}*/
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
/*     {# Génération automatique des champs pas encore écrits. */
/*        Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*          et tous les champs cachés (type « hidden »). #}*/
/*     {{ form_rest(form) }}*/
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* */
/* */
/* {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google*/
/*    mais si vous l'avez en local, changez simplement l'adresse. #}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* {# Voici le script en question : #}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/*         var $container = $('div#advert_categories');*/
/* */
/*         // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*         var index = $container.find(':input').length;*/
/* */
/*         // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*         $('#add_category').click(function (e) {*/
/*             addCategory($container);*/
/* */
/*             e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*             return false;*/
/*         });*/
/* */
/*         // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).*/
/*         if (index == 0) {*/
/*             addCategory($container);*/
/*         } else {*/
/*             // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles*/
/*             $container.children('div').each(function () {*/
/*                 addDeleteLink($(this));*/
/*             });*/
/*         }*/
/* */
/*         // La fonction qui ajoute un formulaire CategoryType*/
/*         function addCategory($container) {*/
/*             // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*             // - le texte "__name__label__" qu'il contient par le label du champ*/
/*             // - le texte "__name__" qu'il contient par le numéro du champ*/
/*             var template = $container.attr('data-prototype')*/
/*                     .replace(/__name__label__/g, 'Catégorie n°' + (index + 1))*/
/*                     .replace(/__name__/g, index)*/
/*                     ;*/
/* */
/*             // On crée un objet jquery qui contient ce template*/
/*             var $prototype = $(template);*/
/* */
/*             // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*             addDeleteLink($prototype);*/
/* */
/*             // On ajoute le prototype modifié à la fin de la balise <div>*/
/*             $container.append($prototype);*/
/* */
/*             // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*             index++;*/
/*         }*/
/* */
/*         // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*         function addDeleteLink($prototype) {*/
/*             // Création du lien*/
/*             var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*             // Ajout du lien*/
/*             $prototype.append($deleteLink);*/
/* */
/*             // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie*/
/*             $deleteLink.click(function (e) {*/
/*                 $prototype.remove();*/
/* */
/*                 e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 return false;*/
/*             });*/
/*         }*/
/*     });*/
/* </script>*/
