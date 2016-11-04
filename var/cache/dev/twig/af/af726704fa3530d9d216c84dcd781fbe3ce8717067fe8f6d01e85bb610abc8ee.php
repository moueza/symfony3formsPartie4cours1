<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3346c9253fa79f7da6570897511a5e236b46a1bc910911d91d89eb41355e1c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e23393f6eedc3b36a8dd2e46167f7dd647b857a0348e1439d172afc79a109304 = $this->env->getExtension("native_profiler");
        $__internal_e23393f6eedc3b36a8dd2e46167f7dd647b857a0348e1439d172afc79a109304->enter($__internal_e23393f6eedc3b36a8dd2e46167f7dd647b857a0348e1439d172afc79a109304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e23393f6eedc3b36a8dd2e46167f7dd647b857a0348e1439d172afc79a109304->leave($__internal_e23393f6eedc3b36a8dd2e46167f7dd647b857a0348e1439d172afc79a109304_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac4ed78a1f3739420a2a5812fb7f22d52a3612c2f9c6d31f14a05d230e0c6887 = $this->env->getExtension("native_profiler");
        $__internal_ac4ed78a1f3739420a2a5812fb7f22d52a3612c2f9c6d31f14a05d230e0c6887->enter($__internal_ac4ed78a1f3739420a2a5812fb7f22d52a3612c2f9c6d31f14a05d230e0c6887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac4ed78a1f3739420a2a5812fb7f22d52a3612c2f9c6d31f14a05d230e0c6887->leave($__internal_ac4ed78a1f3739420a2a5812fb7f22d52a3612c2f9c6d31f14a05d230e0c6887_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_137319f134f3760775bc747bec83d47784c55a91ed665ccc5d66f9d39408bb75 = $this->env->getExtension("native_profiler");
        $__internal_137319f134f3760775bc747bec83d47784c55a91ed665ccc5d66f9d39408bb75->enter($__internal_137319f134f3760775bc747bec83d47784c55a91ed665ccc5d66f9d39408bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_137319f134f3760775bc747bec83d47784c55a91ed665ccc5d66f9d39408bb75->leave($__internal_137319f134f3760775bc747bec83d47784c55a91ed665ccc5d66f9d39408bb75_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9752c0b82af446fbb8f48a27157c368e81df4570e0ff83193b01ff9f9c2ac7bf = $this->env->getExtension("native_profiler");
        $__internal_9752c0b82af446fbb8f48a27157c368e81df4570e0ff83193b01ff9f9c2ac7bf->enter($__internal_9752c0b82af446fbb8f48a27157c368e81df4570e0ff83193b01ff9f9c2ac7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9752c0b82af446fbb8f48a27157c368e81df4570e0ff83193b01ff9f9c2ac7bf->leave($__internal_9752c0b82af446fbb8f48a27157c368e81df4570e0ff83193b01ff9f9c2ac7bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
