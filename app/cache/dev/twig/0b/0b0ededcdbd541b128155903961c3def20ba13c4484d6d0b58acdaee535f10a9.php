<?php

/* NutrirBoxBundle:Pessoa:index.html.twig */
class __TwigTemplate_9574c1b10e10c69c9c96568bbc30bd826465ef3f02000bacf8f3c7dc72a20d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Pessoa:index.html.twig", 2);
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
        $__internal_3705ccc35b64b8cfb234963f823543deef6b450368daa3016df9d7bb75b71f7e = $this->env->getExtension("native_profiler");
        $__internal_3705ccc35b64b8cfb234963f823543deef6b450368daa3016df9d7bb75b71f7e->enter($__internal_3705ccc35b64b8cfb234963f823543deef6b450368daa3016df9d7bb75b71f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Pessoa:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3705ccc35b64b8cfb234963f823543deef6b450368daa3016df9d7bb75b71f7e->leave($__internal_3705ccc35b64b8cfb234963f823543deef6b450368daa3016df9d7bb75b71f7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c73bab3016608c69aa54c89bc4fbf3032de286b34be2d2d9d9ec72c07fbbcce9 = $this->env->getExtension("native_profiler");
        $__internal_c73bab3016608c69aa54c89bc4fbf3032de286b34be2d2d9d9ec72c07fbbcce9->enter($__internal_c73bab3016608c69aa54c89bc4fbf3032de286b34be2d2d9d9ec72c07fbbcce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Clientes ";
        
        $__internal_c73bab3016608c69aa54c89bc4fbf3032de286b34be2d2d9d9ec72c07fbbcce9->leave($__internal_c73bab3016608c69aa54c89bc4fbf3032de286b34be2d2d9d9ec72c07fbbcce9_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd8f26a414eb550f3d99e20b46ef4e2182a4a24862221d8c03ee7c4519707ba1 = $this->env->getExtension("native_profiler");
        $__internal_fd8f26a414eb550f3d99e20b46ef4e2182a4a24862221d8c03ee7c4519707ba1->enter($__internal_fd8f26a414eb550f3d99e20b46ef4e2182a4a24862221d8c03ee7c4519707ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Clientes ";
        
        $__internal_fd8f26a414eb550f3d99e20b46ef4e2182a4a24862221d8c03ee7c4519707ba1->leave($__internal_fd8f26a414eb550f3d99e20b46ef4e2182a4a24862221d8c03ee7c4519707ba1_prof);

    }

    // line 5
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_c7842dd2673754a3212aaabb3191120c3cba3b7f2f9aea304a26cc5da6bf6ee0 = $this->env->getExtension("native_profiler");
        $__internal_c7842dd2673754a3212aaabb3191120c3cba3b7f2f9aea304a26cc5da6bf6ee0->enter($__internal_c7842dd2673754a3212aaabb3191120c3cba3b7f2f9aea304a26cc5da6bf6ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Lista ";
        
        $__internal_c7842dd2673754a3212aaabb3191120c3cba3b7f2f9aea304a26cc5da6bf6ee0->leave($__internal_c7842dd2673754a3212aaabb3191120c3cba3b7f2f9aea304a26cc5da6bf6ee0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_962a84ab335b82ed939e1ae5a7c1c7827c7950526aea21184f48f0c1fafa781b = $this->env->getExtension("native_profiler");
        $__internal_962a84ab335b82ed939e1ae5a7c1c7827c7950526aea21184f48f0c1fafa781b->enter($__internal_962a84ab335b82ed939e1ae5a7c1c7827c7950526aea21184f48f0c1fafa781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                                    </th>                                        
                                    <th>Nome</th>                                        
                                    <th>E-mail</th>                                        
                                    <th>Telefone</th>                                        
                                    <th>Celular</th>                                    
                                    <th>Data Nascimento</th>                                    
                                    <th>Status</th>                                    
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                                    <tr>
                                        <td class=\"center\">
                                            <label class=\"pos-rel\">
                                                <input type=\"checkbox\" class=\"ace\" />
                                                <span class=\"lbl\"></span>
                                            </label>
                                        </td>                                            
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noNome", array()), "html", null, true);
            echo "</td>                                            
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noEmail", array()), "html", null, true);
            echo "</td>                                            
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nuTelefone", array()), "html", null, true);
            echo "</td>                                            
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nuCelular", array()), "html", null, true);
            echo "</td>                                            
                                        <td>
                                            ";
            // line 48
            if ($this->getAttribute($context["entity"], "dtNascimento", array())) {
                // line 49
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dtNascimento", array()), "d/m/Y"), "html", null, true);
                echo "
                                            ";
            }
            // line 51
            echo "                                        </td>
                                        <td>
                                            ";
            // line 53
            if (($this->getAttribute($context["entity"], "isAtivo", array()) == 1)) {
                echo " 
                                                <span class=\"label label-success arrowed-in\">Sim</span> 
                                            ";
            } else {
                // line 55
                echo " 
                                                <span class=\"label label-danger arrowed-in\">Não</span> 
                                            ";
            }
            // line 58
            echo "                                        </td>                                            
                                        <td>
                                            <div class=\"hidden-sm hidden-xs btn-group\">            
                                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pessoa_show", array("id" => $this->getAttribute($context["entity"], "coPessoa", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\" title=\"Detalhar\">
                                                    <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                                                </a>
                                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pessoa_edit", array("id" => $this->getAttribute($context["entity"], "coPessoa", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\" title=\"Editar\">
                                                    <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                                                </a>
                                                <a class=\"btn btn-xs btn-danger btn-delete\" id=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPessoa", array()), "html", null, true);
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
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pessoa_show", array("id" => $this->getAttribute($context["entity"], "coPessoa", array()))), "html", null, true);
            echo "\" title=\"Detalhar\" data-rel=\"tooltip\" class=\"tooltip-info\" href=\"#\" data-original-title=\"Detalhar\">
                                                                <span class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pessoa_edit", array("id" => $this->getAttribute($context["entity"], "coPessoa", array()))), "html", null, true);
            echo "\" title=\"Editar\" data-rel=\"tooltip\" class=\"tooltip-success\" href=\"#\" data-original-title=\"Editar\">
                                                                <span class=\"green\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title=\"Deletar\" data-rel=\"tooltip\" id=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coPessoa", array()), "html", null, true);
            echo "\" class=\"tooltip-error btn-delete\" href=\"#\" data-original-title=\"Deletar\">
                                                                <span class=\"red\">
                                                                    <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                                            
                                        </td>                                
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        // line 114
        echo $this->env->getExtension('routing')->getPath("admin_pessoa_new");
        echo "\">
                <i class=\"ace-icon fa fa-plus bigger-120\"></i>
                Novo
            </a>
        </div>
    </div>
    ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_962a84ab335b82ed939e1ae5a7c1c7827c7950526aea21184f48f0c1fafa781b->leave($__internal_962a84ab335b82ed939e1ae5a7c1c7827c7950526aea21184f48f0c1fafa781b_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04f8c36adc1385a9d569eeb1c064cf45d4769fec2bea8b8667dbd23dd691e719 = $this->env->getExtension("native_profiler");
        $__internal_04f8c36adc1385a9d569eeb1c064cf45d4769fec2bea8b8667dbd23dd691e719->enter($__internal_04f8c36adc1385a9d569eeb1c064cf45d4769fec2bea8b8667dbd23dd691e719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Plugins especificos da pagina -->
    <script src='";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/jquery.dataTables.bootstrap.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/extensions/TableTools/js/dataTables.tableTools.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/dataTables/extensions/ColVis/js/dataTables.colVis.min.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/config/listagem.js"), "html", null, true);
        echo "'></script>
    <!-- Configuracao da Tela -->
";
        
        $__internal_04f8c36adc1385a9d569eeb1c064cf45d4769fec2bea8b8667dbd23dd691e719->leave($__internal_04f8c36adc1385a9d569eeb1c064cf45d4769fec2bea8b8667dbd23dd691e719_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Pessoa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 130,  285 => 129,  281 => 128,  277 => 127,  273 => 126,  267 => 124,  261 => 123,  252 => 120,  243 => 114,  231 => 104,  213 => 92,  203 => 85,  193 => 78,  179 => 67,  173 => 64,  167 => 61,  162 => 58,  157 => 55,  151 => 53,  147 => 51,  141 => 49,  139 => 48,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  113 => 36,  109 => 35,  80 => 8,  74 => 7,  62 => 5,  50 => 4,  38 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'NutrirBoxBundle::base.html.twig' %}*/
/* {% block title %} Clientes {% endblock %}*/
/* {% block header %} Clientes {% endblock %}*/
/* {% block subheader %} Lista {% endblock %}*/
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
/*                                     </th>                                        */
/*                                     <th>Nome</th>                                        */
/*                                     <th>E-mail</th>                                        */
/*                                     <th>Telefone</th>                                        */
/*                                     <th>Celular</th>                                    */
/*                                     <th>Data Nascimento</th>                                    */
/*                                     <th>Status</th>                                    */
/*                                     <th>Ações</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for entity in entities %}*/
/*                                     <tr>*/
/*                                         <td class="center">*/
/*                                             <label class="pos-rel">*/
/*                                                 <input type="checkbox" class="ace" />*/
/*                                                 <span class="lbl"></span>*/
/*                                             </label>*/
/*                                         </td>                                            */
/*                                         <td>{{ entity.noNome }}</td>                                            */
/*                                         <td>{{ entity.noEmail }}</td>                                            */
/*                                         <td>{{ entity.nuTelefone }}</td>                                            */
/*                                         <td>{{ entity.nuCelular }}</td>                                            */
/*                                         <td>*/
/*                                             {% if entity.dtNascimento %}*/
/*                                                 {{ entity.dtNascimento|date('d/m/Y') }}*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {% if entity.isAtivo == 1 %} */
/*                                                 <span class="label label-success arrowed-in">Sim</span> */
/*                                             {% else %} */
/*                                                 <span class="label label-danger arrowed-in">Não</span> */
/*                                             {% endif %}*/
/*                                         </td>                                            */
/*                                         <td>*/
/*                                             <div class="hidden-sm hidden-xs btn-group">            */
/*                                                 <a href="{{ path('admin_pessoa_show', { 'id': entity.coPessoa }) }}" class="btn btn-xs btn-warning" title="Detalhar">*/
/*                                                     <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                                                 </a>*/
/*                                                 <a href="{{ path('admin_pessoa_edit', { 'id': entity.coPessoa }) }}" class="btn btn-xs btn-info" title="Editar">*/
/*                                                     <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-xs btn-danger btn-delete" id="{{ entity.coPessoa }}" title="Deletar">*/
/*                                                     <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="hidden-md hidden-lg">*/
/*                                                 <div class="inline pos-rel">*/
/*                                                     <button data-position="auto" data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">*/
/*                                                         <i class="ace-icon fa fa-cog icon-only bigger-110"></i>*/
/*                                                     </button>*/
/* */
/*                                                     <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">                            <li>*/
/*                                                             <a href="{{ path('admin_pessoa_show', { 'id': entity.coPessoa }) }}" title="Detalhar" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="Detalhar">*/
/*                                                                 <span class="blue">*/
/*                                                                     <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                                                                 </span>*/
/*                                                             </a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="{{ path('admin_pessoa_edit', { 'id': entity.coPessoa }) }}" title="Editar" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Editar">*/
/*                                                                 <span class="green">*/
/*                                                                     <i class="ace-icon fa fa-pencil bigger-120"></i>*/
/*                                                                 </span>*/
/*                                                             </a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a title="Deletar" data-rel="tooltip" id="{{ entity.coPessoa }}" class="tooltip-error btn-delete" href="#" data-original-title="Deletar">*/
/*                                                                 <span class="red">*/
/*                                                                     <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*                                                                 </span>*/
/*                                                             </a>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>                                            */
/*                                         </td>                                */
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br />*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <a class="btn" href="{{ path('admin_pessoa_new') }}">*/
/*                 <i class="ace-icon fa fa-plus bigger-120"></i>*/
/*                 Novo*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
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
/* */
/* */
