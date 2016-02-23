<?php

/* NutrirBoxBundle:TipoIngrediente:edit.html.twig */
class __TwigTemplate_99fa81339d042421ea0ac50c4f1d97d8c88762146681f00e53ad8aac0f86f674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:TipoIngrediente:edit.html.twig", 1);
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
        $__internal_f81042650b7dd4123511745f1475a2b9a4c1fb994139384086ae438c29c1b71b = $this->env->getExtension("native_profiler");
        $__internal_f81042650b7dd4123511745f1475a2b9a4c1fb994139384086ae438c29c1b71b->enter($__internal_f81042650b7dd4123511745f1475a2b9a4c1fb994139384086ae438c29c1b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:TipoIngrediente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81042650b7dd4123511745f1475a2b9a4c1fb994139384086ae438c29c1b71b->leave($__internal_f81042650b7dd4123511745f1475a2b9a4c1fb994139384086ae438c29c1b71b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_42b09d4e54308035a3a99f51737770c2ec3571887955100f787126b2f09eec48 = $this->env->getExtension("native_profiler");
        $__internal_42b09d4e54308035a3a99f51737770c2ec3571887955100f787126b2f09eec48->enter($__internal_42b09d4e54308035a3a99f51737770c2ec3571887955100f787126b2f09eec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tipo de Ingrediente ";
        
        $__internal_42b09d4e54308035a3a99f51737770c2ec3571887955100f787126b2f09eec48->leave($__internal_42b09d4e54308035a3a99f51737770c2ec3571887955100f787126b2f09eec48_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_77da212622cc2bea7782fecdbb182d013d37166c8d3003037d9411216c5a3730 = $this->env->getExtension("native_profiler");
        $__internal_77da212622cc2bea7782fecdbb182d013d37166c8d3003037d9411216c5a3730->enter($__internal_77da212622cc2bea7782fecdbb182d013d37166c8d3003037d9411216c5a3730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Tipo de Ingrediente ";
        
        $__internal_77da212622cc2bea7782fecdbb182d013d37166c8d3003037d9411216c5a3730->leave($__internal_77da212622cc2bea7782fecdbb182d013d37166c8d3003037d9411216c5a3730_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_d313e31d79147fe3066f8e942aeeab98c801a963a69b8da15e70fcd33e75fcbe = $this->env->getExtension("native_profiler");
        $__internal_d313e31d79147fe3066f8e942aeeab98c801a963a69b8da15e70fcd33e75fcbe->enter($__internal_d313e31d79147fe3066f8e942aeeab98c801a963a69b8da15e70fcd33e75fcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Editar ";
        
        $__internal_d313e31d79147fe3066f8e942aeeab98c801a963a69b8da15e70fcd33e75fcbe->leave($__internal_d313e31d79147fe3066f8e942aeeab98c801a963a69b8da15e70fcd33e75fcbe_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65023edf654cdd307a1084936f60b696228922e5b30f6687111566e861bdbf7 = $this->env->getExtension("native_profiler");
        $__internal_e65023edf654cdd307a1084936f60b696228922e5b30f6687111566e861bdbf7->enter($__internal_e65023edf654cdd307a1084936f60b696228922e5b30f6687111566e861bdbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente");
        echo "\" class=\"btn\">
        <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
        Listar
    </a>
                <a href=\"#\" class=\"btn btn-delete\">
            <i class=\"ace-icon fa fa-trash bigger-120\"></i>
            Deletar
        </a>
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </p>";
        
        $__internal_e65023edf654cdd307a1084936f60b696228922e5b30f6687111566e861bdbf7->leave($__internal_e65023edf654cdd307a1084936f60b696228922e5b30f6687111566e861bdbf7_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c27711279806f19dc4074b6d0964bca126eeef6cc85900a4c0bfe815bab310e6 = $this->env->getExtension("native_profiler");
        $__internal_c27711279806f19dc4074b6d0964bca126eeef6cc85900a4c0bfe815bab310e6->enter($__internal_c27711279806f19dc4074b6d0964bca126eeef6cc85900a4c0bfe815bab310e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/deletar.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_c27711279806f19dc4074b6d0964bca126eeef6cc85900a4c0bfe815bab310e6->leave($__internal_c27711279806f19dc4074b6d0964bca126eeef6cc85900a4c0bfe815bab310e6_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:TipoIngrediente:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  112 => 23,  106 => 22,  97 => 19,  86 => 11,  80 => 8,  74 => 6,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/*     {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/*     {% block title %} Tipo de Ingrediente {% endblock %}*/
/*     {% block header %} Tipo de Ingrediente {% endblock %}*/
/*     {% block subheader %} Editar {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_tipoingrediente') }}" class="btn">*/
/*         <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*         Listar*/
/*     </a>*/
/*                 <a href="#" class="btn btn-delete">*/
/*             <i class="ace-icon fa fa-trash bigger-120"></i>*/
/*             Deletar*/
/*         </a>*/
/*         {{ form(delete_form) }}*/
/*     </p>{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/config/deletar.js')}}'></script>*/
/* {% endblock %}*/
/*  */
