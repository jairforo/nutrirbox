<?php

/* NutrirBoxBundle:TipoIngrediente:show.html.twig */
class __TwigTemplate_fb0cfccfadb9ec61f330d4410fd9f0eb3a4b27e3841f3dfb6f5a2716d8514411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:TipoIngrediente:show.html.twig", 1);
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
        $__internal_b5f62534b9297d6390a3acd66108aba5c699150d82a174fea166b6fdd022756d = $this->env->getExtension("native_profiler");
        $__internal_b5f62534b9297d6390a3acd66108aba5c699150d82a174fea166b6fdd022756d->enter($__internal_b5f62534b9297d6390a3acd66108aba5c699150d82a174fea166b6fdd022756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:TipoIngrediente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f62534b9297d6390a3acd66108aba5c699150d82a174fea166b6fdd022756d->leave($__internal_b5f62534b9297d6390a3acd66108aba5c699150d82a174fea166b6fdd022756d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_40f1612679771021f46fdb86814b348dfdcb4b003d4ba76db006c390bf3e06c9 = $this->env->getExtension("native_profiler");
        $__internal_40f1612679771021f46fdb86814b348dfdcb4b003d4ba76db006c390bf3e06c9->enter($__internal_40f1612679771021f46fdb86814b348dfdcb4b003d4ba76db006c390bf3e06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tipo de Ingrediente ";
        
        $__internal_40f1612679771021f46fdb86814b348dfdcb4b003d4ba76db006c390bf3e06c9->leave($__internal_40f1612679771021f46fdb86814b348dfdcb4b003d4ba76db006c390bf3e06c9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_8f84b3f71d304b54ca2304cc59c36012eaf972aa426c1420a151da962612acf1 = $this->env->getExtension("native_profiler");
        $__internal_8f84b3f71d304b54ca2304cc59c36012eaf972aa426c1420a151da962612acf1->enter($__internal_8f84b3f71d304b54ca2304cc59c36012eaf972aa426c1420a151da962612acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Tipo de Ingrediente ";
        
        $__internal_8f84b3f71d304b54ca2304cc59c36012eaf972aa426c1420a151da962612acf1->leave($__internal_8f84b3f71d304b54ca2304cc59c36012eaf972aa426c1420a151da962612acf1_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_ff1facfe502a7ce77b7328b52b6b3daf00627964e1bb562da881700f87b4c8b2 = $this->env->getExtension("native_profiler");
        $__internal_ff1facfe502a7ce77b7328b52b6b3daf00627964e1bb562da881700f87b4c8b2->enter($__internal_ff1facfe502a7ce77b7328b52b6b3daf00627964e1bb562da881700f87b4c8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Detalhe ";
        
        $__internal_ff1facfe502a7ce77b7328b52b6b3daf00627964e1bb562da881700f87b4c8b2->leave($__internal_ff1facfe502a7ce77b7328b52b6b3daf00627964e1bb562da881700f87b4c8b2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_40084586a50a24f62653a17a697d2b7d72a773b1d022d87532babc3cd02aa3fc = $this->env->getExtension("native_profiler");
        $__internal_40084586a50a24f62653a17a697d2b7d72a773b1d022d87532babc3cd02aa3fc->enter($__internal_40084586a50a24f62653a17a697d2b7d72a773b1d022d87532babc3cd02aa3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"profile-user-info profile-user-info-striped\">
            <div class=\"profile-info-row\">
                <div class=\"profile-info-name\"> Tipoingrediente </div>
                <!-- integer -->                <div class=\"profile-info-value\">
                    <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coTipoIngrediente", array()), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"profile-info-row\">
                <div class=\"profile-info-name\"> Nome </div>
                <!-- string -->                <div class=\"profile-info-value\">
                    <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noNome", array()), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"profile-info-row\">
                <div class=\"profile-info-name\"> Ativo </div>
                <!-- boolean -->                
                <div class=\"profile-info-value\">
                    <span>";
        // line 24
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isAtivo", array()) == 1)) {
            echo " Sim ";
        } else {
            echo " Não ";
        }
        echo "</span>
                </div>
            </div>
    </div>
        
    <div class=\"hr dotted\"></div>

        <p>
    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente");
        echo "\" class=\"btn\">
        <i class=\"ace-icon fa fa-arrow-left bigger-120\"></i>
        Listar
    </a>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coTipoIngrediente", array()))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
            Editar
        </a>
                <a href=\"#\" class=\"btn btn-delete\">
            <i class=\"ace-icon fa fa-trash bigger-120\"></i>
            Deletar
        </a>
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </p>";
        
        $__internal_40084586a50a24f62653a17a697d2b7d72a773b1d022d87532babc3cd02aa3fc->leave($__internal_40084586a50a24f62653a17a697d2b7d72a773b1d022d87532babc3cd02aa3fc_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77c03051c5858242570f46a502ad7586c06ecbd88bf09fc5339839c98fd61da5 = $this->env->getExtension("native_profiler");
        $__internal_77c03051c5858242570f46a502ad7586c06ecbd88bf09fc5339839c98fd61da5->enter($__internal_77c03051c5858242570f46a502ad7586c06ecbd88bf09fc5339839c98fd61da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/deletar.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_77c03051c5858242570f46a502ad7586c06ecbd88bf09fc5339839c98fd61da5->leave($__internal_77c03051c5858242570f46a502ad7586c06ecbd88bf09fc5339839c98fd61da5_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:TipoIngrediente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  153 => 48,  147 => 47,  138 => 44,  127 => 36,  120 => 32,  105 => 24,  95 => 17,  86 => 11,  80 => 7,  74 => 6,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/*     {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/*     {% block title %} Tipo de Ingrediente {% endblock %}*/
/*     {% block header %} Tipo de Ingrediente {% endblock %}*/
/*     {% block subheader %} Detalhe {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <div class="profile-user-info profile-user-info-striped">*/
/*             <div class="profile-info-row">*/
/*                 <div class="profile-info-name"> Tipoingrediente </div>*/
/*                 <!-- integer -->                <div class="profile-info-value">*/
/*                     <span>{{ entity.coTipoIngrediente }}</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="profile-info-row">*/
/*                 <div class="profile-info-name"> Nome </div>*/
/*                 <!-- string -->                <div class="profile-info-value">*/
/*                     <span>{{ entity.noNome }}</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="profile-info-row">*/
/*                 <div class="profile-info-name"> Ativo </div>*/
/*                 <!-- boolean -->                */
/*                 <div class="profile-info-value">*/
/*                     <span>{% if entity.isAtivo == 1 %} Sim {% else %} Não {% endif %}</span>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/*         */
/*     <div class="hr dotted"></div>*/
/* */
/*         <p>*/
/*     <a href="{{ path('admin_tipoingrediente') }}" class="btn">*/
/*         <i class="ace-icon fa fa-arrow-left bigger-120"></i>*/
/*         Listar*/
/*     </a>*/
/*             <a href="{{ path('admin_tipoingrediente_edit', { 'id': entity.coTipoIngrediente }) }}" class="btn">*/
/*             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*             Editar*/
/*         </a>*/
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
