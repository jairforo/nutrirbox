<?php

/* NutrirBoxBundle:Perfil:index.html.twig */
class __TwigTemplate_4b532f1317021d530092a1ceb7f2755c76181355a7b6a96c8616665cedf0a076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Perfil:index.html.twig", 1);
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
        $__internal_6a228641eec1a976e61192a37f17fff488b700142634f0ae9587d70a45d11c4f = $this->env->getExtension("native_profiler");
        $__internal_6a228641eec1a976e61192a37f17fff488b700142634f0ae9587d70a45d11c4f->enter($__internal_6a228641eec1a976e61192a37f17fff488b700142634f0ae9587d70a45d11c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Perfil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a228641eec1a976e61192a37f17fff488b700142634f0ae9587d70a45d11c4f->leave($__internal_6a228641eec1a976e61192a37f17fff488b700142634f0ae9587d70a45d11c4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_02d44c1d528eb16c9b02cc5eab9613a59ace9d654bf49740cb6c0e7daab4623a = $this->env->getExtension("native_profiler");
        $__internal_02d44c1d528eb16c9b02cc5eab9613a59ace9d654bf49740cb6c0e7daab4623a->enter($__internal_02d44c1d528eb16c9b02cc5eab9613a59ace9d654bf49740cb6c0e7daab4623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Perfil ";
        
        $__internal_02d44c1d528eb16c9b02cc5eab9613a59ace9d654bf49740cb6c0e7daab4623a->leave($__internal_02d44c1d528eb16c9b02cc5eab9613a59ace9d654bf49740cb6c0e7daab4623a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f990d603114c12e1fc67d76265c8ce526180e3e7aaa3402c0008890b1b25135 = $this->env->getExtension("native_profiler");
        $__internal_7f990d603114c12e1fc67d76265c8ce526180e3e7aaa3402c0008890b1b25135->enter($__internal_7f990d603114c12e1fc67d76265c8ce526180e3e7aaa3402c0008890b1b25135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Perfil ";
        
        $__internal_7f990d603114c12e1fc67d76265c8ce526180e3e7aaa3402c0008890b1b25135->leave($__internal_7f990d603114c12e1fc67d76265c8ce526180e3e7aaa3402c0008890b1b25135_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_c388cbf3987a4488ae0f8327e846446c9cbd822823f1dda9f575fa47501abf6f = $this->env->getExtension("native_profiler");
        $__internal_c388cbf3987a4488ae0f8327e846446c9cbd822823f1dda9f575fa47501abf6f->enter($__internal_c388cbf3987a4488ae0f8327e846446c9cbd822823f1dda9f575fa47501abf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Lista ";
        
        $__internal_c388cbf3987a4488ae0f8327e846446c9cbd822823f1dda9f575fa47501abf6f->leave($__internal_c388cbf3987a4488ae0f8327e846446c9cbd822823f1dda9f575fa47501abf6f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_15116e2e63a39bddedbf27dffef91e5f9a6675bc3a00034ec74ba109239ca5f3 = $this->env->getExtension("native_profiler");
        $__internal_15116e2e63a39bddedbf27dffef91e5f9a6675bc3a00034ec74ba109239ca5f3->enter($__internal_15116e2e63a39bddedbf27dffef91e5f9a6675bc3a00034ec74ba109239ca5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"clearfix\">
                        <div class=\"pull-right tableTools-container\"></div>
                    </div>
                    <div>
                        <table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th class=\"center\">
                                        <label class=\"pos-rel\">
                                            <input type=\"checkbox\" class=\"ace\" />
                                            <span class=\"lbl\"></span>
                                        </label>
                                    </th>                                        <th>Perfil</th>                                        <th>Nome</th>                                        <th>Ativo</th>                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                                <tr>
                                    <td class=\"center\">
                                        <label class=\"pos-rel\">
                                            <input type=\"checkbox\" class=\"ace\" />
                                            <span class=\"lbl\"></span>
                                        </label>
                                    </td>                                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_perfil_show", array("id" => $this->getAttribute($context["entity"], "coPerfil", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPerfil", array()), "html", null, true);
            echo "</a></td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noNome", array()), "html", null, true);
            echo "</td>                                            <td>";
            if (($this->getAttribute($context["entity"], "isAtivo", array()) == 1)) {
                echo " <span class=\"label label-success arrowed-in\">Sim</span> ";
            } else {
                echo " <span class=\"label label-danger arrowed-in\">Não</span> ";
            }
            echo "</td>                                            <td><div class=\"hidden-sm hidden-xs btn-group\">            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_perfil_show", array("id" => $this->getAttribute($context["entity"], "coPerfil", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\" title=\"Detalhar\">
            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
        </a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_perfil_edit", array("id" => $this->getAttribute($context["entity"], "coPerfil", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\" title=\"Editar\">
            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
        </a>
        <a class=\"btn btn-xs btn-danger btn-delete\" id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPerfil", array()), "html", null, true);
            echo "\" title=\"Deletar\">
        <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
    </a>
</div>
<div class=\"hidden-md hidden-lg\">
    <div class=\"inline pos-rel\">
        <button data-position=\"auto\" data-toggle=\"dropdown\" class=\"btn btn-minier btn-primary dropdown-toggle\">
            <i class=\"ace-icon fa fa-cog icon-only bigger-110\"></i>
        </button>

        <ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">                            <li>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_perfil_show", array("id" => $this->getAttribute($context["entity"], "coPerfil", array()))), "html", null, true);
            echo "\" title=\"Detalhar\" data-rel=\"tooltip\" class=\"tooltip-info\" href=\"#\" data-original-title=\"Detalhar\">
                        <span class=\"blue\">
                            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                        </span>
                    </a>
                </li>
                                                                <li>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_perfil_edit", array("id" => $this->getAttribute($context["entity"], "coPerfil", array()))), "html", null, true);
            echo "\" title=\"Editar\" data-rel=\"tooltip\" class=\"tooltip-success\" href=\"#\" data-original-title=\"Editar\">
                        <span class=\"green\">
                            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                        </span>
                    </a>
                </li>
                        <li>
                <a title=\"Deletar\" data-rel=\"tooltip\" id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPerfil", array()), "html", null, true);
            echo "\" class=\"tooltip-error btn-delete\" href=\"#\" data-original-title=\"Deletar\">
                    <span class=\"red\">
                        <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>                                            </td>                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <br />
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <a class=\"btn\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_perfil_new");
        echo "\">
                    <i class=\"ace-icon fa fa-plus bigger-120\"></i>
                    Novo
                </a>
            </div>
        </div>
        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    ";
        
        $__internal_15116e2e63a39bddedbf27dffef91e5f9a6675bc3a00034ec74ba109239ca5f3->leave($__internal_15116e2e63a39bddedbf27dffef91e5f9a6675bc3a00034ec74ba109239ca5f3_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21adef853d9c7bfc974a42d081337c49da5fcbf4a8fec33a93d3e83f44b950fd = $this->env->getExtension("native_profiler");
        $__internal_21adef853d9c7bfc974a42d081337c49da5fcbf4a8fec33a93d3e83f44b950fd->enter($__internal_21adef853d9c7bfc974a42d081337c49da5fcbf4a8fec33a93d3e83f44b950fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Plugins especificos da pagina -->
    <script src='";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.bootstrap.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/extensions/TableTools/js/dataTables.tableTools.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/extensions/ColVis/js/dataTables.colVis.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/listagem.js"), "html", null, true);
        echo "'></script>
    <!-- Configuracao da Tela -->
";
        
        $__internal_21adef853d9c7bfc974a42d081337c49da5fcbf4a8fec33a93d3e83f44b950fd->leave($__internal_21adef853d9c7bfc974a42d081337c49da5fcbf4a8fec33a93d3e83f44b950fd_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Perfil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 101,  242 => 100,  238 => 99,  234 => 98,  230 => 97,  224 => 95,  218 => 94,  209 => 91,  200 => 85,  188 => 75,  172 => 65,  162 => 58,  152 => 51,  138 => 40,  132 => 37,  114 => 34,  106 => 28,  102 => 27,  80 => 7,  74 => 6,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/*     {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/*     {% block title %} Perfil {% endblock %}*/
/*     {% block header %} Perfil {% endblock %}*/
/*     {% block subheader %} Lista {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <div class="clearfix">*/
/*                         <div class="pull-right tableTools-container"></div>*/
/*                     </div>*/
/*                     <div>*/
/*                         <table id="dynamic-table" class="table table-striped table-bordered table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th class="center">*/
/*                                         <label class="pos-rel">*/
/*                                             <input type="checkbox" class="ace" />*/
/*                                             <span class="lbl"></span>*/
/*                                         </label>*/
/*                                     </th>                                        <th>Perfil</th>                                        <th>Nome</th>                                        <th>Ativo</th>                                    <th>Ações</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for entity in entities %}*/
/*                                 <tr>*/
/*                                     <td class="center">*/
/*                                         <label class="pos-rel">*/
/*                                             <input type="checkbox" class="ace" />*/
/*                                             <span class="lbl"></span>*/
/*                                         </label>*/
/*                                     </td>                                            <td><a href="{{ path('admin_perfil_show', { 'id': entity.coPerfil }) }}">{{ entity.coPerfil }}</a></td>                                            <td>{{ entity.noNome }}</td>                                            <td>{% if entity.isAtivo == 1 %} <span class="label label-success arrowed-in">Sim</span> {% else %} <span class="label label-danger arrowed-in">Não</span> {% endif %}</td>                                            <td><div class="hidden-sm hidden-xs btn-group">            <a href="{{ path('admin_perfil_show', { 'id': entity.coPerfil }) }}" class="btn btn-xs btn-warning" title="Detalhar">*/
/*             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*         </a>*/
/*                         <a href="{{ path('admin_perfil_edit', { 'id': entity.coPerfil }) }}" class="btn btn-xs btn-info" title="Editar">*/
/*             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*         </a>*/
/*         <a class="btn btn-xs btn-danger btn-delete" id="{{ entity.coPerfil }}" title="Deletar">*/
/*         <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*     </a>*/
/* </div>*/
/* <div class="hidden-md hidden-lg">*/
/*     <div class="inline pos-rel">*/
/*         <button data-position="auto" data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">*/
/*             <i class="ace-icon fa fa-cog icon-only bigger-110"></i>*/
/*         </button>*/
/* */
/*         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">                            <li>*/
/*                     <a href="{{ path('admin_perfil_show', { 'id': entity.coPerfil }) }}" title="Detalhar" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="Detalhar">*/
/*                         <span class="blue">*/
/*                             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                                                                 <li>*/
/*                     <a href="{{ path('admin_perfil_edit', { 'id': entity.coPerfil }) }}" title="Editar" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Editar">*/
/*                         <span class="green">*/
/*                             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                         <li>*/
/*                 <a title="Deletar" data-rel="tooltip" id="{{ entity.coPerfil }}" class="tooltip-error btn-delete" href="#" data-original-title="Deletar">*/
/*                     <span class="red">*/
/*                         <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>                                            </td>                                </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*             <br />*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <a class="btn" href="{{ path('admin_perfil_new') }}">*/
/*                     <i class="ace-icon fa fa-plus bigger-120"></i>*/
/*                     Novo*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         {{ form(delete_form) }}*/
/*     {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <!-- Plugins especificos da pagina -->*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.min.js')}}'></script>*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.bootstrap.min.js')}}'></script>*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/dataTables/extensions/TableTools/js/dataTables.tableTools.min.js')}}'></script>*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/dataTables/extensions/ColVis/js/dataTables.colVis.min.js')}}'></script>*/
/*     <script src='{{asset('bundles/nutrirbox/dist/js/config/listagem.js')}}'></script>*/
/*     <!-- Configuracao da Tela -->*/
/* {% endblock %}*/
/*  */
/* */
