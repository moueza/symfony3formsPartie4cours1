<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d42fa7c01aab0ce98deb50d6bae9592b7fc190e03a97f6263050d4fc7101035a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a7b014e01621fadc1d51126718089ee9b570c1cc2cf88d731ca39c33c65407b = $this->env->getExtension("native_profiler");
        $__internal_8a7b014e01621fadc1d51126718089ee9b570c1cc2cf88d731ca39c33c65407b->enter($__internal_8a7b014e01621fadc1d51126718089ee9b570c1cc2cf88d731ca39c33c65407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7b014e01621fadc1d51126718089ee9b570c1cc2cf88d731ca39c33c65407b->leave($__internal_8a7b014e01621fadc1d51126718089ee9b570c1cc2cf88d731ca39c33c65407b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f277e1fc073ddadd0c4abf2a777a91347bc3214832ec32b043e904afaa55a3e7 = $this->env->getExtension("native_profiler");
        $__internal_f277e1fc073ddadd0c4abf2a777a91347bc3214832ec32b043e904afaa55a3e7->enter($__internal_f277e1fc073ddadd0c4abf2a777a91347bc3214832ec32b043e904afaa55a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f277e1fc073ddadd0c4abf2a777a91347bc3214832ec32b043e904afaa55a3e7->leave($__internal_f277e1fc073ddadd0c4abf2a777a91347bc3214832ec32b043e904afaa55a3e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68648f2c6c11f7a21ba368ee76f1ecada8b52a28f2fdd528b770d9fb67efc5a9 = $this->env->getExtension("native_profiler");
        $__internal_68648f2c6c11f7a21ba368ee76f1ecada8b52a28f2fdd528b770d9fb67efc5a9->enter($__internal_68648f2c6c11f7a21ba368ee76f1ecada8b52a28f2fdd528b770d9fb67efc5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_68648f2c6c11f7a21ba368ee76f1ecada8b52a28f2fdd528b770d9fb67efc5a9->leave($__internal_68648f2c6c11f7a21ba368ee76f1ecada8b52a28f2fdd528b770d9fb67efc5a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
