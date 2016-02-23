<?php

/* NutrirBoxBundle:Pessoa:new.html.twig */
class __TwigTemplate_4feac471ea6c598477387af11d7300fba399a4ecfdc938f9e8a8ab271adcb854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Pessoa:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'subheader' => array($this, 'block_subheader'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NutrirBoxBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bcad53ed43b620bc755cb2075a036fdc644a737ed8dd95a3c40551a46c2bd53 = $this->env->getExtension("native_profiler");
        $__internal_9bcad53ed43b620bc755cb2075a036fdc644a737ed8dd95a3c40551a46c2bd53->enter($__internal_9bcad53ed43b620bc755cb2075a036fdc644a737ed8dd95a3c40551a46c2bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Pessoa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bcad53ed43b620bc755cb2075a036fdc644a737ed8dd95a3c40551a46c2bd53->leave($__internal_9bcad53ed43b620bc755cb2075a036fdc644a737ed8dd95a3c40551a46c2bd53_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_47244c25344db71f216791d3c30d866de5e7400c7572404fc09d532f6b487769 = $this->env->getExtension("native_profiler");
        $__internal_47244c25344db71f216791d3c30d866de5e7400c7572404fc09d532f6b487769->enter($__internal_47244c25344db71f216791d3c30d866de5e7400c7572404fc09d532f6b487769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cliente ";
        
        $__internal_47244c25344db71f216791d3c30d866de5e7400c7572404fc09d532f6b487769->leave($__internal_47244c25344db71f216791d3c30d866de5e7400c7572404fc09d532f6b487769_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f9402c6ee3e43b998949d2da0a10b24314e627a90c3c80d41aa52fc597f78c8b = $this->env->getExtension("native_profiler");
        $__internal_f9402c6ee3e43b998949d2da0a10b24314e627a90c3c80d41aa52fc597f78c8b->enter($__internal_f9402c6ee3e43b998949d2da0a10b24314e627a90c3c80d41aa52fc597f78c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Cliente ";
        
        $__internal_f9402c6ee3e43b998949d2da0a10b24314e627a90c3c80d41aa52fc597f78c8b->leave($__internal_f9402c6ee3e43b998949d2da0a10b24314e627a90c3c80d41aa52fc597f78c8b_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_67c4b6b94fc48c7642244e01113dd5da94c4f0cac39288bf1962ea31dcea757f = $this->env->getExtension("native_profiler");
        $__internal_67c4b6b94fc48c7642244e01113dd5da94c4f0cac39288bf1962ea31dcea757f->enter($__internal_67c4b6b94fc48c7642244e01113dd5da94c4f0cac39288bf1962ea31dcea757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Novo ";
        
        $__internal_67c4b6b94fc48c7642244e01113dd5da94c4f0cac39288bf1962ea31dcea757f->leave($__internal_67c4b6b94fc48c7642244e01113dd5da94c4f0cac39288bf1962ea31dcea757f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5acd7308ed7434fcb7e81d3fee4750ee02dd14122807916019827b1a012ad616 = $this->env->getExtension("native_profiler");
        $__internal_5acd7308ed7434fcb7e81d3fee4750ee02dd14122807916019827b1a012ad616->enter($__internal_5acd7308ed7434fcb7e81d3fee4750ee02dd14122807916019827b1a012ad616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <p>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_pessoa");
        echo "\" class=\"btn\">
            <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
            Listar
        </a>
    </p>";
        
        $__internal_5acd7308ed7434fcb7e81d3fee4750ee02dd14122807916019827b1a012ad616->leave($__internal_5acd7308ed7434fcb7e81d3fee4750ee02dd14122807916019827b1a012ad616_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2427efe01046b97cb12bdf636dba167cde331e30962d3d830fda24898498356b = $this->env->getExtension("native_profiler");
        $__internal_2427efe01046b97cb12bdf636dba167cde331e30962d3d830fda24898498356b->enter($__internal_2427efe01046b97cb12bdf636dba167cde331e30962d3d830fda24898498356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/formulario.js"), "html", null, true);
        echo "'></script>
    ";
        
        $__internal_2427efe01046b97cb12bdf636dba167cde331e30962d3d830fda24898498356b->leave($__internal_2427efe01046b97cb12bdf636dba167cde331e30962d3d830fda24898498356b_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Pessoa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  104 => 18,  98 => 17,  86 => 11,  80 => 8,  74 => 6,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/* {% block title %} Cliente {% endblock %}*/
/* {% block header %} Cliente {% endblock %}*/
/* {% block subheader %} Novo {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(form) }}*/
/* */
/*     <p>*/
/*         <a href="{{ path('admin_pessoa') }}" class="btn">*/
/*             <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*             Listar*/
/*         </a>*/
/*     </p>{% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <script src='{{asset('bundles/nutrirbox/dist/js/config/formulario.js')}}'></script>*/
/*     {% endblock %}*/
