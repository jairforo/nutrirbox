<?php

/* NutrirBoxBundle:Perfil:new.html.twig */
class __TwigTemplate_9dfaff553d5cbcb636a01baadf60867bb4de43a6391a0ef0c55f21a27d99251f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Perfil:new.html.twig", 1);
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
        $__internal_c88d360568304588a81713a48917618e9acbc6eff4a63c3ac5346b51fe6d0cf5 = $this->env->getExtension("native_profiler");
        $__internal_c88d360568304588a81713a48917618e9acbc6eff4a63c3ac5346b51fe6d0cf5->enter($__internal_c88d360568304588a81713a48917618e9acbc6eff4a63c3ac5346b51fe6d0cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Perfil:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88d360568304588a81713a48917618e9acbc6eff4a63c3ac5346b51fe6d0cf5->leave($__internal_c88d360568304588a81713a48917618e9acbc6eff4a63c3ac5346b51fe6d0cf5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bba5770f97524dc9b18d4a2f6654661159ca3f225574f328547fbd1fb5f1acef = $this->env->getExtension("native_profiler");
        $__internal_bba5770f97524dc9b18d4a2f6654661159ca3f225574f328547fbd1fb5f1acef->enter($__internal_bba5770f97524dc9b18d4a2f6654661159ca3f225574f328547fbd1fb5f1acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Perfil ";
        
        $__internal_bba5770f97524dc9b18d4a2f6654661159ca3f225574f328547fbd1fb5f1acef->leave($__internal_bba5770f97524dc9b18d4a2f6654661159ca3f225574f328547fbd1fb5f1acef_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5670b6c33ccebe54fbecbe1223fe09fb0bc429fd603f9603d1978763548ebbde = $this->env->getExtension("native_profiler");
        $__internal_5670b6c33ccebe54fbecbe1223fe09fb0bc429fd603f9603d1978763548ebbde->enter($__internal_5670b6c33ccebe54fbecbe1223fe09fb0bc429fd603f9603d1978763548ebbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Perfil ";
        
        $__internal_5670b6c33ccebe54fbecbe1223fe09fb0bc429fd603f9603d1978763548ebbde->leave($__internal_5670b6c33ccebe54fbecbe1223fe09fb0bc429fd603f9603d1978763548ebbde_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_97ae5562e417194d063f9323ab06df4b781f2bfc617b9d2dc149efcb8c3188fc = $this->env->getExtension("native_profiler");
        $__internal_97ae5562e417194d063f9323ab06df4b781f2bfc617b9d2dc149efcb8c3188fc->enter($__internal_97ae5562e417194d063f9323ab06df4b781f2bfc617b9d2dc149efcb8c3188fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Novo ";
        
        $__internal_97ae5562e417194d063f9323ab06df4b781f2bfc617b9d2dc149efcb8c3188fc->leave($__internal_97ae5562e417194d063f9323ab06df4b781f2bfc617b9d2dc149efcb8c3188fc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d47c0c4d511869f609dae9a3f2167d83914ade405c5178fda7713c6a674256f = $this->env->getExtension("native_profiler");
        $__internal_2d47c0c4d511869f609dae9a3f2167d83914ade405c5178fda7713c6a674256f->enter($__internal_2d47c0c4d511869f609dae9a3f2167d83914ade405c5178fda7713c6a674256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_perfil");
        echo "\" class=\"btn\">
        <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
        Listar
    </a>
        </p>";
        
        $__internal_2d47c0c4d511869f609dae9a3f2167d83914ade405c5178fda7713c6a674256f->leave($__internal_2d47c0c4d511869f609dae9a3f2167d83914ade405c5178fda7713c6a674256f_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e50fc82a5f616f7a5cd8d834784dcb08451a41253f385f81119473ca3476d42 = $this->env->getExtension("native_profiler");
        $__internal_1e50fc82a5f616f7a5cd8d834784dcb08451a41253f385f81119473ca3476d42->enter($__internal_1e50fc82a5f616f7a5cd8d834784dcb08451a41253f385f81119473ca3476d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/formulario.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_1e50fc82a5f616f7a5cd8d834784dcb08451a41253f385f81119473ca3476d42->leave($__internal_1e50fc82a5f616f7a5cd8d834784dcb08451a41253f385f81119473ca3476d42_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Perfil:new.html.twig";
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
/*     {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/*     {% block title %} Perfil {% endblock %}*/
/*     {% block header %} Perfil {% endblock %}*/
/*     {% block subheader %} Novo {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_perfil') }}" class="btn">*/
/*         <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*         Listar*/
/*     </a>*/
/*         </p>{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*    {{ parent() }}*/
/*    <script src='{{asset('bundles/nutrirbox/dist/js/config/formulario.js')}}'></script>*/
/* {% endblock %}*/
