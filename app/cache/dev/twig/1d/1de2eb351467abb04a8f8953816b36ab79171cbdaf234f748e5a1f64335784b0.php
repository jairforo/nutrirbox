<?php

/* NutrirBoxBundle:Default:dashboardAdmin.html.twig */
class __TwigTemplate_2868d3da906fac5d755e0d6e8e9751435de54ec57bb367f0d0e9a2860088d989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Default:dashboardAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'subheader' => array($this, 'block_subheader'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NutrirBoxBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a450f65e13ce3f254230a1ac4508bb0a7ef6504335b986218ad0f3a72426fd48 = $this->env->getExtension("native_profiler");
        $__internal_a450f65e13ce3f254230a1ac4508bb0a7ef6504335b986218ad0f3a72426fd48->enter($__internal_a450f65e13ce3f254230a1ac4508bb0a7ef6504335b986218ad0f3a72426fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Default:dashboardAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a450f65e13ce3f254230a1ac4508bb0a7ef6504335b986218ad0f3a72426fd48->leave($__internal_a450f65e13ce3f254230a1ac4508bb0a7ef6504335b986218ad0f3a72426fd48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95cce248c289b20d38ab28b9ef84993904a7ae49480e47bc8c49a2527c31943a = $this->env->getExtension("native_profiler");
        $__internal_95cce248c289b20d38ab28b9ef84993904a7ae49480e47bc8c49a2527c31943a->enter($__internal_95cce248c289b20d38ab28b9ef84993904a7ae49480e47bc8c49a2527c31943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_95cce248c289b20d38ab28b9ef84993904a7ae49480e47bc8c49a2527c31943a->leave($__internal_95cce248c289b20d38ab28b9ef84993904a7ae49480e47bc8c49a2527c31943a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c914875fbc80ce341ae5108160150083184496c9c0b9232b134d0f65387c32a4 = $this->env->getExtension("native_profiler");
        $__internal_c914875fbc80ce341ae5108160150083184496c9c0b9232b134d0f65387c32a4->enter($__internal_c914875fbc80ce341ae5108160150083184496c9c0b9232b134d0f65387c32a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Dashboard ";
        
        $__internal_c914875fbc80ce341ae5108160150083184496c9c0b9232b134d0f65387c32a4->leave($__internal_c914875fbc80ce341ae5108160150083184496c9c0b9232b134d0f65387c32a4_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_3b54c5d03c65f870ce18278b1a1954a7dc970ba1ace70d487290f8ebb04e0e9d = $this->env->getExtension("native_profiler");
        $__internal_3b54c5d03c65f870ce18278b1a1954a7dc970ba1ace70d487290f8ebb04e0e9d->enter($__internal_3b54c5d03c65f870ce18278b1a1954a7dc970ba1ace70d487290f8ebb04e0e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Estatíticas ";
        
        $__internal_3b54c5d03c65f870ce18278b1a1954a7dc970ba1ace70d487290f8ebb04e0e9d->leave($__internal_3b54c5d03c65f870ce18278b1a1954a7dc970ba1ace70d487290f8ebb04e0e9d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e146bbc6a2a73156ba5880351aa03e0f62338af233856199436fc1eeaf285d17 = $this->env->getExtension("native_profiler");
        $__internal_e146bbc6a2a73156ba5880351aa03e0f62338af233856199436fc1eeaf285d17->enter($__internal_e146bbc6a2a73156ba5880351aa03e0f62338af233856199436fc1eeaf285d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
            </div>
        </div>
    </div>
";
        
        $__internal_e146bbc6a2a73156ba5880351aa03e0f62338af233856199436fc1eeaf285d17->leave($__internal_e146bbc6a2a73156ba5880351aa03e0f62338af233856199436fc1eeaf285d17_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Default:dashboardAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "NutrirBoxBundle::base.html.twig" %}*/
/* {% block title 'Dashboard' %}*/
/* {% block header %} Dashboard {% endblock %}*/
/* {% block subheader %} Estatíticas {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="row">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
