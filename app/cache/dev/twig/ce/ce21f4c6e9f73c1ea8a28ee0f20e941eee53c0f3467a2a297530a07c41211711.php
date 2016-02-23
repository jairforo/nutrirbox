<?php

/* NutrirBoxBundle:Perfil:edit.html.twig */
class __TwigTemplate_382064347d63e201a2bccbc8272fe831e96646ead4277e78eb3824984767eed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Perfil:edit.html.twig", 1);
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
        $__internal_e41fd847b25bb469a1b24dc8379967cc6bd036b2ffab3b592bfc6dcca0cbf7c4 = $this->env->getExtension("native_profiler");
        $__internal_e41fd847b25bb469a1b24dc8379967cc6bd036b2ffab3b592bfc6dcca0cbf7c4->enter($__internal_e41fd847b25bb469a1b24dc8379967cc6bd036b2ffab3b592bfc6dcca0cbf7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Perfil:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41fd847b25bb469a1b24dc8379967cc6bd036b2ffab3b592bfc6dcca0cbf7c4->leave($__internal_e41fd847b25bb469a1b24dc8379967cc6bd036b2ffab3b592bfc6dcca0cbf7c4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_122e26e9ab3f71e1f47a2e9e73e173921952e58cb3db32025b2c06f7cfc49cdd = $this->env->getExtension("native_profiler");
        $__internal_122e26e9ab3f71e1f47a2e9e73e173921952e58cb3db32025b2c06f7cfc49cdd->enter($__internal_122e26e9ab3f71e1f47a2e9e73e173921952e58cb3db32025b2c06f7cfc49cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Perfil ";
        
        $__internal_122e26e9ab3f71e1f47a2e9e73e173921952e58cb3db32025b2c06f7cfc49cdd->leave($__internal_122e26e9ab3f71e1f47a2e9e73e173921952e58cb3db32025b2c06f7cfc49cdd_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_18681bf491e77bcf110165593055983828e57f9d6dcc727072ae8b5dc80c09b7 = $this->env->getExtension("native_profiler");
        $__internal_18681bf491e77bcf110165593055983828e57f9d6dcc727072ae8b5dc80c09b7->enter($__internal_18681bf491e77bcf110165593055983828e57f9d6dcc727072ae8b5dc80c09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Perfil ";
        
        $__internal_18681bf491e77bcf110165593055983828e57f9d6dcc727072ae8b5dc80c09b7->leave($__internal_18681bf491e77bcf110165593055983828e57f9d6dcc727072ae8b5dc80c09b7_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_4d0a5bdf5b72ca72c6c4a71704cc3698afefc5b97739b4f078844715ba5ab3de = $this->env->getExtension("native_profiler");
        $__internal_4d0a5bdf5b72ca72c6c4a71704cc3698afefc5b97739b4f078844715ba5ab3de->enter($__internal_4d0a5bdf5b72ca72c6c4a71704cc3698afefc5b97739b4f078844715ba5ab3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Editar ";
        
        $__internal_4d0a5bdf5b72ca72c6c4a71704cc3698afefc5b97739b4f078844715ba5ab3de->leave($__internal_4d0a5bdf5b72ca72c6c4a71704cc3698afefc5b97739b4f078844715ba5ab3de_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5f4077803bc8d421dd7f5ffa4d2df3069ffdd12d96981deb7f9b122c6515e17 = $this->env->getExtension("native_profiler");
        $__internal_f5f4077803bc8d421dd7f5ffa4d2df3069ffdd12d96981deb7f9b122c6515e17->enter($__internal_f5f4077803bc8d421dd7f5ffa4d2df3069ffdd12d96981deb7f9b122c6515e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_perfil");
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
        
        $__internal_f5f4077803bc8d421dd7f5ffa4d2df3069ffdd12d96981deb7f9b122c6515e17->leave($__internal_f5f4077803bc8d421dd7f5ffa4d2df3069ffdd12d96981deb7f9b122c6515e17_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f1cdcd5fbfb32e62f380eb947d784f462aef8cec64828d278e0fdb6355d643d = $this->env->getExtension("native_profiler");
        $__internal_3f1cdcd5fbfb32e62f380eb947d784f462aef8cec64828d278e0fdb6355d643d->enter($__internal_3f1cdcd5fbfb32e62f380eb947d784f462aef8cec64828d278e0fdb6355d643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/deletar.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_3f1cdcd5fbfb32e62f380eb947d784f462aef8cec64828d278e0fdb6355d643d->leave($__internal_3f1cdcd5fbfb32e62f380eb947d784f462aef8cec64828d278e0fdb6355d643d_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Perfil:edit.html.twig";
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
/*     {% block title %} Perfil {% endblock %}*/
/*     {% block header %} Perfil {% endblock %}*/
/*     {% block subheader %} Editar {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_perfil') }}" class="btn">*/
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
