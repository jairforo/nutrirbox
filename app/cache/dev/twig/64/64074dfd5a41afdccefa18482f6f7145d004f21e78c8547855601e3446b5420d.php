<?php

/* NutrirBoxBundle:TipoIngrediente:new.html.twig */
class __TwigTemplate_c7f0c180766b971cb1d9ac442f3e2adcb95e91942a5bdfcc110c2f936d187d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:TipoIngrediente:new.html.twig", 1);
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
        $__internal_50f42c664ec8f6ad40c812b5fa08549d31cd71d4bbbe4ba0a29fb69f3887f4f2 = $this->env->getExtension("native_profiler");
        $__internal_50f42c664ec8f6ad40c812b5fa08549d31cd71d4bbbe4ba0a29fb69f3887f4f2->enter($__internal_50f42c664ec8f6ad40c812b5fa08549d31cd71d4bbbe4ba0a29fb69f3887f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:TipoIngrediente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f42c664ec8f6ad40c812b5fa08549d31cd71d4bbbe4ba0a29fb69f3887f4f2->leave($__internal_50f42c664ec8f6ad40c812b5fa08549d31cd71d4bbbe4ba0a29fb69f3887f4f2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f2f94dbbe8e716cf0dfba5f61330c51a60cb64d4ca560893ad9145c6e95008 = $this->env->getExtension("native_profiler");
        $__internal_08f2f94dbbe8e716cf0dfba5f61330c51a60cb64d4ca560893ad9145c6e95008->enter($__internal_08f2f94dbbe8e716cf0dfba5f61330c51a60cb64d4ca560893ad9145c6e95008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tipo de Ingrediente ";
        
        $__internal_08f2f94dbbe8e716cf0dfba5f61330c51a60cb64d4ca560893ad9145c6e95008->leave($__internal_08f2f94dbbe8e716cf0dfba5f61330c51a60cb64d4ca560893ad9145c6e95008_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_be5234897226529cade199600907dc42f70688584bc135cedc402324349fd50c = $this->env->getExtension("native_profiler");
        $__internal_be5234897226529cade199600907dc42f70688584bc135cedc402324349fd50c->enter($__internal_be5234897226529cade199600907dc42f70688584bc135cedc402324349fd50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Tipo de Ingrediente ";
        
        $__internal_be5234897226529cade199600907dc42f70688584bc135cedc402324349fd50c->leave($__internal_be5234897226529cade199600907dc42f70688584bc135cedc402324349fd50c_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_1a12a9c913043dc26915416a5ac7fce17b1974d6845df219b4cbea841bdfd061 = $this->env->getExtension("native_profiler");
        $__internal_1a12a9c913043dc26915416a5ac7fce17b1974d6845df219b4cbea841bdfd061->enter($__internal_1a12a9c913043dc26915416a5ac7fce17b1974d6845df219b4cbea841bdfd061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Novo ";
        
        $__internal_1a12a9c913043dc26915416a5ac7fce17b1974d6845df219b4cbea841bdfd061->leave($__internal_1a12a9c913043dc26915416a5ac7fce17b1974d6845df219b4cbea841bdfd061_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a7da289b78867f4b4aedf623a70189b14d40c1ba9d3a291893838aedd9f966 = $this->env->getExtension("native_profiler");
        $__internal_68a7da289b78867f4b4aedf623a70189b14d40c1ba9d3a291893838aedd9f966->enter($__internal_68a7da289b78867f4b4aedf623a70189b14d40c1ba9d3a291893838aedd9f966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente");
        echo "\" class=\"btn\">
        <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
        Listar
    </a>
        </p>";
        
        $__internal_68a7da289b78867f4b4aedf623a70189b14d40c1ba9d3a291893838aedd9f966->leave($__internal_68a7da289b78867f4b4aedf623a70189b14d40c1ba9d3a291893838aedd9f966_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c252a484f64760b995a3b6b2d2bd6c196af8d4bf767093fcb62d662ca6c58294 = $this->env->getExtension("native_profiler");
        $__internal_c252a484f64760b995a3b6b2d2bd6c196af8d4bf767093fcb62d662ca6c58294->enter($__internal_c252a484f64760b995a3b6b2d2bd6c196af8d4bf767093fcb62d662ca6c58294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/formulario.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_c252a484f64760b995a3b6b2d2bd6c196af8d4bf767093fcb62d662ca6c58294->leave($__internal_c252a484f64760b995a3b6b2d2bd6c196af8d4bf767093fcb62d662ca6c58294_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:TipoIngrediente:new.html.twig";
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
/*     {% block title %} Tipo de Ingrediente {% endblock %}*/
/*     {% block header %} Tipo de Ingrediente {% endblock %}*/
/*     {% block subheader %} Novo {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_tipoingrediente') }}" class="btn">*/
/*         <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*         Listar*/
/*     </a>*/
/*         </p>{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*    {{ parent() }}*/
/*    <script src='{{asset('bundles/nutrirbox/dist/js/config/formulario.js')}}'></script>*/
/* {% endblock %}*/
