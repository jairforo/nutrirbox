<?php

/* NutrirBoxBundle:Ingrediente:new.html.twig */
class __TwigTemplate_763d2878cf5538b61d7a2b2bb14f4257fb72a2ecad3b2060b4b98d92f126dd2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Ingrediente:new.html.twig", 1);
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
        $__internal_7b637ecc7f0c637cebe01ffd6c52800f86a5d6333b54eef98702b90338ccd761 = $this->env->getExtension("native_profiler");
        $__internal_7b637ecc7f0c637cebe01ffd6c52800f86a5d6333b54eef98702b90338ccd761->enter($__internal_7b637ecc7f0c637cebe01ffd6c52800f86a5d6333b54eef98702b90338ccd761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Ingrediente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b637ecc7f0c637cebe01ffd6c52800f86a5d6333b54eef98702b90338ccd761->leave($__internal_7b637ecc7f0c637cebe01ffd6c52800f86a5d6333b54eef98702b90338ccd761_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8e7d1b2bdec1eb8c53d6bf110731ddb9a7d9e0108200ee285abc49e6fca40b7 = $this->env->getExtension("native_profiler");
        $__internal_e8e7d1b2bdec1eb8c53d6bf110731ddb9a7d9e0108200ee285abc49e6fca40b7->enter($__internal_e8e7d1b2bdec1eb8c53d6bf110731ddb9a7d9e0108200ee285abc49e6fca40b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ingrediente ";
        
        $__internal_e8e7d1b2bdec1eb8c53d6bf110731ddb9a7d9e0108200ee285abc49e6fca40b7->leave($__internal_e8e7d1b2bdec1eb8c53d6bf110731ddb9a7d9e0108200ee285abc49e6fca40b7_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ff07171866fb0876577c5f2ab09d1b6e5f0cb6d135ccc331d35ac50aeb781d9 = $this->env->getExtension("native_profiler");
        $__internal_0ff07171866fb0876577c5f2ab09d1b6e5f0cb6d135ccc331d35ac50aeb781d9->enter($__internal_0ff07171866fb0876577c5f2ab09d1b6e5f0cb6d135ccc331d35ac50aeb781d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Ingrediente ";
        
        $__internal_0ff07171866fb0876577c5f2ab09d1b6e5f0cb6d135ccc331d35ac50aeb781d9->leave($__internal_0ff07171866fb0876577c5f2ab09d1b6e5f0cb6d135ccc331d35ac50aeb781d9_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_a702c3f00ce9c8e7634aa67b5b00081c69aca4f586fb69bc20811247727bc29e = $this->env->getExtension("native_profiler");
        $__internal_a702c3f00ce9c8e7634aa67b5b00081c69aca4f586fb69bc20811247727bc29e->enter($__internal_a702c3f00ce9c8e7634aa67b5b00081c69aca4f586fb69bc20811247727bc29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Novo ";
        
        $__internal_a702c3f00ce9c8e7634aa67b5b00081c69aca4f586fb69bc20811247727bc29e->leave($__internal_a702c3f00ce9c8e7634aa67b5b00081c69aca4f586fb69bc20811247727bc29e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5087a10caad7008ab3ac21f49a276b67d3e536cae843b733163a159d99a6f284 = $this->env->getExtension("native_profiler");
        $__internal_5087a10caad7008ab3ac21f49a276b67d3e536cae843b733163a159d99a6f284->enter($__internal_5087a10caad7008ab3ac21f49a276b67d3e536cae843b733163a159d99a6f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_ingrediente");
        echo "\" class=\"btn\">
        <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
        Listar
    </a>
        </p>";
        
        $__internal_5087a10caad7008ab3ac21f49a276b67d3e536cae843b733163a159d99a6f284->leave($__internal_5087a10caad7008ab3ac21f49a276b67d3e536cae843b733163a159d99a6f284_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecd27dc9aed059bdc6c70a1c1d8042888dabca9f3985b05fe3d4051994963675 = $this->env->getExtension("native_profiler");
        $__internal_ecd27dc9aed059bdc6c70a1c1d8042888dabca9f3985b05fe3d4051994963675->enter($__internal_ecd27dc9aed059bdc6c70a1c1d8042888dabca9f3985b05fe3d4051994963675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/formulario.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_ecd27dc9aed059bdc6c70a1c1d8042888dabca9f3985b05fe3d4051994963675->leave($__internal_ecd27dc9aed059bdc6c70a1c1d8042888dabca9f3985b05fe3d4051994963675_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Ingrediente:new.html.twig";
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
/*     {% block title %} Ingrediente {% endblock %}*/
/*     {% block header %} Ingrediente {% endblock %}*/
/*     {% block subheader %} Novo {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_ingrediente') }}" class="btn">*/
/*         <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*         Listar*/
/*     </a>*/
/*         </p>{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*    {{ parent() }}*/
/*    <script src='{{asset('bundles/nutrirbox/dist/js/config/formulario.js')}}'></script>*/
/* {% endblock %}*/
