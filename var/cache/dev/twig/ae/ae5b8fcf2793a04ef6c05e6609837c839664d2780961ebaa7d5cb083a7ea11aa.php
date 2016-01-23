<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_43a643949505f7b0cb60fa716a45625a8b309b2d39535415ed52161c8da19b21 extends Twig_Template
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
        $__internal_c6b1e92a69ef9d71e6e5156a95583561947b018682107575abdd80de9c53ffe0 = $this->env->getExtension("native_profiler");
        $__internal_c6b1e92a69ef9d71e6e5156a95583561947b018682107575abdd80de9c53ffe0->enter($__internal_c6b1e92a69ef9d71e6e5156a95583561947b018682107575abdd80de9c53ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b1e92a69ef9d71e6e5156a95583561947b018682107575abdd80de9c53ffe0->leave($__internal_c6b1e92a69ef9d71e6e5156a95583561947b018682107575abdd80de9c53ffe0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_308c89087189ca1b70974647ab1ded5fac3cf989ad5d01d54545445c46db6667 = $this->env->getExtension("native_profiler");
        $__internal_308c89087189ca1b70974647ab1ded5fac3cf989ad5d01d54545445c46db6667->enter($__internal_308c89087189ca1b70974647ab1ded5fac3cf989ad5d01d54545445c46db6667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_308c89087189ca1b70974647ab1ded5fac3cf989ad5d01d54545445c46db6667->leave($__internal_308c89087189ca1b70974647ab1ded5fac3cf989ad5d01d54545445c46db6667_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa86f5127bb35cd03c0f1792705719c3bd3774226ba37876b98ba1aae99c1ca3 = $this->env->getExtension("native_profiler");
        $__internal_fa86f5127bb35cd03c0f1792705719c3bd3774226ba37876b98ba1aae99c1ca3->enter($__internal_fa86f5127bb35cd03c0f1792705719c3bd3774226ba37876b98ba1aae99c1ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa86f5127bb35cd03c0f1792705719c3bd3774226ba37876b98ba1aae99c1ca3->leave($__internal_fa86f5127bb35cd03c0f1792705719c3bd3774226ba37876b98ba1aae99c1ca3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28fd6f247d2d86f85db66b0d76a0e0ab34dafe19ffc476cfb1ac87f30ee11d92 = $this->env->getExtension("native_profiler");
        $__internal_28fd6f247d2d86f85db66b0d76a0e0ab34dafe19ffc476cfb1ac87f30ee11d92->enter($__internal_28fd6f247d2d86f85db66b0d76a0e0ab34dafe19ffc476cfb1ac87f30ee11d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_28fd6f247d2d86f85db66b0d76a0e0ab34dafe19ffc476cfb1ac87f30ee11d92->leave($__internal_28fd6f247d2d86f85db66b0d76a0e0ab34dafe19ffc476cfb1ac87f30ee11d92_prof);

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
