<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_567bdae379aae36a429a0ee240f58011412a6c85b5126571b966159254259230 extends Twig_Template
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
        $__internal_730b439188f942629d0f04bbd83093a88da08e03b59127d439c5b6c1d0b525b2 = $this->env->getExtension("native_profiler");
        $__internal_730b439188f942629d0f04bbd83093a88da08e03b59127d439c5b6c1d0b525b2->enter($__internal_730b439188f942629d0f04bbd83093a88da08e03b59127d439c5b6c1d0b525b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_730b439188f942629d0f04bbd83093a88da08e03b59127d439c5b6c1d0b525b2->leave($__internal_730b439188f942629d0f04bbd83093a88da08e03b59127d439c5b6c1d0b525b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a1c12fe58b528433c6bb434773e35edc85a4f6a62e47e9c420b972b654a4483 = $this->env->getExtension("native_profiler");
        $__internal_3a1c12fe58b528433c6bb434773e35edc85a4f6a62e47e9c420b972b654a4483->enter($__internal_3a1c12fe58b528433c6bb434773e35edc85a4f6a62e47e9c420b972b654a4483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a1c12fe58b528433c6bb434773e35edc85a4f6a62e47e9c420b972b654a4483->leave($__internal_3a1c12fe58b528433c6bb434773e35edc85a4f6a62e47e9c420b972b654a4483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_918aa19d99b5f9d0ad9445f498d6017c5f85d00dc83ae2185ae849434c0aa00c = $this->env->getExtension("native_profiler");
        $__internal_918aa19d99b5f9d0ad9445f498d6017c5f85d00dc83ae2185ae849434c0aa00c->enter($__internal_918aa19d99b5f9d0ad9445f498d6017c5f85d00dc83ae2185ae849434c0aa00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_918aa19d99b5f9d0ad9445f498d6017c5f85d00dc83ae2185ae849434c0aa00c->leave($__internal_918aa19d99b5f9d0ad9445f498d6017c5f85d00dc83ae2185ae849434c0aa00c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c841778073e2b60c8c098a78a47a8914ce42aea3b6e2a0974c4de87056d46a8a = $this->env->getExtension("native_profiler");
        $__internal_c841778073e2b60c8c098a78a47a8914ce42aea3b6e2a0974c4de87056d46a8a->enter($__internal_c841778073e2b60c8c098a78a47a8914ce42aea3b6e2a0974c4de87056d46a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c841778073e2b60c8c098a78a47a8914ce42aea3b6e2a0974c4de87056d46a8a->leave($__internal_c841778073e2b60c8c098a78a47a8914ce42aea3b6e2a0974c4de87056d46a8a_prof);

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
