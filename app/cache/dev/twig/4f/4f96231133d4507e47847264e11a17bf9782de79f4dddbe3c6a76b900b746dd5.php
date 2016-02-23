<?php

/* NutrirBoxBundle:Ingrediente:index.html.twig */
class __TwigTemplate_ffae51833b733971ef532a54a65044f2df6d169918d0701d49237e4b378a2f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Ingrediente:index.html.twig", 1);
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
        $__internal_8abfccb39a6d33d532921094c0e7e3a78bb68bbc4e1efe8e4c52330a09af8768 = $this->env->getExtension("native_profiler");
        $__internal_8abfccb39a6d33d532921094c0e7e3a78bb68bbc4e1efe8e4c52330a09af8768->enter($__internal_8abfccb39a6d33d532921094c0e7e3a78bb68bbc4e1efe8e4c52330a09af8768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Ingrediente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abfccb39a6d33d532921094c0e7e3a78bb68bbc4e1efe8e4c52330a09af8768->leave($__internal_8abfccb39a6d33d532921094c0e7e3a78bb68bbc4e1efe8e4c52330a09af8768_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f4be27349e424e12e523408f04c4287652e017837a80a04171250a258dbfab9 = $this->env->getExtension("native_profiler");
        $__internal_0f4be27349e424e12e523408f04c4287652e017837a80a04171250a258dbfab9->enter($__internal_0f4be27349e424e12e523408f04c4287652e017837a80a04171250a258dbfab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ingrediente ";
        
        $__internal_0f4be27349e424e12e523408f04c4287652e017837a80a04171250a258dbfab9->leave($__internal_0f4be27349e424e12e523408f04c4287652e017837a80a04171250a258dbfab9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f6d630edb96a88cd645211da6a5ba7cc77a4bd328af266e8a4c797d6c2d2ccff = $this->env->getExtension("native_profiler");
        $__internal_f6d630edb96a88cd645211da6a5ba7cc77a4bd328af266e8a4c797d6c2d2ccff->enter($__internal_f6d630edb96a88cd645211da6a5ba7cc77a4bd328af266e8a4c797d6c2d2ccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Ingrediente ";
        
        $__internal_f6d630edb96a88cd645211da6a5ba7cc77a4bd328af266e8a4c797d6c2d2ccff->leave($__internal_f6d630edb96a88cd645211da6a5ba7cc77a4bd328af266e8a4c797d6c2d2ccff_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_c000bba9f153d93eb16feb3de94f2aa2fce683196c71ee4d015aa7ae28312734 = $this->env->getExtension("native_profiler");
        $__internal_c000bba9f153d93eb16feb3de94f2aa2fce683196c71ee4d015aa7ae28312734->enter($__internal_c000bba9f153d93eb16feb3de94f2aa2fce683196c71ee4d015aa7ae28312734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Lista ";
        
        $__internal_c000bba9f153d93eb16feb3de94f2aa2fce683196c71ee4d015aa7ae28312734->leave($__internal_c000bba9f153d93eb16feb3de94f2aa2fce683196c71ee4d015aa7ae28312734_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_81758b8e9f8ebe589f5252c20d105c917879559f355416d388a7b93ce20fe7b8 = $this->env->getExtension("native_profiler");
        $__internal_81758b8e9f8ebe589f5252c20d105c917879559f355416d388a7b93ce20fe7b8->enter($__internal_81758b8e9f8ebe589f5252c20d105c917879559f355416d388a7b93ce20fe7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    </th>                                        <th>Ingrediente</th>                                        <th>Nome</th>                                        <th>Descricao</th>                                        <th>Valor</th>                                        <th>Ativo</th>                                    <th>Ações</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ingrediente_show", array("id" => $this->getAttribute($context["entity"], "coIngrediente", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coIngrediente", array()), "html", null, true);
            echo "</a></td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noNome", array()), "html", null, true);
            echo "</td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deDescricao", array()), "html", null, true);
            echo "</td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vlValor", array()), "html", null, true);
            echo "</td>                                            <td>";
            if (($this->getAttribute($context["entity"], "isAtivo", array()) == 1)) {
                echo " <span class=\"label label-success arrowed-in\">Sim</span> ";
            } else {
                echo " <span class=\"label label-danger arrowed-in\">Não</span> ";
            }
            echo "</td>                                            <td><div class=\"hidden-sm hidden-xs btn-group\">            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ingrediente_show", array("id" => $this->getAttribute($context["entity"], "coIngrediente", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\" title=\"Detalhar\">
            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
        </a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ingrediente_edit", array("id" => $this->getAttribute($context["entity"], "coIngrediente", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\" title=\"Editar\">
            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
        </a>
        <a class=\"btn btn-xs btn-danger btn-delete\" id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coIngrediente", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ingrediente_show", array("id" => $this->getAttribute($context["entity"], "coIngrediente", array()))), "html", null, true);
            echo "\" title=\"Detalhar\" data-rel=\"tooltip\" class=\"tooltip-info\" href=\"#\" data-original-title=\"Detalhar\">
                        <span class=\"blue\">
                            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                        </span>
                    </a>
                </li>
                                                                <li>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ingrediente_edit", array("id" => $this->getAttribute($context["entity"], "coIngrediente", array()))), "html", null, true);
            echo "\" title=\"Editar\" data-rel=\"tooltip\" class=\"tooltip-success\" href=\"#\" data-original-title=\"Editar\">
                        <span class=\"green\">
                            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                        </span>
                    </a>
                </li>
                        <li>
                <a title=\"Deletar\" data-rel=\"tooltip\" id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coIngrediente", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("admin_ingrediente_new");
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
        
        $__internal_81758b8e9f8ebe589f5252c20d105c917879559f355416d388a7b93ce20fe7b8->leave($__internal_81758b8e9f8ebe589f5252c20d105c917879559f355416d388a7b93ce20fe7b8_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e656417f3c91e9215884f02a4ffae8f84a6c498380edd4fcac5ba021bb15494 = $this->env->getExtension("native_profiler");
        $__internal_4e656417f3c91e9215884f02a4ffae8f84a6c498380edd4fcac5ba021bb15494->enter($__internal_4e656417f3c91e9215884f02a4ffae8f84a6c498380edd4fcac5ba021bb15494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4e656417f3c91e9215884f02a4ffae8f84a6c498380edd4fcac5ba021bb15494->leave($__internal_4e656417f3c91e9215884f02a4ffae8f84a6c498380edd4fcac5ba021bb15494_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Ingrediente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 101,  246 => 100,  242 => 99,  238 => 98,  234 => 97,  228 => 95,  222 => 94,  213 => 91,  204 => 85,  192 => 75,  176 => 65,  166 => 58,  156 => 51,  142 => 40,  136 => 37,  114 => 34,  106 => 28,  102 => 27,  80 => 7,  74 => 6,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/*     {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/*     {% block title %} Ingrediente {% endblock %}*/
/*     {% block header %} Ingrediente {% endblock %}*/
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
/*                                     </th>                                        <th>Ingrediente</th>                                        <th>Nome</th>                                        <th>Descricao</th>                                        <th>Valor</th>                                        <th>Ativo</th>                                    <th>Ações</th>*/
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
/*                                     </td>                                            <td><a href="{{ path('admin_ingrediente_show', { 'id': entity.coIngrediente }) }}">{{ entity.coIngrediente }}</a></td>                                            <td>{{ entity.noNome }}</td>                                            <td>{{ entity.deDescricao }}</td>                                            <td>{{ entity.vlValor }}</td>                                            <td>{% if entity.isAtivo == 1 %} <span class="label label-success arrowed-in">Sim</span> {% else %} <span class="label label-danger arrowed-in">Não</span> {% endif %}</td>                                            <td><div class="hidden-sm hidden-xs btn-group">            <a href="{{ path('admin_ingrediente_show', { 'id': entity.coIngrediente }) }}" class="btn btn-xs btn-warning" title="Detalhar">*/
/*             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*         </a>*/
/*                         <a href="{{ path('admin_ingrediente_edit', { 'id': entity.coIngrediente }) }}" class="btn btn-xs btn-info" title="Editar">*/
/*             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*         </a>*/
/*         <a class="btn btn-xs btn-danger btn-delete" id="{{ entity.coIngrediente }}" title="Deletar">*/
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
/*                     <a href="{{ path('admin_ingrediente_show', { 'id': entity.coIngrediente }) }}" title="Detalhar" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="Detalhar">*/
/*                         <span class="blue">*/
/*                             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                                                                 <li>*/
/*                     <a href="{{ path('admin_ingrediente_edit', { 'id': entity.coIngrediente }) }}" title="Editar" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Editar">*/
/*                         <span class="green">*/
/*                             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                         <li>*/
/*                 <a title="Deletar" data-rel="tooltip" id="{{ entity.coIngrediente }}" class="tooltip-error btn-delete" href="#" data-original-title="Deletar">*/
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
/*                 <a class="btn" href="{{ path('admin_ingrediente_new') }}">*/
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
