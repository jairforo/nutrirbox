<?php

/* NutrirBoxBundle::base.html.twig */
class __TwigTemplate_76abfa41afebc67437fc0cf9fc7eb8af13b0afd4e8894fd222356085f0fedb71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NutrirBoxBundle::base.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe66fcc0717caf39efffbe590f382ba04e583cccfc6c8e541e0e360887642780 = $this->env->getExtension("native_profiler");
        $__internal_fe66fcc0717caf39efffbe590f382ba04e583cccfc6c8e541e0e360887642780->enter($__internal_fe66fcc0717caf39efffbe590f382ba04e583cccfc6c8e541e0e360887642780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe66fcc0717caf39efffbe590f382ba04e583cccfc6c8e541e0e360887642780->leave($__internal_fe66fcc0717caf39efffbe590f382ba04e583cccfc6c8e541e0e360887642780_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
