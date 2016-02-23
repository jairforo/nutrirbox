<?php

/* NutrirBoxBundle:Pedido:meusPedidos.html.twig */
class __TwigTemplate_265b9577970684731030d089a618b312a0a23c5508479f019e97fbeaab92851b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Pedido:meusPedidos.html.twig", 1);
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
        $__internal_571cd4ce8064d66739af800b13e858b8eb6fdedb58a85c671cc8c5f9401bc2de = $this->env->getExtension("native_profiler");
        $__internal_571cd4ce8064d66739af800b13e858b8eb6fdedb58a85c671cc8c5f9401bc2de->enter($__internal_571cd4ce8064d66739af800b13e858b8eb6fdedb58a85c671cc8c5f9401bc2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Pedido:meusPedidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571cd4ce8064d66739af800b13e858b8eb6fdedb58a85c671cc8c5f9401bc2de->leave($__internal_571cd4ce8064d66739af800b13e858b8eb6fdedb58a85c671cc8c5f9401bc2de_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c042fe866efae1857d28b3178e6ac49cd3e12bb72523abcd1ad897cc6287682 = $this->env->getExtension("native_profiler");
        $__internal_9c042fe866efae1857d28b3178e6ac49cd3e12bb72523abcd1ad897cc6287682->enter($__internal_9c042fe866efae1857d28b3178e6ac49cd3e12bb72523abcd1ad897cc6287682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Pedido ";
        
        $__internal_9c042fe866efae1857d28b3178e6ac49cd3e12bb72523abcd1ad897cc6287682->leave($__internal_9c042fe866efae1857d28b3178e6ac49cd3e12bb72523abcd1ad897cc6287682_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d25dcf772cd64b528a694851e53d42f247c1ac0aef60f5a81cf564529a429a2b = $this->env->getExtension("native_profiler");
        $__internal_d25dcf772cd64b528a694851e53d42f247c1ac0aef60f5a81cf564529a429a2b->enter($__internal_d25dcf772cd64b528a694851e53d42f247c1ac0aef60f5a81cf564529a429a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Pedido ";
        
        $__internal_d25dcf772cd64b528a694851e53d42f247c1ac0aef60f5a81cf564529a429a2b->leave($__internal_d25dcf772cd64b528a694851e53d42f247c1ac0aef60f5a81cf564529a429a2b_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_c4a86226f4044458d8e51ddc9006f7ccf08adfd58e388b3621ea932d2105cab2 = $this->env->getExtension("native_profiler");
        $__internal_c4a86226f4044458d8e51ddc9006f7ccf08adfd58e388b3621ea932d2105cab2->enter($__internal_c4a86226f4044458d8e51ddc9006f7ccf08adfd58e388b3621ea932d2105cab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Lista ";
        
        $__internal_c4a86226f4044458d8e51ddc9006f7ccf08adfd58e388b3621ea932d2105cab2->leave($__internal_c4a86226f4044458d8e51ddc9006f7ccf08adfd58e388b3621ea932d2105cab2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ccfa7795476248fe38fd527847de546e657d7999e0d5949114e85f80ad57a24 = $this->env->getExtension("native_profiler");
        $__internal_3ccfa7795476248fe38fd527847de546e657d7999e0d5949114e85f80ad57a24->enter($__internal_3ccfa7795476248fe38fd527847de546e657d7999e0d5949114e85f80ad57a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    </th>                                        <th>Pedido</th>                                        <th>Referencia</th>                                        <th>Cadastro</th>                                        <th>Ativo</th>                                    <th>Ações</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pedido_show", array("id" => $this->getAttribute($context["entity"], "coPedido", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPedido", array()), "html", null, true);
            echo "</a></td>                                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nuReferencia", array()), "html", null, true);
            echo "</td>                                            <td>";
            if ($this->getAttribute($context["entity"], "dtCadastro", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dtCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>                                            <td>";
            if (($this->getAttribute($context["entity"], "isAtivo", array()) == 1)) {
                echo " <span class=\"label label-success arrowed-in\">Sim</span> ";
            } else {
                echo " <span class=\"label label-danger arrowed-in\">Não</span> ";
            }
            echo "</td>                                            <td><div class=\"hidden-sm hidden-xs btn-group\">            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pedido_show", array("id" => $this->getAttribute($context["entity"], "coPedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\" title=\"Detalhar\">
            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
        </a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pedido_edit", array("id" => $this->getAttribute($context["entity"], "coPedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\" title=\"Editar\">
            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
        </a>
        <a class=\"btn btn-xs btn-danger btn-delete\" id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPedido", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pedido_show", array("id" => $this->getAttribute($context["entity"], "coPedido", array()))), "html", null, true);
            echo "\" title=\"Detalhar\" data-rel=\"tooltip\" class=\"tooltip-info\" href=\"#\" data-original-title=\"Detalhar\">
                        <span class=\"blue\">
                            <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                        </span>
                    </a>
                </li>
                                                                <li>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pedido_edit", array("id" => $this->getAttribute($context["entity"], "coPedido", array()))), "html", null, true);
            echo "\" title=\"Editar\" data-rel=\"tooltip\" class=\"tooltip-success\" href=\"#\" data-original-title=\"Editar\">
                        <span class=\"green\">
                            <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                        </span>
                    </a>
                </li>
                        <li>
                <a title=\"Deletar\" data-rel=\"tooltip\" id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPedido", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("admin_pedido_new");
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
        
        $__internal_3ccfa7795476248fe38fd527847de546e657d7999e0d5949114e85f80ad57a24->leave($__internal_3ccfa7795476248fe38fd527847de546e657d7999e0d5949114e85f80ad57a24_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bc096c6a55d42b88b29aa918456f488df910ecfee74b5811bf1e314d07b3a6c = $this->env->getExtension("native_profiler");
        $__internal_1bc096c6a55d42b88b29aa918456f488df910ecfee74b5811bf1e314d07b3a6c->enter($__internal_1bc096c6a55d42b88b29aa918456f488df910ecfee74b5811bf1e314d07b3a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1bc096c6a55d42b88b29aa918456f488df910ecfee74b5811bf1e314d07b3a6c->leave($__internal_1bc096c6a55d42b88b29aa918456f488df910ecfee74b5811bf1e314d07b3a6c_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Pedido:meusPedidos.html.twig";
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
/*     {% block title %} Pedido {% endblock %}*/
/*     {% block header %} Pedido {% endblock %}*/
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
/*                                     </th>                                        <th>Pedido</th>                                        <th>Referencia</th>                                        <th>Cadastro</th>                                        <th>Ativo</th>                                    <th>Ações</th>*/
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
/*                                     </td>                                            <td><a href="{{ path('admin_pedido_show', { 'id': entity.coPedido }) }}">{{ entity.coPedido }}</a></td>                                            <td>{{ entity.nuReferencia }}</td>                                            <td>{% if entity.dtCadastro %}{{ entity.dtCadastro|date('d/m/Y H:i:s') }}{% endif %}</td>                                            <td>{% if entity.isAtivo == 1 %} <span class="label label-success arrowed-in">Sim</span> {% else %} <span class="label label-danger arrowed-in">Não</span> {% endif %}</td>                                            <td><div class="hidden-sm hidden-xs btn-group">            <a href="{{ path('admin_pedido_show', { 'id': entity.coPedido }) }}" class="btn btn-xs btn-warning" title="Detalhar">*/
/*             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*         </a>*/
/*                         <a href="{{ path('admin_pedido_edit', { 'id': entity.coPedido }) }}" class="btn btn-xs btn-info" title="Editar">*/
/*             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*         </a>*/
/*         <a class="btn btn-xs btn-danger btn-delete" id="{{ entity.coPedido }}" title="Deletar">*/
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
/*                     <a href="{{ path('admin_pedido_show', { 'id': entity.coPedido }) }}" title="Detalhar" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="Detalhar">*/
/*                         <span class="blue">*/
/*                             <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                                                                 <li>*/
/*                     <a href="{{ path('admin_pedido_edit', { 'id': entity.coPedido }) }}" title="Editar" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Editar">*/
/*                         <span class="green">*/
/*                             <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*                         <li>*/
/*                 <a title="Deletar" data-rel="tooltip" id="{{ entity.coPedido }}" class="tooltip-error btn-delete" href="#" data-original-title="Deletar">*/
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
/*                 <a class="btn" href="{{ path('admin_pedido_new') }}">*/
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
