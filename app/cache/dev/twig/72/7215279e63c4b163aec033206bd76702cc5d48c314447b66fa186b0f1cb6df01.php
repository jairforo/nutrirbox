<?php

/* NutrirBoxBundle:TipoIngrediente:index.html.twig */
class __TwigTemplate_4adb5b1278088aa3751f0ae041104544caec7cba31f5c8eae6925459bd15165e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:TipoIngrediente:index.html.twig", 1);
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
        $__internal_7624461d832fa7c7bd0254644d326af9db9760740d9f0288d83d647d0a6b44ea = $this->env->getExtension("native_profiler");
        $__internal_7624461d832fa7c7bd0254644d326af9db9760740d9f0288d83d647d0a6b44ea->enter($__internal_7624461d832fa7c7bd0254644d326af9db9760740d9f0288d83d647d0a6b44ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:TipoIngrediente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7624461d832fa7c7bd0254644d326af9db9760740d9f0288d83d647d0a6b44ea->leave($__internal_7624461d832fa7c7bd0254644d326af9db9760740d9f0288d83d647d0a6b44ea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a8f6a0008338f6edc41d0761b03c31499efd9d9a0a8f69c7c05cf44ad3322e = $this->env->getExtension("native_profiler");
        $__internal_06a8f6a0008338f6edc41d0761b03c31499efd9d9a0a8f69c7c05cf44ad3322e->enter($__internal_06a8f6a0008338f6edc41d0761b03c31499efd9d9a0a8f69c7c05cf44ad3322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tipo de Ingrediente ";
        
        $__internal_06a8f6a0008338f6edc41d0761b03c31499efd9d9a0a8f69c7c05cf44ad3322e->leave($__internal_06a8f6a0008338f6edc41d0761b03c31499efd9d9a0a8f69c7c05cf44ad3322e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_08291e5601bc681461364daddcf98d76fde736cc5e597230699110afcd5f98dc = $this->env->getExtension("native_profiler");
        $__internal_08291e5601bc681461364daddcf98d76fde736cc5e597230699110afcd5f98dc->enter($__internal_08291e5601bc681461364daddcf98d76fde736cc5e597230699110afcd5f98dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Tipo de Ingrediente ";
        
        $__internal_08291e5601bc681461364daddcf98d76fde736cc5e597230699110afcd5f98dc->leave($__internal_08291e5601bc681461364daddcf98d76fde736cc5e597230699110afcd5f98dc_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_3ea036909f934f7cac23089a668a054dfec8526a8b1528ee17ebe5273b03a82c = $this->env->getExtension("native_profiler");
        $__internal_3ea036909f934f7cac23089a668a054dfec8526a8b1528ee17ebe5273b03a82c->enter($__internal_3ea036909f934f7cac23089a668a054dfec8526a8b1528ee17ebe5273b03a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Lista ";
        
        $__internal_3ea036909f934f7cac23089a668a054dfec8526a8b1528ee17ebe5273b03a82c->leave($__internal_3ea036909f934f7cac23089a668a054dfec8526a8b1528ee17ebe5273b03a82c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d6e3db1d25dc47a58a4d1ff47fef46dbbb9ae3054e3be062ef92dcee1d67ac6 = $this->env->getExtension("native_profiler");
        $__internal_6d6e3db1d25dc47a58a4d1ff47fef46dbbb9ae3054e3be062ef92dcee1d67ac6->enter($__internal_6d6e3db1d25dc47a58a4d1ff47fef46dbbb9ae3054e3be062ef92dcee1d67ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    </th>                                        <th>Tipoingrediente</th>                                        <th>Nome</th>                                        <th>Ativo</th>                                    <th>Ações</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_show", array("id" => $this->getAttribute($context["entity"], "coTipoIngrediente", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coTipoIngrediente", array()), "html", null, true);
            echo "</a></td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noNome", array()), "html", null, true);
            echo "</td>                                            <td>";
            if (($this->getAttribute($context["entity"], "isAtivo", array()) == 1)) {
                echo " <span class=\"label label-success arrowed-in\">Sim</span> ";
            } else {
                echo " <span class=\"label label-danger arrowed-in\">Não</span> ";
            }
            echo "</td>                                            <td><div class=\"hidden-sm hidden-xs btn-group\">            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_show", array("id" => $this->getAttribute($context["entity"], "coTipoIngrediente", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\" title=\"Detalhar\">
            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
        </a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_edit", array("id" => $this->getAttribute($context["entity"], "coTipoIngrediente", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\" title=\"Editar\">
            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
        </a>
        <a class=\"btn btn-xs btn-danger btn-delete\" id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coTipoIngrediente", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_show", array("id" => $this->getAttribute($context["entity"], "coTipoIngrediente", array()))), "html", null, true);
            echo "\" title=\"Detalhar\" data-rel=\"tooltip\" class=\"tooltip-info\" href=\"#\" data-original-title=\"Detalhar\">
                        <span class=\"blue\">
                            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                        </span>
                    </a>
                </li>
                                                                <li>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tipoingrediente_edit", array("id" => $this->getAttribute($context["entity"], "coTipoIngrediente", array()))), "html", null, true);
            echo "\" title=\"Editar\" data-rel=\"tooltip\" class=\"tooltip-success\" href=\"#\" data-original-title=\"Editar\">
                        <span class=\"green\">
                            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                        </span>
                    </a>
                </li>
                        <li>
                <a title=\"Deletar\" data-rel=\"tooltip\" id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coTipoIngrediente", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente_new");
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
        
        $__internal_6d6e3db1d25dc47a58a4d1ff47fef46dbbb9ae3054e3be062ef92dcee1d67ac6->leave($__internal_6d6e3db1d25dc47a58a4d1ff47fef46dbbb9ae3054e3be062ef92dcee1d67ac6_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c79e19c9f6b025fec5b826c629997366ae6e2fb55836acb088faa6d4d9a6cb9 = $this->env->getExtension("native_profiler");
        $__internal_6c79e19c9f6b025fec5b826c629997366ae6e2fb55836acb088faa6d4d9a6cb9->enter($__internal_6c79e19c9f6b025fec5b826c629997366ae6e2fb55836acb088faa6d4d9a6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6c79e19c9f6b025fec5b826c629997366ae6e2fb55836acb088faa6d4d9a6cb9->leave($__internal_6c79e19c9f6b025fec5b826c629997366ae6e2fb55836acb088faa6d4d9a6cb9_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:TipoIngrediente:index.html.twig";
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
/*     {% block title %} Tipo de Ingrediente {% endblock %}*/
/*     {% block header %} Tipo de Ingrediente {% endblock %}*/
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
/*                                     </th>                                        <th>Tipoingrediente</th>                                        <th>Nome</th>                                        <th>Ativo</th>                                    <th>Ações</th>*/
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
/*                                     </td>                                            <td><a href="{{ path('admin_tipoingrediente_show', { 'id': entity.coTipoIngrediente }) }}">{{ entity.coTipoIngrediente }}</a></td>                                            <td>{{ entity.noNome }}</td>                                            <td>{% if entity.isAtivo == 1 %} <span class="label label-success arrowed-in">Sim</span> {% else %} <span class="label label-danger arrowed-in">Não</span> {% endif %}</td>                                            <td><div class="hidden-sm hidden-xs btn-group">            <a href="{{ path('admin_tipoingrediente_show', { 'id': entity.coTipoIngrediente }) }}" class="btn btn-xs btn-warning" title="Detalhar">*/
/*             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*         </a>*/
/*                         <a href="{{ path('admin_tipoingrediente_edit', { 'id': entity.coTipoIngrediente }) }}" class="btn btn-xs btn-info" title="Editar">*/
/*             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*         </a>*/
/*         <a class="btn btn-xs btn-danger btn-delete" id="{{ entity.coTipoIngrediente }}" title="Deletar">*/
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
/*                     <a href="{{ path('admin_tipoingrediente_show', { 'id': entity.coTipoIngrediente }) }}" title="Detalhar" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="Detalhar">*/
/*                         <span class="blue">*/
/*                             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                                                                 <li>*/
/*                     <a href="{{ path('admin_tipoingrediente_edit', { 'id': entity.coTipoIngrediente }) }}" title="Editar" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Editar">*/
/*                         <span class="green">*/
/*                             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                         <li>*/
/*                 <a title="Deletar" data-rel="tooltip" id="{{ entity.coTipoIngrediente }}" class="tooltip-error btn-delete" href="#" data-original-title="Deletar">*/
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
/*                 <a class="btn" href="{{ path('admin_tipoingrediente_new') }}">*/
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
