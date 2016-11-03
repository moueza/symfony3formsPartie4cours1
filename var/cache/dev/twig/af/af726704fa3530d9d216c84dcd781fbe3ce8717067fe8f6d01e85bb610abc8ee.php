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
        $__internal_17b04fc482c5d25e64ac7b082d8a30370162eb18f8daa8a4a42c7a609628434e = $this->env->getExtension("native_profiler");
        $__internal_17b04fc482c5d25e64ac7b082d8a30370162eb18f8daa8a4a42c7a609628434e->enter($__internal_17b04fc482c5d25e64ac7b082d8a30370162eb18f8daa8a4a42c7a609628434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b04fc482c5d25e64ac7b082d8a30370162eb18f8daa8a4a42c7a609628434e->leave($__internal_17b04fc482c5d25e64ac7b082d8a30370162eb18f8daa8a4a42c7a609628434e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5e914072cc47c209d8b30c11376e54ae653d26a22ad2c70145a89779e1608b1 = $this->env->getExtension("native_profiler");
        $__internal_a5e914072cc47c209d8b30c11376e54ae653d26a22ad2c70145a89779e1608b1->enter($__internal_a5e914072cc47c209d8b30c11376e54ae653d26a22ad2c70145a89779e1608b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5e914072cc47c209d8b30c11376e54ae653d26a22ad2c70145a89779e1608b1->leave($__internal_a5e914072cc47c209d8b30c11376e54ae653d26a22ad2c70145a89779e1608b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09e912ee93d44054daeb996f6540367b8d56ffa544e3ce0ceb5d031df93ba370 = $this->env->getExtension("native_profiler");
        $__internal_09e912ee93d44054daeb996f6540367b8d56ffa544e3ce0ceb5d031df93ba370->enter($__internal_09e912ee93d44054daeb996f6540367b8d56ffa544e3ce0ceb5d031df93ba370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09e912ee93d44054daeb996f6540367b8d56ffa544e3ce0ceb5d031df93ba370->leave($__internal_09e912ee93d44054daeb996f6540367b8d56ffa544e3ce0ceb5d031df93ba370_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49313d53df5529e1c82d09574331e5f23f828441cc6f417a9b059957a214c60b = $this->env->getExtension("native_profiler");
        $__internal_49313d53df5529e1c82d09574331e5f23f828441cc6f417a9b059957a214c60b->enter($__internal_49313d53df5529e1c82d09574331e5f23f828441cc6f417a9b059957a214c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_49313d53df5529e1c82d09574331e5f23f828441cc6f417a9b059957a214c60b->leave($__internal_49313d53df5529e1c82d09574331e5f23f828441cc6f417a9b059957a214c60b_prof);

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
