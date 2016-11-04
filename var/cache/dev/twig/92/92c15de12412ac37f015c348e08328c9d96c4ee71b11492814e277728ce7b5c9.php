<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_35deff3f5365573b92e319f9a19fdb489aea2d63cf1e5519b9d056e254108b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06125c2938f29bd9db6aa25f9dd2c79c3a97cd204d09b997ae2db35d8c547fd7 = $this->env->getExtension("native_profiler");
        $__internal_06125c2938f29bd9db6aa25f9dd2c79c3a97cd204d09b997ae2db35d8c547fd7->enter($__internal_06125c2938f29bd9db6aa25f9dd2c79c3a97cd204d09b997ae2db35d8c547fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06125c2938f29bd9db6aa25f9dd2c79c3a97cd204d09b997ae2db35d8c547fd7->leave($__internal_06125c2938f29bd9db6aa25f9dd2c79c3a97cd204d09b997ae2db35d8c547fd7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85c8216d9e9f96366ad9003246538ed7e33cc7e04450ac6fa62d8be64439c013 = $this->env->getExtension("native_profiler");
        $__internal_85c8216d9e9f96366ad9003246538ed7e33cc7e04450ac6fa62d8be64439c013->enter($__internal_85c8216d9e9f96366ad9003246538ed7e33cc7e04450ac6fa62d8be64439c013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85c8216d9e9f96366ad9003246538ed7e33cc7e04450ac6fa62d8be64439c013->leave($__internal_85c8216d9e9f96366ad9003246538ed7e33cc7e04450ac6fa62d8be64439c013_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddea8333b8dd4c55c8f04dbc744b0b89732723e1007e5d68c37103ae6d86ae01 = $this->env->getExtension("native_profiler");
        $__internal_ddea8333b8dd4c55c8f04dbc744b0b89732723e1007e5d68c37103ae6d86ae01->enter($__internal_ddea8333b8dd4c55c8f04dbc744b0b89732723e1007e5d68c37103ae6d86ae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddea8333b8dd4c55c8f04dbc744b0b89732723e1007e5d68c37103ae6d86ae01->leave($__internal_ddea8333b8dd4c55c8f04dbc744b0b89732723e1007e5d68c37103ae6d86ae01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3385c1060d37989bfdd4f944e6e9767ea393de555c0a90644c70fe3d2f9586b6 = $this->env->getExtension("native_profiler");
        $__internal_3385c1060d37989bfdd4f944e6e9767ea393de555c0a90644c70fe3d2f9586b6->enter($__internal_3385c1060d37989bfdd4f944e6e9767ea393de555c0a90644c70fe3d2f9586b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3385c1060d37989bfdd4f944e6e9767ea393de555c0a90644c70fe3d2f9586b6->leave($__internal_3385c1060d37989bfdd4f944e6e9767ea393de555c0a90644c70fe3d2f9586b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
